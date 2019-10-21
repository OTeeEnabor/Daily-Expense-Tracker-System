<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!== true){

    header("location: inc/login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIRE|| Tracker</title>
</head>
<body>
    
</body>
</html>