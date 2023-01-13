<?php
    $login = $_GET['login'];
    $email = $_GET['e-mail'];
    $pass = $_GET['password'];
    $hashpass = md5($pass."gfgwgwrgergnjfnvjj545235");
    $error = array();
    $connect = mysqli_connect('192.168.56.1', 'root', '', 'cakesiteDB');
    if($connect == false){
        $error[] = "Не удалось подключиться к базе данных";
    }
    else{
        $connect->query("INSERT INTO auth(email, login, password) VALUES ('$email', '$login', '$pass')");
        header("Location: ../fitnessProject/main.html");
        $connect-> close();
    }
?>