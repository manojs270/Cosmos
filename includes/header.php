<?php
		error_reporting(0);
		session_start();
		if ($_COOKIE["auth"] != "admin_in") {header("location:"."./");}
			include("../includes/connect.php");
			include("../includes/data.php");
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="@housamz">

				<meta name="description" content="Mass Admin Panel">
				<title>Cosmos Admin Panel</title>
				<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">

				<!-- Custom CSS -->
				<link rel="stylesheet" href="../includes/style.css">
				<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

				<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
					<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				<![endif]-->
			</head>

			<body>

			<div class="wrapper">
				<!-- Sidebar Holder -->
				<nav id="sidebar" class="bg-primary">
					<div class="sidebar-header">
						<h3>
							Cosmos Admin Panel<br><br>
							<i id="sidebarCollapse" class="glyphicon glyphicon-circle-arrow-left"></i>
						</h3>
						<strong>
							<i id="sidebarExtend" class="glyphicon glyphicon-circle-arrow-right"></i>
						</strong>
					</div><!-- /sidebar-header -->

					<!-- start sidebar -->
					<ul class="list-unstyled components">
						<li>
							<a href="home.php" aria-expanded="false">
								<i class="glyphicon glyphicon-home"></i>
								Home
							</a>
						</li>
			<li><a href="accomplishments.php"> <i class="glyphicon glyphicon-menu-down"></i>Accomplishments <span class="pull-right"><?=counting("accomplishments", "id")?></span></a></li>
<li><a href="colleges.php"> <i class="glyphicon glyphicon-menu-left"></i>Colleges <span class="pull-right"><?=counting("colleges", "id")?></span></a></li>
<li><a href="educations.php"> <i class="glyphicon glyphicon-time"></i>Educations <span class="pull-right"><?=counting("educations", "id")?></span></a></li>
<li><a href="experiences.php"> <i class="glyphicon glyphicon-pencil"></i>Experiences <span class="pull-right"><?=counting("experiences", "id")?></span></a></li>
<li><a href="jobs.php"> <i class="glyphicon glyphicon-duplicate"></i>Jobs <span class="pull-right"><?=counting("jobs", "id")?></span></a></li>
<li><a href="projects.php"> <i class="glyphicon glyphicon-phone"></i>Projects <span class="pull-right"><?=counting("projects", "id")?></span></a></li>
<li><a href="questions.php"> <i class="glyphicon glyphicon-chevron-up"></i>Questions <span class="pull-right"><?=counting("questions", "id")?></span></a></li>
<li><a href="recruiters.php"> <i class="glyphicon glyphicon-screenshot"></i>Recruiters <span class="pull-right"><?=counting("recruiters", "id")?></span></a></li>
<li><a href="students.php"> <i class="glyphicon glyphicon-question-sign"></i>Students <span class="pull-right"><?=counting("students", "id")?></span></a></li>
<li><a href="tests.php"> <i class="glyphicon glyphicon-random"></i>Tests <span class="pull-right"><?=counting("tests", "id")?></span></a></li>
<li><a href="tests_attempted.php"> <i class="glyphicon glyphicon-off"></i>Tests_attempted <span class="pull-right"><?=counting("tests_attempted", "id")?></span></a></li>
<li><a href="users.php"> <i class="glyphicon glyphicon-remove-sign"></i>Users <span class="pull-right"><?=counting("users", "id")?></span></a></li>
<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
				</ul>

			
			</nav><!-- /end sidebar -->

			<!-- Page Content Holder -->
			<div id="content">