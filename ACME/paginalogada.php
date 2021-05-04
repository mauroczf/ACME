<?php
session_start();
if(!isset($_SESSION['id_user']))
{
    header("location:index.php");
    exit;
}
    include ("navbar.php");
    include ("head.php");
    include ("menu.php");
    include ("footer.php");
    include_once ("conexao.php")
?>
