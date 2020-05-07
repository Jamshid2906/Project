<?php
    session_start();
    $login = $_SESSION['login'];
    if (empty($login)) {
        header('Location: ./login.php');
    }
?>