<?php
include_once("connect.php");

$login = trim($_POST["authlogin"]);
$login = mb_strtolower($login);

$password = trim($_POST["authpass"]);
$password_hash=md5($password);

$query = mysqli_query($db,"SELECT login, password FROM auth WHERE login='".mysqli_real_escape_string($db,$_POST['authlogin'])."' LIMIT 1");
$data = mysqli_fetch_assoc($query);
if($data["login"] !== $login){
	echo '<script type="text/javascript">
	alert("Данного пользователя не существует.");
    window.history.back();
    </script>';
}
elseif($data["password"] !== $password_hash){
    echo '<script type="text/javascript">
	alert("Неправильный пароль.");
    window.history.back();
	</script>'; 
}
else{
    if($_POST['bar'] == "on"){
        $permitted_chars = "0123456789abcdefghijklmnopqrstuvwxyz";
        $key=substr(str_shuffle($permitted_chars), 0, 10);
        $masterkey = $key;
        setcookie("hour", $login, time() + 60*60*24*30);
        setcookie('key', $masterkey, time() + 60*60*24*30);
        $query = "UPDATE auth SET cookie = '$masterkey' WHERE login = '$login'";
        mysqli_query($db, $query);
    }  
    session_start(); 
    $_SESSION['auth'] = true;
    $_SESSION['login'] = $login;
    $_SESSION['id'] = $_COOKIE['key'];
    echo '<script>
    alert("Вы успешно вошли!");
    location.replace("http://localhost/kostya2003/auth/index.php");
    </script>';        
}
  

?>