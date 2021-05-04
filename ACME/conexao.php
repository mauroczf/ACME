<?php

$banco      = "bd_acme"; 
$user       = "root";
$senha      = "";
$host       = "localhost";

$mysqli = new mysqli($host, $user, $senha, $banco);
if(mysqli_connect_errno()) trigger_error(mysqli_connect_errno());
?>