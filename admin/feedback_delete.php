<?php 
include '../connection.php';
$id=$_GET['id'];
$del=$pdo->prepare("DELETE FROM `feedback` WHERE `id`=? ");
$send=$del->execute([$id]);
session_start();
$_SESSION['destroy']="destroy";
header('Location:feedback.php');

?>