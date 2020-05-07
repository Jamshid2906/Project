<?php
    include 'check/checked.php';

    unset($_SESSION['login']);

    header('Location: index.php');
?>