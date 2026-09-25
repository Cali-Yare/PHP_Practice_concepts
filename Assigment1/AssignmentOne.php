<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

Question 1;
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


 Question 2;
 $num =9;
 if($num % 2==0 && $num % 3==0){
    echo"it can divible by 2 and 3";

 }elseif($num % 2==0){
    echo"can be divisible by 2";

 }elseif($num % 3==0){
    echo"can be divisble by 3";
 }else{
    echo"it can nit be divisible";
 }


 Question 3;

 for ($i = 2; $i<=20; $i++){
   if ($i %2 ==0)
      {
         echo "$i . ";
      }
 }
echo "<br>";
 
 for ($i = 35; $i>=7; $i--){
   if ($i % 2!=0)
      {
         echo "$i . ";
      }
 }
    ?>


    
</body>
</html>