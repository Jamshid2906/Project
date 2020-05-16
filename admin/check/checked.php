<?php
    session_start();
    $user=$_SESSION['user_data'];
    // var_dump($_SESSION['user_data']);
    // exit();
    if (isset($user)==false) {
        header('Location: ./login.php');
    }

?>