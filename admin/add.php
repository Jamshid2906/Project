<?php include 'layouts/header.php'; ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Yangiliklar/ Qo'shish
        </h6>
        <p>
        <a class="btn btn-sm btn-primary float-right" href="index.php">Orqaga</a>
        </p><br>
    </div>
    <div class="card-body">
<form action="../admin_php.php" method="POST" enctype="multipart/form-data">
	<!-- <a href="logout.php">Chiqish</a> -->
	<div class="col-md-12">
		<div class="panel panel-primary">
	    <div class="panel-body form-group">
		    <div class="row">
		    	<div class="input-group" style="margin:5px 0px;">
					<label style="width:100%; font-size: 20px;font-weight: bold;"  for="">Maqola sarlavhasi</label>
					<input class="form-control" name="title" type="text" required=""><br>
				</div>
				<div class="input-group" style="margin:5px 0px;">
					<label style="width:100%; font-size: 20px;font-weight: bold;"  for="">Rasm</label>
					<input class="input" type="file" name="img" accept="image/*" required=""> <br>
				</div>	
				<div class="input-group" style="margin:5px 0px;">
					<label style="width:100%; font-size: 20px;font-weight: bold;"  for="">Maqola qisqacha matni</label>
					<input class="form-control" name="short" >
				</div>
				<div class="input-group" style="margin:5px 0px;">
					<label style="width:100%; font-size: 20px;font-weight: bold;"  for="">Maqola matni</label><br>
					<textarea class="form-control" name="text" cols="20" rows="7" required="">
					</textarea> <br>
				</div>
			</div>
				<input class="btn btn-primary" type="submit" name="submit" value="Qo'shish" >
		</div>
		</div>
	</div>
	</form>
</div>
<?php include 'layouts/footer.php' ?>

