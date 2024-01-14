<?php

session_start();
$data = [];
if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $data[$key] = htmlspecialchars(strip_tags(trim($value)));
    }

$_SESSION["name"] = $data["name"] ; 
$_SESSION["email"] = $data["email"] ; 
$_SESSION["password"] = $data["password"] ; 

header("Location: login.php");
}



?>