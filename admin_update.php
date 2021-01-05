<?php
include 'connection.php'; 
$id=$_GET['id'];
$connection=$pdo->query("SELECT * FROM `photo` WHERE `id`=$id");
$query=$connection->fetch();
$title0=$query['title'];
$short0=$query['short'];
$text0=$query['text'];
$img0=$query['img'];
?>
<?php 
    if(isset($_POST) && isset($_POST['submit1'])){
            $title1=trim($_POST['title1']);
            $short1=trim($_POST['short1']);
            $text1=trim($_POST['text1']);

            if(!empty($_FILES['img1']['tmp_name'])){
				$imgUniq=uniqid();
				$imgType=$_FILES['img1']['type'];
					
					if ($imgType=="image/jpg" || $imgType=="image/jpeg" || $imgType=="image/png" ) 
						{
							$full_paths="Rasmlar/".$imgUniq.".jpg";
							move_uploaded_file($_FILES['img1']['tmp_name'], $full_paths);
							$img1=$full_paths;
						}
				}			               
				else{
					
					$img1=$img0;
						
				} 
										           		
}

	if(trim($title1)!=trim($title0) || trim($short1)!=trim($short0) || trim($text1)!=trim($text0) || $img1!=$img0 ){
		session_start();
		$_SESSION['update']="update";
	}
	$update=$pdo->prepare("UPDATE `photo` SET `title`=? ,`short`=? , `text`=? , `img`=? WHERE `id`=?");
	$update->execute([$title1,$short1,$text1,$img1,$id]);	
    header ('Location: ../Project1/admin/index.php');
?>
