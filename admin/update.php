<?php
include '../connection.php'; 
$id=$_GET['id'];
$connection=$pdo->query("SELECT * FROM `photo` WHERE `id`=$id");
$query=$connection->fetch();
$title0=$query['title'];
$short0=$query['short'];
$text0=$query['text'];
$img0=$query['img'];
?>
<?php include 'layouts/header.php'?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Yangiliklar / O'zgartirish
        </h6>
        <p>
        <a class="btn btn-sm btn-primary float-right" href="index.php">Orqaga</a>
        </p><br>
    </div>
    <div class="card-body">
<form  method="POST" action="../admin_update.php?id=<?=$id?>" enctype="multipart/form-data">
	<div class="col-md-12">
		<div class="panel panel-primary">
		<div class="panel-heading">
			<center><h2>Update data to Website</h2></center>
		</div>
	    <div class="panel-body form-group">
		    <div class="row">
		    	<div class="input-group" style="margin:5px 0px;">
					<label style="width:100%; font-size: 20px;font-weight: bold;" for="">Maqola sarlavhasi</label>
					<input class="form-control" name="title1" value="<?=$title0?>" type="text" autocomplete="off" >
				</div>	
				<div class="input-group" style="margin:5px 0px;">	
					<label style="width:100%;font-size: 20px;font-weight: bold;" for="">Picture</label>
					<div style="width: 100%;">
						<img style="margin:5px 0px;" src="../<?=$img0?>" width="100">
					</div>
					<input type="file" name="img1"  accept="image/*" autocomplete="off"> 
				</div>
				<div class="input-group" style="margin:5px 0px;">	
					<label style="width:100%;font-size: 20px;font-weight: bold;" for="">Maqola qisqacha matni</label>
					<input class="form-control" name="short1" value="<?=$short0?>">
				</div>
				<div class="input-group" style="margin:5px 0px;">	
					<label style="width:100%;font-size: 20px;font-weight: bold;" for="">Maqola matni</label>
					<textarea class="form-control" name="text1"  rows="7" ><?=$text0?>
					</textarea>
				</div>
			</div>
				<input class="btn btn-primary" type="submit" name="submit1" value="Saqlash" >
			</div>
		</div>
	</div>
	</form>
</div>
<?php include 'layouts/footer.php'?>
