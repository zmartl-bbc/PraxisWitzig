<!DOCTYPE html>
<html lang="de">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Luca Marti">

<title>Praxis Witzig</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/modern-business.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"
	type="text/css">
</head>

<body>
	<?php
	require_once 'includes/navigation.php';
	?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Lageplan</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Startseite</a></li>
					<li class="active">Lageplan</li>
				</ol>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<h1>Details</h1>
				<p><i class="fa fa-map-marker"></i> Direkt unter dem Spital Uster, 10 min. vom Bahnhof.</p>
				<p><i class="fa fa-car"></i> Reservierte Parkpl&auml;tze auf dem ehemaligen Areal des Restaurants Schibli.</p>
				<p><i class="fa fa-bus"></i> Bushaltestelle: Uster, Spital, 2 min.</p>
			</div>
			<div class="col-md-8">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d675.7573273334241!2d8.722543782543987!3d47.3528257314798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479aa4a9d9762e9b%3A0x8f7736cf4bdfc95e!2sDr.+med.+Dieter+Witzig!5e0!3m2!1sde!2sch!4v1456246706309" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>

		<!-- Footer -->
		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>Copyright &copy; Your Website 2014</p>
				</div>
			</div>
		</footer>

	</div>
	<!-- /.container -->

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/contact_me.js"></script>
	<script src="js/jqBootstrapValidation.js"></script>
	<!-- Script to Activate the Carousel -->
	<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
