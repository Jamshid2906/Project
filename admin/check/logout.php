<?php
    session_start();
    unset($_SESSION['user_data']);
    // var_dump(isset($_SESSION['user_data']));
    // exit;
    header('Location: ../login.php');
?>