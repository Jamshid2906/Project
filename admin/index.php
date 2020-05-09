<?php include '../pagination.php'?>
<?php include 'layouts/header.php'?>
    
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Yangiliklar
        </h6>
        <p>
        <a class="btn btn-sm btn-primary float-right" href="add.php">Yaratish</a>
        </p><br>
    </div>
    <div class="card-body">
            <?php 
                session_start();
            if (isset($_SESSION['added'])): ?>
                <div class="alert alert-success">
                    Ma'lumotni qo'shish muvaffaqiyatli bo'ldi! 
                </div>
            <?php elseif (isset($_SESSION['update'])): ?>
                <div class="alert alert-success">
                    Ma'lumotni o'zgartish muvaffaqiyatli bo'ldi! 
                </div>
            <?php elseif (isset($_SESSION['destroy'])): ?>
                <div class="alert alert-success">
                    Ma'lumotni o'chirish muvaffaqiyatli bo'ldi! 
                </div>
            <?php endif;
            session_unset();
            ?>    
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Rasm</th>
                <th>Title</th>
                <th>Short</th>
                <th width='300'>Amallar</th>
            </tr>
            <?php foreach($items as $value): ?>
            <tr>
                <td><?=$value['id']?></td>
                <td><img width="100px" src="../<?=$value['img']?>" alt=""></td>
                <td><?=$value['title']?></td> 
                <td><?=$value['short']?></td>
                <td>
                    <a class="btn btn-sm btn-primary float-left m-1" href="view.php?id=<?=$value['id']?>"><i class="glyphicon glyphicon-eye">View</i></a>
                    <a class="btn btn-sm btn-warning float-left m-1" href="update.php?id=<?=$value['id']?>"><i class="fa fa-edit"></i>Edit</a>
                    <a  class="btn btn-sm btn-danger float-left m-1" href="delete.php?id=<?=$value['id']?>" type="submit"><i class="fa fa-trash"></i>DELETE</a>
                </td>
            </tr>
           <?php endforeach;?> 
        </table>
        <div class="pagination">
            <nav aria-label="Page navigation example" class="" style="margin:0 auto;">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="?page=<?=$l?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <?php for($p=1;$p<=$c;$p++){?>
                    <?php echo "<li class='page-item'><a class='page-link' href='?page=$p'>".$p."</a></li>"?>
                <?php }?>
                <li class="page-item">
                  <a class="page-link" href="?page=<?=$r?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
    </div>
</div>

<?php include 'layouts/footer.php'?>