<?
    $error;
	$login = $_GET['login'];
	$pass = $_GET['password'];
	$hashpass = md5($pass."gfgwgwrgergnjfnvjj545235");
	$connect = mysqli_connect('192.168.56.1', 'root', '', 'cakesiteDB');
	$result = $connect->query("SELECT * FROM auth WHERE `login` = '$login' AND `password` = '$pass'");
	$user = $result->fetch_assoc();
	if(count($user)== 0){
	    $error = "Пользователь не найден";
		header("Location: ../fitnessProject/authorization.html");
	}
	else{
		setcookie("account", $login);
		setcookie("train", "null");
		header("Location: ../fitnessProject/main.html");
	}
    $connect-> close();
?>