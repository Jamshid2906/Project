<?php 
	include 'connection.php';
	$query=$pdo->query("SELECT * FROM `photo`");
	$c=$query->fetchAll();
	$c=ceil(count($c)/8);
	if(!isset($_GET['page'])){
		$p=1;
		$l=$c;
		$r=2;
	} else{
		if($_GET['page']>$c)
		{
			$p=1;
		}
		elseif($_GET['page']<1)
		{
			$p=$c;
		}
		else{
			$p=$_GET['page'];
		}
		
		$l=$p-1;
		$r=$p+1;
			if($l<1)
			{
				$l=$c;
			}
			if($r>$c)
			{
				$r=1;
			}

}
	$k=($p-1)*8;
	
		
	$g=$pdo->query("select * from `photo` order by `id` desc limit $k,8")	;
	$items=$g->fetchAll();
?>