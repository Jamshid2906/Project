<?php
    session_start();
    include 'connect.php';
    if (isset($_POST['login']) && isset($_POST['password'])) {
    
    $login = $_POST['login'] ;
    $password = $_POST['password'] ;
    if (!empty($login) && !empty($password)) {
        // $password = md5($password);
        /*$query = $pdo
                ->prepare('SELECT * FROM `user` WHERE `login` = ? AND `password` = ?');
        $query->execute([$login, $password]);*/
        $query=$pdo->query("SELECT * FROM user WHERE login = '$login' AND password = '$password'");
        $user_data = $query->fetch();
        //var_dump($user_data);
        if ($user_data) 
        {
        	echo "<h1>Success</h1>";
        	var_dump($user_data);
            $_SESSION['login'] = $user_data;
            header('Location: ../index.php');
    	} else{
    		echo "<h1>Fail</h1>";
    	}
	  }
   }
?>