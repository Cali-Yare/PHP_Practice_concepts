<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$num1 = 25;
$num2 = 10;
$num3 = 18;


if ($num1 >= $num2 && $num1 >= $num3) {
    $greatest = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $greatest = $num2;
} else {
    $greatest = $num3;
}

echo "<br>";

$number1 = 25;
$number2 = 10;
$number3 = 18;


if ($number1 <= $number2 && $number1 <= $number3) {
    $lowest = $number1;
} elseif ($number2 <= $number1 && $number2 <= $number3) {
    $lowest = $number2;
} else {
    $lowest = $number3;
}
 echo "the gretest number is $greatest";
 echo "<br>";
 echo "the lowest number is $lowest";
    ?>


    
</body>
</html>