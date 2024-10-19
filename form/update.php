<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // جلب السجل الحالي بناءً على المعرف
    try {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            echo "No record found with that ID.";
            exit;
        }
    } catch (PDOException $e) {
        echo "Error fetching data: " . $e->getMessage();
        exit;
    }
} else {
    echo "No ID provided.";
    exit;
}

// معالجة النموذج عند الإرسال
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // تحديث السجل
    try {
        $sql = "UPDATE users SET firstname = :firstname, email = :email, password = :password WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        echo "Record updated successfully.";
        // يمكنك إعادة التوجيه إلى صفحة العرض أو إضافة رابط للعودة
        echo "<br><a href='index.php'>Back to User List</a>";
        exit;
    } catch (PDOException $e) {
        echo "Error updating record: " . $e->getMessage();
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post">
        <label for="firstname">Firstname:</label><br>
        <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($user['firstname']); ?>" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($user['password']); ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
    <br>
    <a href="index.php">Back to User List</a>
</body>
</html>
