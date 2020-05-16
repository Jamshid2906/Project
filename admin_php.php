<?php
	include 'connection.php';

	if(isset($_POST['submit'])){
		$title=$_POST['title'];
		$text=$_POST['text'];
		$short=$_POST['short'];

		$img1=$_FILES['img']['name'];
		$img_uniq=uniqid();
		$imgType=$_FILES['img']['type'];
		
		// Fayl yuklash qismi
		
		if ($imgType=="image/jpg" || $imgType=="image/jpeg" || $imgType=="image/png") 
		{
			$full_path="Rasmlar/".$img_uniq.".jpg";
			move_uploaded_file($_FILES['img']['tmp_name'], $full_path);
			// echo "Rasm muvaffaqiyatli yuklandi";
		} else {
			echo "Siz rasm fayl yuklanmadi";
		}
		$img=$full_path;
		
		// Malumotlarni bazaga yozish qismi

		$my=$pdo->prepare("insert into `photo`(`title`,`short`,`text`,`img`,`time`,`view`)
							values(?,?,?,?,NOW(),?)");
		$my->execute(array($title,$short,$text,$img,"0"));
	}
	session_start();
	$_SESSION['added']="added";
	header('Location:../Project1/admin/index.php');	
?>
