<?php include "pagination.php";?>
<?php include "layouts/header.php";?>
		<div class="row">
			<div class="col-md-12" style="width:100%;">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>

			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="images/01.jpg" style="height: 1000px;" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>First slide label</h5>
			        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="images/03.jpg" style="height: 1000px;" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>Second slide label</h5>
			        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="images/05.jpg" style="height: 1000px;" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>Third slide label</h5>
			        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="images/06.jpg" style="height: 1000px;" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>Third slide label</h5>
			        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="images/04.jpg" style="height: 1000px;" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>Third slide label</h5>
			        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			      </div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			</div>

			<div class="row" >
				<?php foreach ($items as $item):?>
					<div id="div" class="col-md-3">
						<div class="card" style="width: 100%;">
						  <img src="<?=$item['img']?>" style="width: 300px;height: 200px;" class="card-img-top" alt="...">
						  <div class=" card-body">
						    <h5 class="card-title"><?=$item['title']?> </h5>
						    <div id="animate">
							    <p  class="card-text"><?=$item['short']?></p>
							    <a href="batafsil.php?id=<?=$item['id']?>" class="btn btn-primary">Batafsil o'qish</a>
						    </div>
						  </div>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
		<div class="pagination">
			<nav aria-label="Page navigation example" class="" style="margin:0 auto;">
			  <ul class="pagination">
				    <li class="page-item">
				      <a class="page-link" href="?page=<?=$l?>" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
			    <?php for($p=1;$p<=$c;$p++){
			    	echo "<li class='page-item'><a class='page-link' href='?page=$p'>".$p."</a></li>";
			     }?>
			    <li class="page-item">
			      <a class="page-link" href="?page=<?=$r?>" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</div>
		<?php include "layouts/footer.php";?>

	</div>
	</body>
	<script src="jquery.js"></script>
	<script src="bootstrap-4.4.1/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>	
</html>
<!-- <div class="row">
			<div class="col-md-3">	
				<div class="card" style="width: 100%;">
				  <img src="images/03.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div>
				<div class="col-md-3">	
					<div class="card" style="width: 100%;">
					  <img src="images/03.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
				<div class="col-md-3">	
					<div class="card" style="width: 100%;">
					  <img src="images/03.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
				<div class="col-md-3">	
				<div class="card" style="width: 100%;">
				  <img src="images/03.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div>	
		</div>	 -->