<?php 
	include 'connection.php';
	if(!empty($_POST)){
		$family=$_POST['family'];
		$name=$_POST['name'];
		$comment=$_POST['comment'];
		$mail=$_POST['mail'];

		$out=$pdo->prepare("INSERT INTO `feedback`(`familiyasi`,`ism`,`izoh`,`email`,`time`)
							VALUES (?,?,?,?,NOW()) 
					 	   ");
		$success=$out->execute([$family,$name,$comment,$mail]);
		// if($success){
		// 	echo "<div class='col-md-6 alert alert-success alert-dismissible' fade show role='alert' style='z-index:100;position:absolute;left:50%;top:10%;transform:translate(-50%,-50%);'>
	 //  					<button class='close' data-dismiss='alert' aria-label='Close'>&times;</button>
	 //  					<strong>Success!</strong> Indicates a successful or positive action.
		// 		  </div>";
		// } else{
		// 	echo "<div class='col-md-6 alert alert-danger alert-dismissible fade show' role='alert' style='position:absolute;left:10%;top:50%;transform:translate(-50%,-50%);'>
	 //  					<button class='close' data-dismiss='alert' aria-label='Close'>&times;</button>
	 //  					<strong>Danger!</strong> Indicates a successful or positive action.
		// 		  </div>";
		// }
		$family="";
		$name="";
		$comment="";
		$mail="";

	}
		session_start();
		$_SESSION['contact']="contact";
		header("Location: contact.php");	
?>