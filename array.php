<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

// 1.
// $colors = array('white', 'green', 'red');

// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$colors[2]} carpet, the {$colors[1]} lawn, the {$colors[0]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

//  2.
//  $colors = array('green','red','white');
// foreach ($colors as $color) {
//     echo $color . "<br>";
// }
 


// 3.Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin

// $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
// "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", 
// "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
// "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
// "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// asort($cities);

// foreach ($cities as $country => $capital) {
//     echo "The capital of $country is $capital" . "<br>";
// }




// 4.
// $color = array(4 => 'white', 6 => 'green', 11 => 'red');
// echo reset($color) . "\n";



// 5.Write a PHP script that inserts a specific new item in an array in any position.
 
// Sample Input:


// Array 1 2 3 4 5   
// Location: 4
// New Item: $
// Expected Output: 1 2 3 $ 4 5
// $inser = array(1,2,3,4);
// $location = 3;
// $newItem ='5';
// array_splice($inser, $location - 1, 0, $newItem);
// echo implode(" ", $inser) . "<br>";


//  6.Write a PHP script to sort the following associative array 
// depending on the key value [asc] : 
// Sample Input: 
// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// Expected Output:
// c = apple
// b = banana
// d = lemon
// a = orange

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// ksort($fruits);

// foreach ($fruits as $key => $value) {
//     echo "$key = $value" . "<br>";
// }


  


// 7.Write a PHP script to calculate and display the average temperature for the recorded reads, 
// also the script should display the list of the five lowest and the five highest temperatures 

// Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 
// 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73



// 8.Write a PHP program to merge the following two arrays. 

// Sample Input: 
// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);



// $arr1 = [1, 3, 5, 7, 8];
// $arr2 = [2, 3, 4, 5, 6];
// $mergedArray = array_unique(array_merge($arr1, $arr2));

// print_r($mergedArray);










// 9.

// function convertToUppercase($array) {
//     return array_map('strtoupper', $array);
// }

// $colors = array("red", "blue", "white", "yellow");

// $uppercaseColors = convertToUppercase($colors);

// echo "<pre>";
// print_r($uppercaseColors);
// echo "</pre>";



// 10.Write a PHP function to change the following array'
// s and convert all the strings to lower case. 


// Sample Input:


// $colors = array("RED","BLUE", "WHITE","YELLOW");


// Expected Output :


// Array
// (
//     red
//     blue
//     white
//     yellow


// )
// function convertToLowercase($array) {
//     // تحويل جميع النصوص إلى أحرف صغيرة باستخدام array_map
//     return array_map('strtolower', $array);
// }

// // المصفوفة المدخلة
// $colors = array("RED", "BLUE", "WHITE", "YELLOW");

// // استدعاء الدالة وتحويل النصوص
// $lowercaseColors = convertToLowercase($colors);

// // طباعة النتيجة
// echo "<pre>";
// print_r($lowercaseColors);
// echo "</pre>";


//  11.Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 


// Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248

// Expected Output:
// Array
// (
//     [color] => green
//     [0] => 2
//     [1] => 4
//     [2] => a
//     [3] => b
//     [shape] => trapezoid
//     [4] => 4
// )

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// // دمج المصفوفتين
// $result = array_merge($array1, $array2);

// // طباعة النتيجة
// echo "<pre>";
// print_r($result);
// echo "</pre>";






// 12.Write a PHP script to get the shortest/longest string length from an array. 

// Sample Input:
//  $words =  array("abcd","abc","de","hjjj","g","wer")
// Expected Output : 
// The shortest array length is 1. The longest array length is 4.
// $words = array("abcd", "abc", "de", "hjjj", "g", "wer");

// foreach ($words as $word) {
//     $length = strlen($word);
//     echo "The length of '$word' is: $length<br>";
// }
// $words = array("abcd", "abc", "de", "hjjj", "g", "wer");

// foreach ($words as $word) {
//     $length = strlen($word);
//     echo "The length of '$word' is: $length<br>";
// }

// $small= min($words);    
// echo "The smallest number is: $small";

// $large= max($words);    
// // echo "The largest number is: $large";
// $words = array("abcd", "abc", "de", "hjjj", "g", "wer");

// $lengths = array(); // مصفوفة لتخزين الأطوال

// // حساب الأطوال وتخزينها في مصفوفة جديدة
// foreach ($words as $word) {
//     $lengths[] = strlen($word);
// }

// // إيجاد أصغر طول وأكبر طول
// $small = min($lengths);    
// echo "The smallest length is: $small<br>";

// $large = max($lengths);    
// echo "The largest length is: $large";



// 13.Write a PHP script to generate unique random 10 numbers within a specific range. 


// Sample Input: (11, 20)
// Sample Output: 17 16 13 20 14 19 18 15 11 12



// $min = 11;
// $max = 20;

// $numbers = range($min, $max);

// shuffle($numbers);

// print_r($numbers);


// $uniqueNumbers = array_slice($numbers, 0, 10);
// echo implode(" ", $uniqueNumbers);





// 14.Write a PHP script that returns the lowest integer in the array  that is not 0. 


// Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
// Sample Output:  2

// $array1 = array( 2, 0, 10, 12, 6) ;
// // print_r($array1);

// $filtered = array_filter($array1, function($value) {
//     return $value != 0;
// });
// // print_r($filtered);

//  $smallest = min($filtered);
//  echo "The smallest value is: $smallest";





// 15. Write a PHP program to sort an array of positive integers using the any Sort Algorithm.          
// Input array : Array ( [0] => 5 / [1] => 3 / [2] => 1 / [3] => 3 / [4] => 8 / [5] => 7 / [6] => 4 / [7] => 1/ [8] => 1 / [9] => 3 )
// Expected Result : Array ( [0] => 8 / [1] => 7 / [2] => 5 / [3] => 4 / [4] => 3 / [5] => 3 / [6] => 3 / [7] => 1 [8] => 1/ [9] => 1 )

// function bubbleSortDescending(&$array) {
//     $n = count($array); // عدد العناصر في المصفوفة

//     // تمر عبر المصفوفة عدة مرات
//     for ($i = 0; $i < $n - 1; $i++) {
//         for ($j = 0; $j < $n - $i - 1; $j++) {
//             // إذا كان العنصر الحالي أصغر من العنصر المجاور له، قم بتبديلهما
//             if ($array[$j] < $array[$j + 1]) {
//                 $temp = $array[$j];
//                 $array[$j] = $array[$j + 1];
//                 $array[$j + 1] = $temp;
//             }
//         }
//     }
// }

// // المصفوفة المدخلة
// $array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);

// echo "قبل الفرز: ";
// print_r($array);

// // استدعاء الدالة لترتيب المصفوفة
// bubbleSortDescending($array);

// echo "بعد الفرز: ";
// print_r($array);

// 16.Write a PHP function to floor decimal numbers with precision. Note: Accept three parameters number, precision, and $separator
// Sample Data : 
// 1.155, 2, "."
// 100.25781, 4, "."
// -2.9636, 3, "."
// Expected Output :
// 1.15
// 100.2578
// -2.964


// $num1 = 1.155;
// $num2 = 100.25781;
// $num3 = -2.9636;
// function floordec ($num1, $precision, $separator){
//     $multiplier = pow(10, $precision); 
//     $num1 = floor($num1 * $multiplier) / $multiplier; 

//     return number_format($num1, $precision, $separator, '');
// }


// echo floordec($num1, 2, ".") . "<br>";  
// echo floordec($num2, 4, ".") . "<br>";  
// echo floordec($num3, 3, ".") . "<br>";  













// 17.  Write a PHP script to merge two commas separated lists with unique values only.
// Sample input: list1 = "4, 5, 6, 7";
//   		list2 = "4, 5, 7, 8";
// Sample output: 4, 5, 6, 7, 8
// $list1 = "4, 5, 6, 7";
// $list2 = "4, 5, 7, 8";
// $array1 = explode(", ", $list1);
// $array2 = explode(", ", $list2);
// $mergee = array_merge($array1, $array2);
// // print_r($mergee);
// $mergee = array_unique($mergee);
// sort($mergee);
// print_r($mergee);






// 18. Write a PHP function to remove the duplicate entry from an array.
// sample input = 4, 5, 6, 7, 4, 7, 8
// sample Output = 4, 5, 6, 7, 8
// $array = array (4, 5, 6, 7, 4, 7, 8);
// $array = array_unique($array); 

// echo implode(" , ", $array);



// 19. Write a PHP Program to find if an array is a subset of another.
// sample input:
// array1 = 'a','1','2','3','4'
// array2 = 'a','3'
// 	sample output:
// array2 is a subset array from array1

// $array1 = array(1, 2, 3);
// $array2 = array(1, 2, 3, 4, 5);

// if (count(array_intersect($array1, $array2)) == count($array1)) {
//     echo "Array1 is a subset of Array2";
// } else {
//     echo "Array1 is not a subset of Array2";
// }


?>

</body>
</html>