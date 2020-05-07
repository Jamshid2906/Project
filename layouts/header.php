<?php
$active=basename($_SERVER['PHP_SELF'],".php");


?>



<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
	<link rel="stylesheet" href="bootstrap-4.4.1/bootstrap-4.4.1-dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="min_css.css"/> 
	<style>
		#div{
			transition: 3s;
		}
		#animate{
			transition: 3s;
			display: none;
			margin-top: -30px;
		}
		#div:hover #animate{
			margin-top: 20px;
			display: block;
			z-index: 100;
		}
		/*
		#animate{
			display: none;
			transition: 2s;
		}
		
		#div:hover #animate{
			display: block;
			cursor: pointer;
		}*/

		/*
		#div:hover #animate{
			animation: example 1s ;
		}
		@keyframes example{
			0%{
				display: none;
				margin-top: 5px;
				animation-delay: 0.25s;
			}
			50%{
				display: block;
			}
			100%{
				display: block;
				margin-top: 35px;
				animation-delay: 0.5s; 
			}
		}*/


/*
		.phover , .ahover{
			display: none;
		}
		#div:hover{
			border: 2px solid red;
		}
		#div:hover .phover{
			display: block;
			transition: .5s;
		}
		#div:hover .ahover{
			display: block;
			transition: .5s;
		}*/
	</style>
</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="#">Navbar</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item <?= ($active=='index') ? 'active' :'' ?>">
			        <a class="nav-link " href="index.php">Bosh sahifa<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item <?= ($active=='about') ? 'active' :'' ?>">
			        <a class="nav-link " href="./about.php">Biz haqimizda</a>
			      </li>
			      <li class="nav-item  <?= ($active=='contact') ? 'active' :'' ?> ">
			        <a class="nav-link" href="./contact.php">Aloqa</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0" action="./search_native.php" method="GET">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Source">Search</button>
			    </form>
			  </div>
			</nav>