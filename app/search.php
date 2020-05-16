<?php

    include 'connection.php';
    if (isset($_GET['input'])) {

        $input_old = $_GET['input'];
        $input = '%'.trim($input_old).'%';
        // $query = $connection->query('SELECT * FROM `news` WHERE `title` LIKE "%'.$key.'%"');
        // $data = $query->fetchAll();

        $query = $pdo->prepare("SELECT * FROM `photo` 
                            WHERE `title` LIKE :key 
                            OR `short` LIKE :key 
                            OR `text` LIKE :key
                            ORDER BY `id` DESC
                            LIMIT 5");

        $query->execute([':key'=>$input]);                
        $data = $query->fetchAll();
    }
?>