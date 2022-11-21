<?php 
include_once("connect.php");

$login = trim($_POST["login"]);
$login = mb_strtolower($login);

$pass = trim($_POST["pass"]);
$passag = trim($_POST["passag"]);
$fname = trim($_POST["fname"]);
$lname = trim($_POST["lname"]);
$year = trim($_POST["year"]);

$pattern = '/^[A-z0-9]+$/';
$pattern_name = '/^[а-яё0-9a-z]+$/iu';

$check_login = preg_match($pattern, $login);
$check_pass = preg_match($pattern, $pass);
$check_fname = preg_match($pattern_name,$fname);
$check_lname = preg_match($pattern_name,$lname);

$result1=mysqli_query($db, "SELECT id FROM auth WHERE login='$login'");
$row=mysqli_fetch_array($result1, MYSQLI_NUM);
if($pass != $passag){
	echo '<script type="text/javascript">
	alert("Пароли не совпадают.");
	location.replace("http://localhost/kostya2003");
	</script>';
}
elseif($check_login==0 or $check_pass==0 or $check_fname==0 or $check_lname==0){
	echo '<script type="text/javascript">
	alert("Используйте допустимые символы.");
	location.replace("http://localhost/kostya2003");
	</script>';
}
elseif(strlen($login)>35 or strlen($login)<4 or strlen($pass)>35 or strlen($pass)<6 or strlen($fname)>35 or strlen($lname)>35){
	echo'<script type="text/javascript">
	alert("Неправильно заполнена форма.");
	location.replace("http://localhost/kostya2003");
	</script>';
}
elseif($row>0){
	echo'<script type="text/javascript">
	alert("Данный логин занят!");
	location.replace("http://localhost/kostya2003");
	</script>';
}
else{
	$password_hash=md5($pass);;
	$result=mysqli_query($db, "INSERT INTO auth(login,password,firstname,lastname,end) VALUES('$login','$password_hash','$fname','$lname','$year')");
	echo'<script type="text/javascript">
		alert("Вы успешно зарегестрированы!");
		location.replace("http://localhost/kostya2003");
		</script>';
}

?>