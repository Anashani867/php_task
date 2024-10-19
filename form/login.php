<?php
session_start();
include('config.php');

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // تنظيف المدخلات
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    // التحقق من صحة البريد الإلكتروني
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        // البحث عن المستخدم في قاعدة البيانات
        try {
            $sql = "SELECT id, firstname, password FROM users WHERE email = :email";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                // تحقق من كلمة المرور باستخدام password_verify
                if (password_verify($password, $user['password'])) {
                    // تخزين بيانات المستخدم في الجلسة
                    session_regenerate_id(true);
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['firstname'] = $user['firstname'];

                    // إعادة التوجيه إلى الصفحة الرئيسية
                    header("Location: /index.php"); // تأكد من أن لديك index.php
                    exit;
                } else {
                    $error = "Invalid email or password.";
                }
            } else {
                $error = "User not found.";
            }
        } catch (PDOException $e) {
            $error = "Error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if ($error): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form method="post" action="index.php">
   <!--<p> <?php //echo htmlspecialchars($_SERVER['PHP_SELF']); ?> </p>-->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
    <br>
    Don't have an account? <a href="signup.php">Sign up here</a>.
</body>
</html>
