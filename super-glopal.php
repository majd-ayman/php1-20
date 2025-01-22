<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <*************************************1*********************************************> -->
    <!-- <h2>Login Form</h2>
    <form action="super-glopal.php" method="post">
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <button type="submit">GO</button>
     </form>
      <?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = $_POST['email'] ?? null;
//     $password = $_POST['password'] ?? null;
//     echo "<h3>Data Sent via POST:</h3>";
//     echo "Email: " . htmlspecialchars($email) . "<br>";
//     echo "Password: " . htmlspecialchars($password);



// } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     $email = $_GET['email'] ?? null;
//     $password = $_GET['password'] ?? null;

//     echo "<h3>Data Sent via GET:</h3>";
//     echo "Email: " . htmlspecialchars($email) . "<br>";
//     echo "Password: " . htmlspecialchars($password);
// } else {
//     echo "<h3>No data received.</h3>";
// } 
?> 
     <*************************************2*********************************************> --> 
     <form method="GET" action="">
        <input type="text" name="url" placeholder="Enter URL (e.g., https://example.com)" required>
        <button type="submit">GO</button>
    </form>
    <?php
    if (isset($_GET['url'])) {
        $url = $_GET['url'];

        if (filter_var($url, FILTER_VALIDATE_URL)) {
            header("Location: $url");
            exit();
        } else {
            echo "<p style='color: red; margin-top: 20px;'>Invalid URL! Please enter a valid URL.</p>";
        }
     }
 ?> 

<!-- <*************************************3*********************************************>  -->
        <!-- 3.make a Calculator that contain Basic Mathematical operations(+,-,*,/) -->
        
         <form method="GET" action="">
    <input type="number" name="num1" placeholder="Enter First Number" required><br><br>
    <input type="number" name="num2" placeholder="Enter Second Number" required><br><br>
    <input type="submit" name="Calculate" value="+">
    <input type="submit" name="Calculate" value="-">
    <input type="submit" name="Calculate" value="*">
    <input type="submit" name="Calculate" value="/">
</form>

 <?php
if (isset($_GET['Calculate'])) {
    $num1 = floatval($_GET['num1']);
    $num2 = floatval($_GET['num2']);
    $operation = $_GET['Calculate'];
    $result = "";

    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                $result = "Error: Division by zero!";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "Invalid operation!";
    }

    echo "<h3>Result: $result</h3>";
}

?>










        
</body>
</html>
