<?php include '../connection.php';?>
<?php 
$query=$pdo->query("SELECT * FROM `feedback`");
$fetch=$query->fetchAll();
?>
<?php include "layouts/header.php"; ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Xabarlar 
        </h6>
        <p><a class="btn btn-sm btn-primary float-right" href="index.php">Orqaga</a></p>
    </div>
    <div class="card-body">
		<div class="row">
			<table style="width:100%;" class="table table-bordered table-hover">
				<tr>
					<th>ID</th>
					<th>Familiyasi</th>
					<th>Ism</th>
					<th>Izoh</th>
					<th>Email</th>	
				</tr>
				<?php foreach($fetch as $value):?>
				<tr> 
					<td><?=$value['id']?></td>
					<td><?=$value['familiyasi']?></td>
					<td><?=$value['ism']?></td>
					<td><?=$value['izoh']?></td>
					<td><?=$value['email']?></td>
				</tr>
				<?php endforeach;?>
			</table>
		</div>
	</div>
<?php include "layouts/footer.php"; ?>