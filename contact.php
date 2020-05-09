<?php include 'layouts/header.php'; ?>

	<div class="col-md-12">
		<div class="mt-3" style="text-align:center;font-family:Gabriola;color:grey;">
			<h3>Biz bilan aloqada bo'ling</h3>
		</div>
			<?php 
				session_start();
			if (isset($_SESSION['contact'])): ?>
                <div class="alert alert-success">
					Xabararingiz qabul qilindi! Siz bilan tez orada bog'lanamiz!
                </div>
            <?php endif;
            	session_unset();
            ?>    
 		<form method="POST" action="contact_controller.php" class="mb-5 mt-5">
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