<?php

    include 'connection.php';
    if (isset($_GET['input'])) {

    	if(!isset($_GET['search'])){
    		$t=1;
    	} else{
    		$t=$_GET['search'];
    	}
    	$t=($t-1)*4;
        $input = $_GET['input'];
        $input = '%'.trim($input).'%';
        // $query = $connection->query('SELECT * FROM `news` WHERE `title` LIKE "%'.$key.'%"');
        // $data = $query->fetchAll();

        $query = $pdo->prepare("SELECT * FROM `photo` 
                            WHERE `title` LIKE :key 
                            OR `short` LIKE :key 
                            OR `text` LIKE :key 
                            ORDER BY `id` DESC
                            LIMIT :u,4");

        $query->execute([':key'=>$input,':u'=>$t]);                
        $data = $query->fetchAll();
    }

    
    "SELECT * FROM `photo` 
    WHERE (`title` LIKE :key 
    OR `short` LIKE :key 
    OR `text` LIKE :key) AND() 
    ORDER BY `id` DESC
    LIMIT :u,4"