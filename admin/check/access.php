<?php
    session_start();
    include 'connect.php';
    $login = $_POST['login'] ?? "" ;
    $password = $_POST['password'] ?? "";
    if (!empty($login) && !empty($password)) {
        // $password = md5($password);
        $query = $pdo
                ->prepare('SELECT * FROM `user` WHERE `login` = ? AND `password` = ?');
        $query->execute([$login, $password]);
        $user_data = $query->fetch();
        //var_dump($user_data);
        if ($user_data) 
        {
            $_SESSION['user_data'] = $login;
            header('Location: ../index.php');
    	}else{
            $_SESSION['error'] =1;
            header('Location: ../login.php');
        }
	  
   }
?>