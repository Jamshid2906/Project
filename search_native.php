<?php
	include "connection.php";
	#$button=$_GET['submit'];
	$search=$_GET['search'];
	
		if (strlen($search)<=1) {
			echo 'Search term too short <br>';
		} 
		else{
			echo 'You searched for <b>'.$search.'</b> <hr size=1> <br>';
			$search_exploded=explode(" ", $search);
			
			
		# begin foreach	------------------------------------------
				$x=0;
			foreach ($search_exploded as $search_each) {
				$x++;

				if ($x==1) {
					$construct="(`title` LIKE '%$search_each%' OR `short` LIKE '%$search_each%' OR `text` LIKE '%$search_each%') ";
				} else{
					$construct.="AND (`title` LIKE '%$search_each%' OR `short` LIKE '%$search_each%' OR `text` LIKE '%$search_each%') ";
				}
			}
		# end foreach --------------------------------------------

		# topilgan results soni-----------------------------------
			
			$contructs="SELECT * FROM `photo` WHERE  $construct";
			$query=$pdo->query($contructs);
			$foundnum=$query->fetchAll();
			echo $contructs;

		# end topilgan results soni-------------------------------	

			if(count($foundnum)==0){
				echo "Some code here <br>";
				echo "Natijalar soni nolga teng bo'ldi shuning uchun topilmadi";
			} 
			else{
				echo count($foundnum)." results found!";
				$per_page=1;
				$start=$_GET['start'];
				#$max_pages=$foundnum/$per_page;
				
				if(!$start){
					$start=0;
					$getquery=$pdo->query("SELECT * FROM `photo` WHERE $construct LIMIT $start , $per_page");
					$getfetch=$getquery->fetch();
					echo $getfetch['title']."  ".$getfetch['short']." ID ".$getfetch['id'];
				}
				echo "<center>";
				$prew=$start-1;
				$next=$start+1;
				if(!($start<=0)){
					echo "<a href='?search=$search&submit=Source&start=$prew'>Prew</a>";
				}
				$i=1;
				for($x1=0;$x1<$foundnum;$x1=$x1+1){
					
					if($start!=$x1){
					echo "<a href='?search=$search&submit=Source&start=$x1'> $i </a>";
					}
					else{
					echo "<a href='?search=$search&submit=Source&start=$x1'><b> $i </b></a>";
					}
					$i++;
				}
				if(!($start>=$foundnum-$per_page)){
					echo "<a href='?search=$search&submit=Source&start=$next'>Next</a>";
				}

				echo "</center>";

			}
		}


?>