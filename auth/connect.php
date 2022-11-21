<?php
session_start();
$db = new mysqli("localhost", "Saikt", "", "Saikt");
$db->set_charset("utf-8");
if ($db->connect_errno){
    printf("Error connecting: %s\n", $db->connect_error);
    exit();
}
$queryimg = 'SELECT img FROM auth WHERE login="'.$_SESSION['login'].'"';
$resultimg = mysqli_query($db, $queryimg);
$rowimg = mysqli_fetch_array($resultimg, MYSQLI_ASSOC);

$queryname = 'SELECT firstname, lastname, end FROM auth WHERE login="'.$_SESSION['login'].'"';
$resultname = mysqli_query($db, $queryname);
$rowname = mysqli_fetch_array($resultname, MYSQLI_ASSOC);

?>