<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Change account</h3>
I
<form action="includes/userupdate.inc.php" method="post">
<input type="text" name="username" placeholder="Username">
<input type="password" name="pwd" placeholder="Password">
<input type="text" name="email" placeholder="EMail">
<button>Update</button>
</form>
<h3>Delete account</h3>
<form action="includes/userdelete.inc.php" method="post">
<input type="text" name="username" placeholder="Username">
<input type="password" name="pwd" placeholder="Password">
<button>Delete</button>
</form>

</body>
</html>