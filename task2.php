<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
</head>
<body>
<?php
// 1.	Write a PHP script to see if the specified year is a leap year or not.
// $year = 2021;

// if (($year %4==0  && $year % 100 !== 0) || ($year % 400 == 0))
// {echo "This year is a leap year.";}
// else{echo "This year is not a leap year.";}


// 2.	Write a PHP script to check the season depending on the inserted temperature 
// if the temperature is below 20, we are in winter otherwise the season is summer.
// $temp = 20;
// if($temp <= 20) {
//     echo "we are in winter";
// } else {
//     echo "we are in summer";
// }


// 3.Write a PHP script to calculate the sum of the two integers. 
// If the two values are the same, then calculate the triple of their sum.

// $num1 = 20;
// $num2 = 30;
// $sum = $num1+$num2;
// if ($num1===$num2)
// {echo $sum*3;}
// else{
//     $sum;
// }
// echo $sum;
// 4.	Write PHP to check if the sum of the two given numbers equals 30, 
// if the condition is true the return their sum otherwise return false

// $num1 = 20;
// $num2 = 20;
// $sum=$num1+$num2;
// if ($sum==30)
// {echo $sum;}
// else{
//     echo "False the sum is not 30 ";
// }

// 5.	Write in PHP script to check if the given positive number is a multiple of 3.
// $num=9;
// if($num % 3==0 && $num >0 )
// {echo "true";}
// else{echo "false";}


// 6.	Write a PHP script to check if the integer 
// value is in the range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’
// $num1 = 20;
// if ($num1 >=20 && $num1 <=50)
// {
//     echo "true";

//  }
// else{
//      echo "false";
//  }

// 7.Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]//max(function)
// Sample Output: 9
// $num1 = 2;
// $num2 = 5;
// $num3 = 7;
// if( $num1 >= $num2 && $num1 >= $num3)
// {echo $num1;}
// elseif ($num2 >= $num1  && $num2 >= $num3)
//    {echo $num2;
// }
// else{
//     echo $num3;
// }

// 8.Write PHP script to calculate the monthly electricity 
// bill according to these rules.
 
// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250– 7.50 JOD/Unit

// (switch)تحل ايضا على  
// $units = 150; 
// $bill = 0;
// if ($units <= 50) {
//     $bill = $units * 2.50;
// } elseif ($units <= 150) {
//     $bill = (50 * 2.50) + (($units - 50) * 5.00);
// } elseif ($units <= 250) {
//     $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
// } else {
//     $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
// }
// echo "Total electricity bill: " . $bill . " JOD";


// 9.	 Write php script to make a calculator, the calculator should contain the four main operations 

// e.	Addition +
// f.	Subtraction -
// g.	Multiplication *
// h.	Division %

// $num1 = 6;
// $num2 = 5;
// $operator = "+";
// if ($operator =="+"){
// echo "Result: " . ($num1 + $num2);}
// elseif($operator =="-"){
// echo "Result: " . ($num1 - $num2);}
// elseif($operator =="*"){
// echo "Result: " . ($num1 * $num2);}
// elseif($operator =="/"){
// echo "Result: " . ($num1 / $num2);}


// 10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

// Sample Input: 15
// Sample Output: ‘is no eligible to vote’



// $age=16;
// if($age>=18){
//     echo "‘ Eligible to vote’";
// }
// else {
//     echo " Not Eligible to vote’";
// }


// 11.	Write php script  to check whether a number is positive, negative or zero

// Sample Input: -60
// Sample Output: ‘Negative’


// $num = -60;
// if($num <0){
//     echo " Number is Negative";
// }
// elseif($num >0){
//     echo "Number is positive";
// }
// elseif($num =0){
//    echo "Number is zero";
// }

// 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’
// Range	Grade
// <60	F
// <70	D
// <80	C
// <90	B
// <100A


// $scores = [100, 100, 95, 99, 90, 100, 99, 99, 90];
// $total = array_sum($scores);
// $count = count($scores);
// $average = $total / $count;



// if ($average <= 60) {
//     echo "F";
// } elseif ($average <= 70) {
//     echo "D";
// } elseif ($average <= 80) {
//     echo "C";
// } elseif ($average <= 90) {
//     echo "B";
// } elseif ($average <= 100) {
//     echo "A";
// } else {
//     echo "Invalid average score";
// }
?>
</body>
</html>





