<?php 
session_start();
$db = new mysqli("localhost", "Saikt", "", "Saikt");
$db->set_charset("utf-8");
if ($db->connect_errno){
    printf("Error connecting: %s\n", $db->connect_error);
    exit();
}
$masterkey ="";
$logSession = $_SESSION['login'];
$loginup = trim($_POST["loginup"]);
$loginup = mb_strtolower($loginup);

$pass = trim($_POST["pass"]);
$passag = trim($_POST["passag"]);
$fname = trim($_POST["fname"]);
$lname = trim($_POST["lname"]);
$year = trim($_POST["year"]);

$pattern = '/^[A-z0-9]+$/';
$pattern_name = '/^[а-яё0-9a-z]+$/iu';

$check_login = preg_match($pattern, $loginup);
$check_pass = preg_match($pattern, $pass);
$check_fname = preg_match($pattern_name,$fname);
$check_lname = preg_match($pattern_name,$lname);

$result=mysqli_query($db, "SELECT id FROM auth WHERE login='$logSession'");
$row1=mysqli_fetch_array($result, MYSQLI_NUM);

$result=mysqli_query($db, "SELECT id FROM auth WHERE login='$loginup'");
$row2=mysqli_fetch_array($result, MYSQLI_NUM);

#Если введён логин проверки = занесение в бд
if(!empty($loginup)){  
    if($check_login==0){
        echo '<script type="text/javascript">
        alert("Используйте допустимые символы.");
        location.replace("http://localhost/kostya2003/auth/personal.php");
        </script>';
        exit;
    }
    if(strlen($loginup)<4 or strlen($loginup)>35){
        echo'<script type="text/javascript">
        alert("Значение логина должно быть от 4 до 20 символов.");
        location.replace("http://localhost/kostya2003/auth/personal.php");
        </script>';
        exit;
    }
    if($row2>0){
        echo'<script type="text/javascript">
        alert("Данный логин занят!");
        location.replace("http://localhost/kostya2003/auth/personal.php");
        </script>';
        exit;
    }
    $query = "UPDATE auth SET login = '$loginup' WHERE id = '$row1[0]'";
    mysqli_query($db, $query);
}
#Если введён пароль проверки - занесение в бд
if(!empty($pass)){
    if($pass != $passag){
        echo '<script type="text/javascript">
        alert("Пароли не совпадают.");
        location.replace("http://localhost/kostya2003/auth/personal.php");
        </script>';
        exit;
    }
    if($check_pass==0){
        echo '<script type="text/javascript">
        alert("Используйте допустимые символы. пас");
        location.replace("http://localhost/kostya2003/auth/personal.php");
        </script>';
        exit;
    }    
    if(strlen($pass)<6 or strlen($pass)>35){
        echo '<script type="text/javascript">
        alert("Значение пароля должно быть от 6 до 20 символов.");
        location.replace("http://localhost/kostya2003/auth/personal.php");
        </script>';
        exit;    
    }
    $password_hash=md5($pass);;
    $query = "UPDATE auth SET password = '$password_hash' WHERE id = '$row1[0]'";
    mysqli_query($db, $query);
}
#Если введено имя проверки - занесение в бд
if(!empty($fname)){
    if($check_fname==0){
        echo '<script type="text/javascript">
        alert("Используйте допустимые символы. имя");
        location.replace("http://localhost/kostya2003/auth/personal.php");
        </script>';
        exit;
    }
    if(strlen($fname)>35){
        echo '<script type="text/javascript">
        alert("Значение имени должно быть до 20 символов.");
        location.replace("http://localhost/kostya2003/auth/personal.php");
        </script>';
        exit;
    }
    $query = "UPDATE auth SET firstname = '$fname' WHERE id = '$row1[0]'";
    mysqli_query($db, $query);
}
#Если введено фамилию проверки - занесение в бд
if(!empty($lname)){
    if($check_lname==0){
        echo '<script type="text/javascript">
        alert("Используйте допустимые символы. фамил");
        location.replace("http://localhost/kostya2003/auth/personal.php");
        </script>';
        exit;
    }
    if(strlen($lname)>35){
        echo'<script type="text/javascript">
        alert("Значение фамилии должно быть до 20 символов.");
        location.replace("http://localhost/kostya2003/auth/personal.php");
        </script>';
        exit;
    }
    $query = "UPDATE auth SET lastname = '$lname' WHERE id = '$row1[0]'";
    mysqli_query($db, $query);    
}
#Изменение даты окончания обучения
if(!empty($year)){
    $query = "UPDATE auth SET end = '$year' WHERE id = '$row1[0]'";
    mysqli_query($db, $query);
}
#Если все проверки прошли то деавторизовывает и перекидывает на главную страницу
if(!empty($loginup) or !empty($pass) or !empty($fname) or !empty($lname) or !empty($year)){
    $login = $_COOKIE["hour"];
    $key = $_COOKIE["key"];
    setcookie("hour", $login, time() - 60*60*24*30);
    setcookie("key", $key, time() - 60*60*24*30);
    unset($_COOKIE['hour']);
    unset($_COOKIE['key']);
    unset($_SESSION["auth"]);
    unset($_SESSION["id"]);
    unset($_SESSION["login"]);
	echo'<script type="text/javascript">
		alert("Вы успешно изменили данные!");
		location.replace("http://localhost/kostya2003");
		</script>';
}
else{
	echo'<script type="text/javascript">
		alert("Вы ничего не указали.");
		location.replace("http://localhost/kostya2003/auth/personal.php");
		</script>';    
}
?>