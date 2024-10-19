<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = ""; // Initialize an empty string to hold the numbers

    for ($i = 1; $i <= 10; $i++) {
        // Concatenate the current number and a dash
        $numbers .= $i . "-";
    }

    // Remove the last dash (-) using rtrim
    $output = rtrim($numbers, "-");

    // Display the result
    echo $output;
    ?>
</body>
</html>
