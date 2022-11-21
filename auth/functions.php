<?php
session_start();
include_once("connect.php");
$login=$_SESSION['login'];
$permitted_chars = "0123456789abcdefghijklmnopqrstuvwxyz";
$key=substr(str_shuffle($permitted_chars), 0, 30);
$file = $_FILES['file'];

function checkPic($file){
    function getExtension($file){
        return substr(strrchr($file['name'], '.'), 1);
    }
    $bRet = FALSE;
    $sExtension = strtolower(getExtension($file));
    $validextensions = array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg');
    if(in_array($sExtension, $validextensions)){
        $bRet = TRUE;  
    }
    else{
        $bRet = FALSE;
        die('<script>
                alert("Поддерживаются только картинки с расширением: jpg, jpeg, png, gif, webp, svg.");
                location.replace("http://localhost/kostya2003/auth/personal.php");
            </script>');
        
    }
    return $bRet;
}

if(checkPic($file)){
    
    $name = $key . $file['name'];
    $pathFile = __DIR__ . '/img/' .$name;
    if(!move_uploaded_file($file['tmp_name'], $pathFile)){
        echo '<script>
            alert("Произошла ошибка.");
        </script>';
    }

    $query = 'UPDATE auth SET img="'.$name.'" WHERE login="'.$login.'"';
    mysqli_query($db, $query);
    
}
header('Location: http://localhost/kostya2003/auth/personal.php');

?>