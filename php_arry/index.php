<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$colors =array('red' ,'green' , "white");

//$colors = ['red', 'green', 'white'];


$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$colors[0]} carpet, 
the {$colors[1]} lawn, the {$colors[2]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";


echo $paragraph;

echo "<br>";
echo "<br>";


$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", 
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

//$firstThreeColors = array_slice($cities, 0, 3);
foreach($cities as $key => $value){
    echo "The capital of {$key} is {$value}" .  "<br>";
}


echo "<br>";
echo "<br>";


$color = array (4 => 'white', 6 => 'green', 11=> 'red');
//echo $color[4];
$firstColor = reset($color);// Get the first element using reset()
echo $firstColor;


$original = array(1, 2, 3, 4, 5);
$inserted = array('x');
array_splice($original, 3, 0, $inserted); 

foreach ($original as $result) {
    echo $result;
    echo "<br>";
}


 print_r($original);
 var_dump($original);

 echo "<br>";
 echo "<br>";

 $array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
print_r(array_merge($array1,$array2));


echo "<br>";
echo "<br>";

$colors = array("rEd","blue", "white","yellow");
//sort($colors);
//$newArray=array_unique($colors);
// foreach($newArray as $strItem){
// echo $strItem." ";
// }

$uppercaseCharacters = array_map('strtoupper', $colors);
print_r($uppercaseCharacters);
echo "<br>";
echo "<br>";
$lowercaseCharacters = array_map('strtolower', $colors);
print_r($lowercaseCharacters);


echo "<br>";
echo "<br>";

for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 === 0) {
        echo $i . "<br>";
    }
}

echo "<br>";
echo "<br>";
$words = array("abcd","abc","de","hjjj","g","wer");
 
// for($i=0;$i<count($words);$i++){
//     if (count($words[$i]) > count($words[$j])) {  echo $words[$i];
//     }
// }


$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

$shortest = $words[0];
$longest = $words[0];

foreach ($words as $word) {
    if (strlen($word) < strlen($shortest)) {
        $shortest = $word;
    }
    if (strlen($word) > strlen($longest)) {
        $longest = $word;
    }
}

echo "Shortest string:" .strlen($shortest)."<br>";
echo "Longest string:" .strlen($longest)."<br>";


echo "<br>";
echo "<br>";

$total = rand(11,20);

for($i=0;$i<=10;$i++){
    $total = rand(11,20);
echo $total . " ";

}

echo "<br>";
echo "<br>";





 $array6 = array( 2, 0, 10, 12, 6);

//  $min = null;


//  foreach ($array6 as $value){
//     if ($value !== 0 && $min === null )
//     {
//        $min= min($value);
//     }

// }
// echo $min;
 $lowest = null;
 foreach ($array6 as $value) {
    if ($value !== 0 && ($lowest === null || $value < $lowest)) {
        $lowest = $value;
    }
}

echo "The lowest non-zero integer is: " . $lowest;
    ?>
</body>
</html>