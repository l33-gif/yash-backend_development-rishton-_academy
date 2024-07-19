<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

</head>
<body>
    <h2>Login Form</h2>
    <form action="formhandler.php" method="Post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="username....." ><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="password....." ><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>


<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    if (empty($name)) {
        exit();
    }

    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $password;

    header("Location: ../index1.php");
} else {
    header("Location: ../index1.php");   
} exit();
?>
