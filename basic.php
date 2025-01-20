<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



// 1.	Write a PHP script to: 

// a.	Convert the entered string to uppercase.

// $text = "hellow,world!";
// $capitalizedWords = ucwords($text);
// echo "Capitalized words: $capitalizedWords";
// b.	Convert the entered string to lowercase.

// $text = "Hello, World!";

// $uppercase = strtoupper($text);

// echo "Uppercase: $uppercase";
// c.	Make the first letter of the string uppercase.



// $text = "Hello World! PHP is Fun.";

// $uppercaseText = strtoupper($text);

// $lowercaseText = strtolower($text);

// echo "النص بأحرف كبيرة: " . $uppercaseText . "\n"; 
// echo "النص بأحرف صغيرة: " . $lowercaseText . "\n"; 

// d.	Make the first letter of each word capitalized.

// $numericString = "085119";

// $hours = substr($numericString, 0, 2);  // أول رقمين للساعات
// $minutes = substr($numericString, 2, 2); // رقمين بعدهما للدقائق
// $seconds = substr($numericString, 4, 2); // آخر رقمين للثواني

// $timeFormat = $hours . ":" . $minutes . ":" . $seconds;

// echo  $timeFormat; // الناتج: 08:51:19
// $numericString = "085119";

// $timeArray = str_split($numericString, 2); 

// $timeFormat = implode(":", $timeArray);

// echo  $timeFormat;

// 2.	Write a PHP script splitting the following numeric string to be a date format. 


// $text="‘I am a full stack developer at orange coding academy’";
// $word = "Orange";
// if (preg_match("/\b" . preg_quote($word, '/') . "\b/i", $text)) {
//     echo "Word Found!"; 
// } else {
//     echo "Word Not Found!"; 
// }

// 3.Write a PHP script to check whether the sentence contains a specific word.

// $url="www.orange.com/index.php";
// $fileName =  basename($url);
// echo $fileName;

// 5.	Write a PHP script to extract the username from the following email address. 
// sol1:
// $email = "majdaburumman@gmail.com";
// $parts = explode("@", $email);
// $username = $parts[0];
// echo $username; 
// <_______________________________>
// sol2:
// $email="mona@yaho.com";
// $parts = explode("@" , $email);
// $domain = $parts[1];
// echo $domain;
// <_______________________________________________________________________________>
// 6.	Write a PHP script to get the last three characters from the string. 

// $string = "HelloWorld";

// $lastThreeChars = substr($string, -3);

// echo $lastThreeChars; 


// 7.	Write a PHP script to generate simple random passwords [do not use rand () function] from a given string. 


// $string = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
// $passwordLength = 10;
// $password = '';

// for ($i = 0; $i < $passwordLength; $i++) {
//     $password .= $string[rand(0, strlen($string) - 1)];
// }

// echo $password;

// $string = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
// $passwordLength = 10;

// // خلط السلسلة بشكل عشوائي
// $shuffledString = str_shuffle($string);

// // أخذ أول 10 أحرف من السلسلة المخلوطة
// $password = substr($shuffledString, 0, $passwordLength);

// echo $password;


// 8.	Write a PHP script to replace the first word of the sentence with another word.


// $sentence = 'That new trainee is so genius.';

// $newWord = 'Our';
// $modifiedSentence = preg_replace('/^\w+/', $newWord, $sentence);
// echo $modifiedSentence;  

// $num1='That new trainee is so genius.';
// $num2='Our';
// $concat=substr_replace($num1,$num2,0,4);
// echo $concat;


// 9.	Write a PHP script to find the first character that is different between two strings. 

// $str1 = 'football';
// $str2 = 'footboll';
// $str_pos = strspn($str1 ^ $str2, "\0");
// printf('First difference between two strings at position %d: "%s" vs "%s"',
// $str_pos, $str1[$str_pos], $str2[$str_pos]);
// printf("\n");


// $pos=0;
// $char1="";
// $char2=""

// $str1="football";
// $str2="footboll";

// $compare = function ($x1,$x2) use (&$pos,&$char1,&$char2){
    
//     if(!empty($char1)) { return; }
    
//     if($x1===$x2){
//         ++$pos;
//     }else{
//         $char1=$x1;
//         $char2=$x2;
//     }
    
// };
// array_map($compare,str_split($str1),str_split($str2));
// echo "First difference between two strings at position $pos: $char1 vs $char2";

// 10.	Write a PHP script to put a string in an array, use the (var_dump) to view the array. 


// $string = "Twinkle, twinkle, little star.";

// $array = explode(",", $string);

// var_dump($array);

// $strin = "000123003809";
// $trimmed =str_replace("0","",$strin);
// $trimmed =preg_replace("/0/","",$strin);
// echo $trimmed;

// 11.	Write a PHP script to print the next letter of the inputted letter. 

// Sample Character: 'a'
// Expected Output: 'b'
// Sample Character: 'z'
// Expected Output: 'a'

// $cha = 'a';
// $next_cha = ++$cha; 
// //The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
// if (strlen($next_cha) > 1) 
// {
//  $next_cha = $next_cha[0];
//  }
// echo $next_cha."\n";
// $cha = 'z';
// $next_cha = ++$cha;
// if (strlen($next_cha) > 1) 
// {
//  $next_cha = $next_cha[0];
//  }
// echo $next_cha."\n";
// 12.	Write a PHP script to insert a string at the specified position in a given string. 

// Original String: 'The brown fox'
// Insert 'quick' between 'The' and 'brown'.
// Expected Output: 'The quick brown fox'


// $ss='The brown fox';
// $inser='quick';
// $pos=4;
// $teext=substr_replace($ss,$inser.' ',$pos,0);
// echo $teext;


// // 13.	Write a PHP script to remove zeroes from the given number. 

// // Original String: '0000657022.24'
// // Expected Output: '65722.24'

// $num= '0000657022.24';
// $trimmed = str_replace("0", "", $num);
// echo $trimmed;



// 14.	Write a PHP script to remove part of a string.

// $text = "majd is abuteful girl and she is a smart geneas brety womman";
// $teext= str_replace("smart","",$text);
// echo $teext;

// 15.	Write a PHP script to remove trailing dashes from a string. 

//  $text = 'The quick brown fox jumps over the lazy dog---';
//  $teext = rtrim($text,'-');
//  echo $teext;
 
// 16.	Write a PHP script to remove Special characters from the following string. 

// Sample Output: '\"\1+2/3*2:2-3/4*3'
// Expected Output: '1 2 3 2 2 3 4 3'

// $char ='\"\1+2/3*2:2-3/4*3';
// $removecharr =preg_replace('/[^0-9]/', '',$char); 

// echo $removecharr;

// 17.	Write a PHP script to select first 5 words from the following string. 

// $stri='The quick brown fox jumps over the lazy dog';
// echo implode(' ', array_slice(explode(' ', $stri), 0, 5))."\n";

 
// 18.	Write a PHP script to remove comma(s) from the following numeric string.
 
// $comma = '2,543.12';
// $remove = str_replace(","," ",$comma);
// echo $remove;

// 19.	Write a PHP script to print letters from 'a' to 'z'. 

// $alfaa = range('a', 'z');
// foreach ($alfaa as $letter) {
//     echo $letter;
// }
// استخدام الدالة range() لتوليد الأحرف من 'a' إلى 'z'
// $letters = range('a', 'z');
// echo implode(" ", $letters);


// sol2: 
// for ($i = 97; $i <= 122; $i++) {
//     echo chr($i) . " ";
// }


// sol3 :
// $letter = 'a';
// while ($letter <= 'z') {
//     echo $letter . " ";
//     $letter++;
// }


// sol4 :
 // استخدام foreach مع range()
// foreach (range('a', 'z') as $letter) {
//     echo $letter . " ";
// }
// 
?>







 




    </body>
</html>