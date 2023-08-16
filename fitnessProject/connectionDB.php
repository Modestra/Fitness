<?php
    if($_POST["email"]== "test@gmail.com"){
        setcookie("sex", "female");
        echo "../fitnessProject/main.html";
    }
    else{
        setcookie("account", $_POST["login"]);
        setcookie("train", "null");
        setcookie("sex", "male");
        $connect = mysqli_connect('146.120.224.157', 'modestra', 'kT1hX1dG7m', 'fitnessdatabase');
        #$connect->query("INSERT INTO fitness_users(login, password, email) VALUES ('$login', '$hashpass', '$email')");
        #$connect-> close();
        echo "../fitnessProject/main.html";
    }
?>