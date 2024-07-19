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