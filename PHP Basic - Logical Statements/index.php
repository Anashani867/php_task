<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $year = 2013;

    // if($year==2024)
    // echo "Leap Year";
    // } else {
    //     echo "Not a Leap Year";
    // }


    function isLeapYear($year) {
        if (($year % 4 == 0 && $year % 100 != 0) 
            || ($year % 400 == 0)) {
            return true;
        } else {
            return false;
        }
    }
    
    // Driver code
    $year = 2013;
    
    if (isLeapYear($year)) {
        echo "Leap Year";
    } else {
        echo "Not a Leap Year";
    }


echo"<br>";

        
    $winter = 27;
    
    if ($winter <= 20){
        echo "season is winter.";
    } else {
        echo "season is summer.";
    }
    echo"<br>";
    
    $firstInteger =2;
    $secondInteger =2;
    $sum;

    if ($firstInteger==$secondInteger) {
        $sum=($firstInteger + $secondInteger)*3;

    }
    else{
        $sum=$firstInteger + $secondInteger;
    }

    echo " this is sum".$sum;
    echo"<br>";

    $firstInteger =2;
    $secondInteger =2;
    $sum1 = $firstInteger+$secondInteger;

        if ($sum1 == 30) {
     echo true . "true";
    }
    else{
        echo false . "false";
    }
    echo"<br>";


    // fmod(20, 3)    if(fmod($multiple, 3) == 0){

    $multiple =3;

   if($multiple % 3 == 0){
    echo "true";
} else {
    echo "false";
}
echo"<br>";


$numbers =20; //range(0, 50);
//print_r($numbers);

if ($numbers >20 && $numbers<=50) {
echo "true";

} else {
echo "false";
}

echo"<br>";

$largest = array(1, 5, 9);
$max = $largest[0]; 

foreach($largest as $value) {
    if($value > $max) {
        $max = $value; 
    }
}

echo $max;

echo"<br>";

$bill =0;

$units =50;

    if($units <= 50) {
        $bill = $units * 2.50;
    } 
    elseif($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } 
    elseif($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } 
    else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }


    // switch (true) {
    //     case ($units <= 50):
    //         $bill = $units * 2.50;
    //         break;
        
    //     case ($units <= 150):
    //         $bill = (50 * 2.50) + (($units - 50) * 5.00);
    //         break;
        
    //     case ($units <= 250):
    //         $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    //         break;
        
    //     default:
    //         $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    //         break;
    // }

    echo $bill;


    echo"<br>";


$num1 = 10; 
$num2 = 5;
$operation = 'addition'; 

switch ($operation) {
    case 'addition':
        $result= $num1 + $num2;
        break;
    case 'subtraction':
        $result= $num1 - $num2;
        break;
    case 'multiplication':
        $result=   $num1 * $num2;
        break;
    case 'division':
       
        if ($num2 == 0) {
            echo "Error: Division by zero is not allowed.";
        }
        else
        $result= $num1 /$num2; 
    break;

    default:
        echo "Error: Invalid operation.";
}
echo"<br>";
echo "The result of {$operation} between {$num1} and {$num2} is: {$result}";
echo"<br>";
$age=15;

if($age >=18){
    echo " eligible to vote";
}

else{
    echo "is no eligible to vote";
}

echo"<br>";


$number = -60; 
if ($number > 0) {
    echo "Positive";
} elseif ($number < 0) {
    echo "Negative";
} else {
    echo "Zero";
}

echo"<br>";


$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

$totalScore = array_sum($scores);

$numberOfSubjects = count($scores);

$average = $totalScore / $numberOfSubjects;

if ($average >= 90) {
    $grade = 'A';
} elseif ($average >= 80) {
    $grade = 'B';
} elseif ($average >= 70) {
    $grade = 'C';
} elseif ($average >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}

echo "Average Score: " . round($average, 2) . "\n";
echo "Grade: " . $grade;
?>





    


</body>
</html>