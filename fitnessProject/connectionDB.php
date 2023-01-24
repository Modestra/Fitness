<?php
    $login = $_GET['login'];
    $email = $_GET['e-mail'];
    $pass = $_GET['password'];
    $hashpass = md5($pass."gfgwgwrgergnjfnvjj545235");
    $error;
    $connect = mysqli_connect('146.120.224.157', 'modestra', 'kT1hX1dG7m', 'fitnessdatabase');
    if($connect == false){
       $error = true;
    }
    else{
        setcookie("account", $login);
        $error = false;
        $connect->query("INSERT INTO fitness_users(login, password, email) VALUES ('$login', '$hashpass', '$email')");
        header("Location: ../fitnessProject/main.html");
        $connect-> close();
    }
?>