<?php
    $login = $_POST['login'];
    $email = $_POST['e-mail'];
    $pass = $_POST['password'];
    if(mb_strlen($login) < 5 ){
        echo "Недопустимая длина символа";
        exit()
    }
?>