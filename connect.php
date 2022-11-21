<?php
$db = new mysqli("localhost", "Saikt", "", "Saikt");
$db->set_charset("utf-8");
if ($db->connect_errno){
    printf("Error connecting: %s\n", $db->connect_error);
    exit();
}
?>