<?php 
session_start();
if(!isset($_SESSION["isConnected"])){
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<?php
if(isset($_SESSION["name"])){
echo "<p>".$_SESSION["name"]."</p>";
};
?>
<a href="reset.php"> Me déconnecter</a>
    
</body>
</html>