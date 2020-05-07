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

        
/*  Direction

		Technology

    Title

		Lorem Ipsum is simply

	Short

		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

	Text

		Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Mauris fermentum dictum magna.	
		There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.

*/
	}
	session_start();
	$_SESSION['added']="added";
	header('Location:../Project1/admin/index.php');	
?>
