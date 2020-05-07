<?php 
include 'connection.php';
	$page=$_GET['page'];
	$g=$pdo->query("select * from `photo` order by `id` desc limit($page-1),4");
	$items = $g->fetchAll();

	//print_r($items);
?>