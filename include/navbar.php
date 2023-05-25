<?php require_once('include/dbConnection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Stadium Seat Booking</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body onLoad="imageChanger();">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			    <a class="navbar-brand" href="#">Stadium Seat Booking</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="chooseStadiums.php">booking for seat</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="event.php">Check Events</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>