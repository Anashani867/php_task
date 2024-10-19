<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php



function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; 
        }
    }
    
    return true; 
}

$number = 5; 
if (isPrime($number)) {
    echo "{$number} is a prime number.";
} else {
    echo "{$number} is not a prime number.";
}
echo "<br>";
$string = "remove";
$reversed = strrev($string);
echo $reversed;

echo "<br>";


function isAllLowerCase($string) {
    return $string === strtolower($string);
}

$testString = "remove";
if (isAllLowerCase($testString)) {
    echo "All characters are lower cases.";
} else {
    echo "Not all characters are lower cases.";
}

echo "<br>";


function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$x = 12;
$y = 10;

swap($x, $y);

echo "x is now: " . $x . "\n";
echo "y is now: " . $y . "\n";


echo "<br>";

function isArmstrongNumber($number) {
    $sum = 0;
    $length = strlen($number);
    $number = (string)$number;

    for ($i = 0; $i < $length; $i++) {
        $sum += pow((int)$number[$i], $length);
    }

    return (int)$number === $sum;
}

// Example usage:
$number = 153;
if (isArmstrongNumber($number)) {
    echo "The number $number is an Armstrong number.";
} else {
    echo "The number $number is not an Armstrong number.";
}

function isPalindrome($string) {
    // تحويل السلسلة إلى حروف صغيرة وإزالة الفواصل والمسافات
    $cleanedString = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $string));

    // عكس السلسلة
    $reversedString = strrev($cleanedString);

    // التحقق مما إذا كانت السلسلتين متساويتين
    return $cleanedString === $reversedString;
}

// مثال على الاستخدام:
$inputString = "Eva, can I see bees in a cave?";
if (isPalindrome($inputString)) {
    echo "Yes, it is a palindrome.";
} else {
    echo "No, it is not a palindrome.";
}


// $array1 = array(2, 4, 7, 4, 8, 4);
// $array1 = array_unique($array1);
// print_r($array1);



function removeDuplicates($array) {
    $uniqueArray = []; // Initialize an empty array to hold unique values
    foreach ($array as $value) {
        // Check if the value is not already in the unique array
        if (!in_array($value, $uniqueArray)) {
            $uniqueArray[] = $value; // Add the value to the unique array
        }
    }
    return $uniqueArray; // Return the array with duplicates removed
}

// Sample input
$array1 = array(2, 4, 7, 4, 8, 4);
$result = removeDuplicates($array1);
print_r($result);


    ?>
</body>
</html>