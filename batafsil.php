<?php 
include 'connection.php';
$id=$_GET['id'];
$gets=$pdo->query("SELECT * FROM `photo` WHERE `id`=$id");
$get=$gets->fetch();

?>
<?php include 'layouts/header.php'; ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Ko'rish
        </h6>
        <p>
        <a class="btn btn-sm btn-primary float-right" href="index.php">Orqaga</a>
        </p><br>
    </div>
    <div class="card-body">
		<div class="col-md-12">
			<div class="panel panel-primary">
	    	<div class="panel-body form-group">
		    <div class="row">
				<div class="col-md-12">
					<h3><?=$get['title']?></h3>
				</div>
		    	<div>
		    		<img style="width:50%;" src="<?=$get['img']?>" alt="">
		    	</div>
		    	<div>
		    		<p><?=$get['text']?></p>
		    	</div>
			</div>
		</div>
		</div>
	</div>
	</form>
</div>
<?php include 'layouts/footer.php' ?>

