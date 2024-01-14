<?php
session_start();

$data = [];
if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $data[$key] = htmlspecialchars(strip_tags(trim($value)));
    }
if($_SESSION["email"] == $data["email"] && $_SESSION["password"] == $data["password"]){
    $_SESSION["isConnected"] = true ; 
    header("Location: home.php");
} else{
$_SESSION["errorMessage"] = " Mauvais identifiants";
header("Location: login.php");

};
};


?>