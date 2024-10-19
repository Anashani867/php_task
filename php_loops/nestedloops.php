<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $pattern = '';
    // $letters = ['A', 'B', 'C', 'D', 'E'];
    
    // for ($i = 0; $i < count($letters); $i++) {
    //     for ($j = 0; $j <= $i; $j++) {
    //         $pattern .= str_repeat($letters[$i], $i + 1) . ' ';
    //     }
    // }
    
    // echo trim($pattern); // Removes the trailing space



    for ($i = 0; $i < 5; $i++) {
        // First, print the letter 'A' $i+1 times
        for ($j = 0; $j < 4 - $i; $j++) {
            echo "A ";
        }
        
        // Then, print the letter corresponding to $i for the remaining columns
        for ($j = 0; $j <= $i; $j++) {
            echo chr(65 + $i) . " "; // chr(65) is 'A', chr(66) is 'B', etc.
        }
        
        echo "<br>";
    }
echo "<br>";

    for ($i = 0; $i < 5; $i++) {
        // First, print the letter 'A' $i+1 times
        for ($j = 0; $j < 4 - $i; $j++) {
            echo "1 ";
        }
        
        // Then, print the letter corresponding to $i for the remaining columns
        for ($j = 0; $j <= $i; $j++) {
            echo $i +1 . " "; // chr(65) is 'A', chr(66) is 'B', etc.
        }
        
        echo "<br>";
    }
    
    echo "<br>";


    $n=4;
    for($i=0; $i<=$n; $i++)
    {
        for($j=0; $j<=$n; $j++)
        {
            if($j==$i)
            {
                echo ($i+1) . " ";
            }
            else{
            echo ' 0 ';
            }
        }
        echo '<br>';
    }

    
    echo '<br>';


 $n = 5;

$x = 1;

for($i = 1; $i <= $n - 1; $i++)
{
    // Calculate factorial iteratively
    $x *= ($i + 1); 
}

// Print the factorial of n
echo "The factorial of  $n = $x"."\n";

echo '<br>';
echo '<br>';

$FibonacciNumbers = 10;
// Initialize the first two Fibonacci numbers
$fibonacci = [0, 1];

// Print the first two Fibonacci numbers
echo $fibonacci[0] . ", " . $fibonacci[1];

// Calculate and print the rest of the Fibonacci sequence
for ($i = 2; $i < $FibonacciNumbers; $i++) {
    // The next number is the sum of the previous two
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    echo ", " . $fibonacci[$i];
}

echo '<br>';
echo '<br>';


$text = "Orange Coding Academy";

// Convert the string to lowercase to make it case-insensitive
$lowercaseText = strtolower($text);

// Count the occurrences of 'c' in the lowercase string
$count = substr_count($lowercaseText, 'c');

// Display the result
echo "The number of 'c' characters in the text is: " . $count;


echo '<br>';
echo '<br>';

$string = ": Orange Coding Academy";
$ch = "c";

for ($i = 0; $i < 20; $i++)
{
    if ($string[$i] == $ch)
    {
        echo $count ++;
    }
}


echo '<br>';
echo '<br>';
    ?>

<table border="1" cellpadding="3px" cellspacing="0px">
<?php
for ($row = 1; $row <= 5; $row++) {
    echo "<tr>";  

    for ($col = 1; $col <= 5; $col++) {
            
     //   $total = $row* $col;
        echo "<td> $row * $col = " . ($row * $col) . " </td>";
    }

    echo "</tr>"; 



}







?>
</table>



<?php


echo '<br>';
echo '<br>';

for ($i = 0; $i <= 50; $i++) {

    if($i==0)
    {
        echo $i . ",";
    
    }
    
    elseif($i==1){
        echo $i ,",";
    }
    
    
    elseif($i%3==0){
        echo "Fizz" . ",";
    
    }
    elseif ($i%5==0) {
    echo "Buzz" . ",";
    
    } else {
    echo $i . ",";
    
    }
    
    
    }
?>


<?php

$count = 1;
    for($x=1;$x<=5;$x++)
    {
    for ($y=1;$y<=$x;$y++)
        {

         echo " ";
        echo $count  ++;
        
            // if($y< $x)
            // {
            // echo " ";
            // }

        }
    echo "<br>";
    }

    echo "<br>";





    
    for ($i = 0; $i < 5; $i++) {
        // First, print the letter 'A' $i+1 times
        for ($j = 0; $j < 4 - $i; $j++) {
            echo "A ";
        }
        
        // Then, print the letter corresponding to $i for the remaining columns
        for ($j = 0; $j <= $i; $j++) {
            echo chr(65 + $i) . " "; // chr(65) is 'A', chr(66) is 'B', etc.
        }
        
        echo "<br>";
    }



    echo "<br>";


    $rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " ";  // chr(65) is 'A'
    }
    echo "<br>";
}

for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " ";  // chr(65) is 'A'
    }
    echo "<br>";
}
?>
</body>
</html>