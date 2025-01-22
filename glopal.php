<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- 4. Create a To Do List Page.  -->

<!-- <form method="POST" action="">
        <input type="text" name="task" placeholder="Add a new task..." required />
        <button type="submit">Add Task</button>
    </form>

    <ul>
        <?php
        // session_start();
        // if (!isset($_SESSION['tasks'])) {
        //     $_SESSION['tasks'] = [];
        // }

        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task'])) {
        //     $newTask = htmlspecialchars($_POST['task']); 
        //     $_SESSION['tasks'][] = $newTask;
        // }

        // foreach ($_SESSION['tasks'] as $task) {
        //     echo "<li>" . $task . "</li>";
        // }
        ?>
    </ul> -->



 <!-- 5. determine the project name, and script name  -->
 

 <?php  
    //     echo "<br>";
    //     echo "<br>";
    //     echo "<br>";
    //     echo "<br>";

    // $currentPage= $_SERVER['SCRIPT_NAME']; //PHP SELFE
    // $currentPage = substr($currentPage, 1); //امسحلي اول حرف من العنوان والي هو (/)
    // echo $currentPage;  
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>"

    ?>
<!-- 6. Determine page requested time. -->

<?php
$requestTime = $_SERVER['REQUEST_TIME'];
$formattedTime = date("d-m-y H:i:s", $requestTime);
echo  $formattedTime;
?>


<!-- 7. make a website counter on refresh ? -->


<?php
session_start();

if (!isset($_SESSION['page_counter'])) {
    $_SESSION['page_counter'] = 0;//0FIRS VALUE
}

$_SESSION['page_counter']++;

echo "<h1>Page Refresh Counter (This Session): " . $_SESSION['page_counter'] . "</h1>";
?>







<!-- 8. Number of visitors ? -->
<?php
// $visitorFile = "visitor_count.txt";

// if (!file_exists($visitorFile)) {
//     file_put_contents($visitorFile, 0);
// }

// $visitorCount = (int)file_get_contents($visitorFile);

// $visitorCount++;

// file_put_contents($visitorFile, $visitorCount);

// echo "<h1>Total Visitors: $visitorCount</h1>";
?>
<!-- 9. Creating Cookies include cookie_name, cookie_value, [expiry_time], [cookie_path], [domain], [secure],
[httponly] . Then Retrieve all cookies value after that delete the cookies -->


<!-- $cookie_name = "user";
$cookie_value = "majd";

setcookie($cookie_name, $cookie_value, time() + 86400, "/", "", true, true); 


if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . htmlspecialchars($cookie_name) . "' is not set!<br>";
} else {
    echo "Cookie '" . htmlspecialchars($cookie_name) . "' is set!<br>";
    echo "Value is: " . htmlspecialchars($_COOKIE[$cookie_name]) . "<br>";
}

echo "<h3>All Cookies:</h3>";
echo htmlspecialchars($name) . ": " . htmlspecialchars($value) . "<br>";


 setcookie($cookie_name, "", time() - 86400, "/"); 
echo "<br>Cookie '" . htmlspecialchars($cookie_name) . "' has been deleted."; -->
<?php
setcookie("user","majd",time() + 864000,"/","",true,true);     
if (isset($_COOKIE["user"])) {
echo $_COOKIE["user"];
}
else {
    echo "isnot found";
}

?>