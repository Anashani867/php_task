 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "heloo"  ?></title>
</head>
<body>
<?php

$text="wlcome to PHP";
echo strtoupper($text);
echo "<br>";
echo strtolower($text);
echo "<br>";
echo ucfirst($text);
echo "<br>";
echo lcfirst($text);
echo "<br>";
echo ucwords($text);
echo "<br>";
$str1 ='082307';
echo substr( chunk_split($str1,2,":") ,0 ,-1);
echo "<br>";

$str2 = "I am a full stack developer at orange coding academy";
$find = stripos($str2 , "Orange" );

if($find !== false){
    echo "word found";
}

else{
    echo "word not fond";
}


echo "<br>";


$path = 'www.example.com/public_html/index.php'; 
$file_name = substr(strrchr($path, "/"), 1);     // Finds the last occurrence of '/' in $path and extracts the substring after it
echo $file_name."\n";  

echo "<br>";


$path = 'info@orange.com'; 
$user = strstr($path, '@', true); 
echo $user."\n";   
echo "<br>";

$path = 'info@orange.com'; 
$file_name = substr(strrchr($path, "@"), -3);     // Finds the last occurrence of '/' in $path and extracts the substring after it
echo $file_name."\n";  

echo "<br>";

function generateRandomPassword($length = 8) {
    // The base string of characters to be used for generating the password
    $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $password = '';

    // Creating the random password
    for ($i = 0; $i < $length; $i++) {
        // Using mt_rand to get a random index
        $randomIndex = mt_rand(0, $charactersLength - 1);
        // Appending the random character to the password
        $password .= $characters[$randomIndex];
    }

    return $password;
}

// Using the function to generate a password
$password = generateRandomPassword(12); // You can change the length as desired
echo "Random Password: $password\n";




function password_generate($chars) 
{
  // Define a string containing all possible characters for the password
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  // Shuffle the characters in the string and extract a substring of length $chars
  return substr(str_shuffle($data), 0, $chars);
}
// Call the password_generate function with 7 characters and echo the generated password
echo password_generate(7)."\n";

// $plal =7;
// $data2 = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';

// $anas = substr(str_shuffle($data1), 0, $plal);
// echo $anas;


echo "<br>";

$str = 'That new trainee is so genius';
// Use preg_replace function to replace the first occurrence of the word 'the' with 'That' in the string.
// The pattern '/the/' is a regular expression pattern matching the word 'the'.
// 'That' is the replacement string.
// The '1' parameter specifies that only the first occurrence of 'the' should be replaced.
echo preg_replace('/That/', 'Our', $str, 1)."\n"; 
echo "<br>";

$str2 ="dragonball";
$str3 ="dragonboll";
 for($i=0; $i<strlen($str2); $i++)
 {
    if($str2[$i] !== $str3[$i]){
        echo $str2[$i] .$str3[$i];
        break;

    };

 }


 $arr = array("Twinkle", "twinkle","little star.");
 var_dump($arr);

 echo "<br>";


$sentence = 'I am happy today.';
$string = 'very ';
$position = '5';

echo substr_replace( $sentence, $string, $position, 0 );

echo "<br>";

$num3= '0000657022.24';

echo preg_replace('/0/', '', $num3 );

echo "<br>";

$words= 'The quick brown fox jumps over the lazy dog';

echo preg_replace('/fox/', '', $words );

echo "<br>";

$words1= 'The quick brown fox jumps over the lazy dog---';

echo preg_replace('/-/', '', $words1 );


function clean($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
 
    //return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    return preg_replace('/[+\-\/\\\\\'"*:]/', '', $string); // Removes special chars.

 }
 echo "<br>";

 echo clean( '\"\1+2/3*2:2-3/4*3');


 echo "<br>";


 $my_string = 'The quick brown fox jumps over the lazy dog';
// Define the original string.

echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
// Split the string into an array of words, take the first 5 elements, join them with a space, and output the result.

echo "<br>";

$words3= '2,543.12';

echo preg_replace('/,/', '', $words3 );

echo "<br>";

for ($x = ord('a'); $x <= ord('z'); $x++) {
    echo chr($x);
}

echo "<br>";

for ($x = ord('a'); $x <= ord('z'); $x++) {
    if($x==)
}
?>

</body>
</html>