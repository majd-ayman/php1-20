<?php
// <--------------------- loop ---------------------------->
// 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the
// start and end position.
// Expected Output: 1-2-3-4-5-6-7-8-9-10

// for($i=1;$i<=10;$i++)
// if ($i<10){
//     echo "$i-";
// }
// else echo "$i";


// 2. Create a script using a for loop to add all 
// the integers between 0 and 30 and display the total.
// Expected Output: total as a number
// $sum = 0;

// for ($i = 0; $i <= 30; $i++) {
//     $sum += $i; 
// }

// echo "Total as a number: " . $sum; 





// 3.Create a script to generate the following pattern, using the nested for loop.   
// Expected Output: 
 
// A A A A A  
// A A A B B  
// A A C C C  
// A D D D D  
// E E E E E 

// $rows = 5;
//  for ($i = 1; $i <= $rows; $i++) { 
//     for ($j = 1; $j <= $rows; $j++) { 
//         if ($j <= $rows - $i) {
//             echo " A "; 
//         } else {
//             echo chr(64+$i) . " "; 
//         }
//     }
//     echo "<br>"; 
// }

// 4. Create a script to generate the following pattern, using the nested for loop.  
 
// Expected Output: 
 
// 1 1 1 1 1  
// 1 1 1 2 2  
// 1 1 3 3 3  
// 1 4 4 4 4  
// 5 5 5 5 5

// $rows = 5;
// for($i = 1; $i <= $rows; $i ++){
//     for($j = 1; $j <= $rows; $j ++){
// if($j<=$rows-$i){
//     echo "1";
// }else{
//     echo($i);
// }
//     }
//     echo "<br>";
// }



// 5. Create a script to generate the following pattern, using the nested for loop.  
 
// Expected Output: 
 
// 1 0 0 0 0  
// 0 2 0 0 0  
// 0 0 3 0 0  
// 0 0 0 4 0  
// 0 0 0 0 5 

// $rows = 5;
// for($i = 1; $i<=$rows; $i++){
//     for($j = 1; $j<=$rows; $j++){
// if($j==$i){
// echo $i ."";
// }else{echo  "0";

// }
//     }
// echo "<br>";}

// 6. Write a program to calculate and print the factorial of a number using a for loop. The factorial of 
// a number is the product of all integers up to and including that number. 
 
// Sample Input: 5 
// Expected Output: 120 




// function fac ($num){
//     $result = 1;
//     for($i = 1; $i <= $num; $i ++)
//     {    $result *= $i;}
//         return   $result;
//     }

// $num = 5;

// echo " num is :" .  fac($num);

// 7. Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting
// with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on.
// Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, …



// $num1 =0;
// $num2 =1;
// echo $num1 . "," . $num2;
// for($i = 2; $i < 10; $i++){
//     $nextNum = $num1 + $num2;
//     echo ", " . $nextNum;

//     $num1 = $num2;
//     $num2 = $nextNum;
// }


// 8. Write a program which will count the "c" characters in the text "Orange Coding Academy".
// Sample Input: Orange Coding Academy
// Expected Output: 2


// $text = "Orange Coding Academy";
// $char = "c";

// $lower = strtolower($text);

// $count = substr_count($lower, $char);

// echo "The number of '{$char}' characters is: " . $count;




// 9.Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and
// cell spacing="0px" to the table tag.

// 1 * 1 = 1         1 * 2 = 2      1 * 3 = 3     1 * 4 = 4      1 * 5 = 5
// 2 * 1 = 2         2 * 2 = 4      2 * 3 = 6     2 * 4 = 8      2 * 5 = 10
// 3 * 1 = 3         3 * 2 = 6      3 * 3 = 9     3 * 4 = 12     3 * 5 = 15
// 4 * 1 = 4         4 * 2 = 8      4 * 3 = 12    4 * 4 = 16     4 * 5 = 20
// 5 * 1 = 5         5 * 2 = 10     5 * 3 = 15    5 * 4 = 20     5 * 5 = 25
// 6 * 1 = 6         6 * 2 = 12     6 * 3 = 18    6 * 4 = 24     6 * 5 = 30

// for ($i =1; $i<= 6; $i++){

// }




















// 10. Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz"
// instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of
// both three and five, print "FizzBuzz".
// Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz …….



// for ($i =1; $i <= 50; $i++)
// {
//     if ($i % 3 == 0){
//         echo "Fizz";

//     }elseif ($i % 5 == 0){
//         echo "Buzz";

//     }
// }elseif  ($i % 3 == 0 && $i % 5 == 0){
//     echo "FizzBuzz";
// }












// 11. Write a PHP program to generate and display the first n lines of a Floyd triangle 
 
// According to Wikipedia Floyd's triangle is a right-angled triangular array of natural numbers, used in computer 
// science education. It is named after Robert Floyd. It is defined by filling the rows of the triangle with consecutive 
// numbers, starting with a 1 in the top left corner: 
 
// Sample output: 
// 1 
// 2 3 
// 4 5 6 
// 7 8 9 10 
// 11 12 13 14 15
// for ($i = 1; $i <= 15; $i++) {
//     for ($j = 1; $j <= $i; $j++) { 
//         echo $j; 
//     }
//     echo  "<br>";
// }

// 12. Write a PHP program to print the following pattern.

// Expected Output:
//  A
//  A B
//  A B C
//  A B C D
// A B C D E
//  A B C D
//  A B C
//  A B
//  A




// function printPattern() {
//     $alphabet = range('A', 'Z');
//     $n = 5; 

//     for ($i = 1; $i <= $n; $i++) {
//         for ($j = 0; $j < $i; $j++) {
//             echo $alphabet[$j] . " ";
//         }
//         echo "<br>";
//     }

//     for ($i = $n - 1; $i >= 1; $i--) {
//         for ($j = 0; $j < $i; $j++) {
//             echo $alphabet[$j] . " ";
//         }
//         echo "<br>"; 
//     }
// }

// printPattern();







































//  <!-- <--------------------- function ---------------------------------------------------------------------------------------------------> -->
//  1.	Write a PHP script to check if the inserted number is a prime number 

//  Sample Input:  3
//  Expected Output: 3 is a prime number 



// if (isset($_GET['number'])) {
//     $num = $_GET['number'];

//     function is_prime($num) {
//         if ($num <= 1) {
//             return false;
//         } elseif ($num <= 3) {
//             return true;
//         } elseif ($num % 2 == 0 || $num % 3 == 0) {
//             return false;
//         }

//         $i = 5;
//         while ($i * $i <= $num) {
//             if ($num % $i == 0 || $num % ($i + 2) == 0) {
//                 return false;
//             }
//             $i += 6;
//         }
//         return true;
//     }

//     if (is_prime($num)) {
//         echo $num . " is a prime number";
//     } else {
//         echo $num . " is not a prime number";
//     }
// }

// 2.	Write a PHP script to reverse a string 

// Sample Input:  remove
// Expected Output: evomer

//   function reversenum($text) {
//     return strrev($text);}
// $text = "remove";
// echo reversenum ($text);

// Write a PHP script to check if the all string characters are lower cases

// Sample Input:  remove
// Expected Output: Your String is Ok 

// function check ($text){
//     return ctype_lower($text);
// }
// $text = "Remove";
// if(check($text))       
// {
//     echo "All characters are lower case";
// }
// else {    
//     echo "Not all characters are lower case";
// }
// 4.	Write a PHP function to swap to variables?

// Sample Input:  x = 12     y= 10
// Expected Output: y=12   x=10 


// function swap(&$a, &$b) {//عندما تحتاج إلى تعديل القيمة الأصلية للمتغير داخل الدالة.

//     $temp = $a;
//     $a = $b;
//     $b = $temp;
// }

// $x = 5;
// $y = 10;

// echo "Before swap: x = $x, y = $y\n";
// swap($x, $y);
// echo "After swap: x = $x, y = $y\n";
// 
// 6.	Write a PHP function to check if a number is an Armstrong number or not ?
// **Armstrong number is a number that is equal to the sum of cubes of its digits.

// Sample Input:  407
// Expected Output: 407 is Armstrong Number 
// function isArmstrong($num) {
//     // تحويل الرقم إلى نص لتفكيكه
//     $numStr = (string) $num;
//     $sum = 0;

//     // تفكيك الرقم وحساب مجموع المكعبات
//     foreach (str_split($numStr) as $digit) {
//         $sum += $digit * $digit * $digit; // جمع مكعبات الأرقام
//     }

//     // التحقق إذا كانت النتيجة تساوي الرقم الأصلي
//     if ($sum == $num) {
//         echo "$num is Armstrong Number\n";
//     } else {
//         echo "$num is not Armstrong Number\n";
//     }
// }

// $isTest = 407;
// isArmstrong($isTest); // يجب أن تطبع 407 is Armstrong Number


// 7.Write a PHP function that checks whether a passed string is a palindrome or not?
// Sample Input:  Eva, can I see bees in a cave?
// Expected Output: Yes it is a palindrome 
// function isPalindrome ($string){
//     $cleanedString = strtolower(preg_replace('/[^a-z0-9]/i', '', $string));
//     if ($cleanedString === strrev($cleanedString)) {
//         return "Yes, it is a palindrome.";
//     } else {
//         return "No, it is not a palindrome.";
//     }
// }

// // Sample input
// $input = "Eva, can I see bees in a cave?";
// echo isPalindrome($input);


 
// 8.	Write a PHP function to remove duplicates from an array ?

//  Sample Input:  

//  $array1 = array(2, 4, 7, 4, 8, 4);

// function removeDuplicates($array) {
//     $uniqueArray = array_unique($array);
//     return $uniqueArray;
// }

// $inputArray = [1, 2, 2, 3, 4, 4, 5];
// $result = removeDuplicates($inputArray);

// print_r($result);


?>
