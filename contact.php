<?php include 'layouts/header.php'; ?>
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
		if($success){
			echo "<div class='col-md-6 alert alert-success alert-dismissible' fade show role='alert' style='z-index:100;position:absolute;left:50%;top:10%;transform:translate(-50%,-50%);'>
	  					<button class='close' data-dismiss='alert' aria-label='Close'>&times;</button>
	  					<strong>Success!</strong> Indicates a successful or positive action.
				  </div>";
		} else{
			echo "<div class='col-md-6 alert alert-danger alert-dismissible fade show' role='alert' style='position:absolute;left:10%;top:50%;transform:translate(-50%,-50%);'>
	  					<button class='close' data-dismiss='alert' aria-label='Close'>&times;</button>
	  					<strong>Danger!</strong> Indicates a successful or positive action.
				  </div>";
		}
		$family="";
		$name="";
		$comment="";
		$mail="";
	}
?>

	<div class="col-md-12">
		<div class="mt-3" style="text-align:center;font-family:Gabriola;color:grey;">
			<h3>Biz bilan aloqada bo'ling</h3>
		</div>
 		<form method="POST" class="mb-5 mt-5">
 			<label>Familiyasi</label>
 				<input class="form-control" name="family" type="text" requendly="" autocomplete="of">
 			<label>Ism</label>
 				<input class="form-control" name="name" type="text" requendly="" autocomplete="of">
 			<label>Izohni kiritish</label>
	 			<textarea class="form-control" name="comment" cols="20" rows="10" requendly="" autocomplete="of">
	 			</textarea>	
 			<label>Email</label>
 				<input class="form-control" name="mail" type="mail" autocomplete="of">
 			<button type="submit" class="btn btn-primary mt-3 mb-3">Yuborish</button>	
 		</form>
 	</div>
	
 <?php include 'layouts/footer.php';?>
</div>