<?php
    include 'app/search.php';
?>
<?php include 'layouts/header.php' ?>
<h4 style="text-align:center">Qidiruv natijalari</h4>

<?php if (!isset($input)): ?>
    <div class="alert alert-danger text-center">
        Siz kalit yozmadingiz!
    </div>
<?php elseif (count($data) == 0): ?>
    <div class="alert alert-danger text-center">
        Natija topilmadi!
    </div>
<?php else: ?>
    <?php foreach ($data as $value): ?>
        <h3><?= $value['title'] ?></h3>
        <p><?= $value['short'] ?></p>
    <?php endforeach; ?>
<?php endif; ?>
<?php include 'layouts/footer.php' ?>
<div class="pagination">
	<nav aria-label="Page navigation example" class="" style="margin:0 auto;">
	  <ul class="pagination">
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
	    <li class="page-item"><a class="page-link" href="?$input?search=1">1</a></li>
	    <li class="page-item"><a class="page-link" href="?$input?search=2">2</a></li>
	    <li class="page-item"><a class="page-link" href="?$input?search=3">3</a></li>
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
	    </li>
	  </ul>
	</nav>
</div>
</div>
