<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobals</title>
</head>
<?php

/*
$GLOBALS
$_POST
$_GET
$_COOKIE
$_SESSION
*/

$x = 5;

function something(){
    $y = 10;
    echo $GLOBALS['x'];
}
?>
<body>
    
</body>
</html>