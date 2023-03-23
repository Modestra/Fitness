<?php
    if($_POST["email"]== "test@gmail.com"){
        setcookie("sex", "female");
        echo "../fitnessProject/main.html";
    }
    else
    {
        setcookie("account", $_POST["login"]);
        setcookie("train", "null");
        setcookie("sex", "male");
        $login = $_POST["login"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $connect = mysqli_connect('localhost', 'modestra', 'Terrarik22', 'fitnessdatabase');
        $connect -> query("INSERT INTO fitness_users(login, password, email) VALUES ($login, $password, $email)");
        $connect -> close();
    }
?>