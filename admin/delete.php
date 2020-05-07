<?php 
include '../connection.php';
$id=$_GET['id'];
$del=$pdo->prepare("DELETE FROM `photo` WHERE `id`=? ");
$send=$del->execute([$id]);
session_start();
$_SESSION['destroy']="destroy";
header('Location:index.php');

?>