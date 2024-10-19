<?php
session_start();
include('config.php');

// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit;
// }

try {
    $sql = "SELECT * FROM users";
    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        echo "<h3>User List</h3>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>
        <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>";

        foreach ($result as $row) {
            echo "<tr>
                <td>" . htmlspecialchars($row['id']) . "</td>
                <td>" . htmlspecialchars($row['firstname']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
                <td>" . htmlspecialchars($row['password']) . "</td>
                <td>
                    <a href='del.php?id=" . htmlspecialchars($row['id']) . "' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
                    <a href='update.php?id=" . htmlspecialchars($row['id']) . "'>Edit</a>
                </td>
            </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "No data found.";
    }
} catch (PDOException $e) {
    echo "Error fetching data: " . $e->getMessage();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<a href="login.php?logout=true">Logout</a>