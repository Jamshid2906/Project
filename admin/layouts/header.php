<?php
$active=basename($_SERVER['PHP_SELF'],".php");
session_start();
    $user=isset($_SESSION['user_data']) ? $_SESSION['user_data'] : null;
    if ($user==null) {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sport (admin)</title>
	<link rel="stylesheet" href="../bootstrap-4.4.1/bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../min_css.css"/> 
</head>
	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <h4 class="navbar-brand" style="font-weight: 600;color:darkblue;">Sport </h4>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item <?= ($active=='index') ? 'active bold' :'' ?>">
			        <a class="nav-link " href="./index.php" >Bosh sahifa<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item <?= ($active=='feedback') ? 'active bold' :'' ?>">
			        <a class="nav-link "  href="./feedback.php" >Mulohaza</a>
			      </li>
			      <!-- li class="nav-item">
			        <a class="nav-link " href="./table.php">Table</a>
			      </li> -->
			    </ul>
			    <form class="form-inline my-2 my-lg-0" action="#" method="GET">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="input" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>
				<a href="./check/logout.php" style="text-decoration:none">Logout</a>
			  </div>
			</nav>