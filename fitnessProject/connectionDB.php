<?php
    $login = $_GET['login'];
    $email = $_GET['e-mail'];
    $pass = $_GET['password'];
    $connect = mysqli_connect('192.168.56.1', 'root', '', 'cakesiteDB');
    if($connect == false){
        echo "Не работает";
    }
    else{
        $connect->query("INSERT INTO auth(email, login, password) VALUES ('$email', '$login', '$pass')");
    }

?>