<?php include '../connection.php';?>
<?php 
$query=$pdo->query("SELECT * FROM `feedback`");
$fetch=$query->fetchAll();
?>
<?php include "layouts/header.php"; ?>
<?php
	$user=isset($_SESSION['user_data']) ? $_SESSION['user_data'] : null;
	if ($user==null) {
		header('Location: login.php');
	}
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Xabarlar 
        </h6>
        <p><a class="btn btn-sm btn-primary float-right" href="index.php">Orqaga</a></p>
    </div>
    <div class="card-body">
    	<?php 
    		// session_start();
    	 if (isset($_SESSION['destroy'])): ?>
                <div class="alert alert-success">
                    Ma'lumotni o'chirish muvaffaqiyatli bo'ldi! 
                </div>
            <?php endif; ?>
		<div class="row">
			<table style="width:100%;" class="table table-bordered table-hover">
				<tr>
					<th>ID</th>
					<th>Familiyasi</th>
					<th>Ism</th>
					<th>Izoh</th>
					<th>Email</th>
					<th>Action</th>	
				</tr>
				<?php foreach($fetch as $value):?>
				<tr> 
					<td><?=$value['id']?></td>
					<td><?=$value['familiyasi']?></td>
					<td><?=$value['ism']?></td>
					<td><?=$value['izoh']?></td>
					<td><?=$value['email']?></td>
					<td><a  class="btn btn-sm btn-danger float-left m-1" href="feedback_delete.php?id=<?=$value['id']?>" type="submit"><i class="fa fa-trash"></i>DELETE</a></td>
				</tr>
				<?php endforeach;?>
			</table>
		</div>
	</div>
<?php include "layouts/footer.php"; ?>
<?php unset($_SESSION['destroy'])?>