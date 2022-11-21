<?php
session_start();
$login = $_COOKIE["hour"];
$key = $_COOKIE["key"];
setcookie("hour", $login, time() - 60*60*24*30);
setcookie("key", $key, time() - 60*60*24*30);
unset($_COOKIE['hour']);
unset($_COOKIE['key']);
unset($_SESSION["auth"]);
unset($_SESSION["id"]);
unset($_SESSION["login"]);
echo'<script>
  location.replace("http://localhost/kostya2003");
</script>';
?>