<?php
include('config.php');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $sql = "DELETE FROM users WHERE id = :id"; 
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Record deleted successfully";
        } else {
            echo "No record found with that ID.";
        }
    } catch (PDOException $e) {
        echo "Error deleting record: " . $e->getMessage();
    }
} else {
    echo "No ID provided";
}

$conn = null;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">Back to User List</a>

</body>
</html>