<?php 
$page_title = "&Ouml;ffnungszeiten";
?>
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
<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
	<?php
	require_once 'includes/navigation.php';
	?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo $page_title ?></h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Startseite</a></li>
					<li class="active"><?php echo $page_title ?></li>
				</ol>
			</div>
		</div>

		<div class="row">
				<div class="col-md-12">
					<h3>&Ouml;ffnungszeiten:</h3>
					<div class="col-md-12">
						<h2>
							<small>Montag, Dienstag, Mittwoch</small>
						</h2>
					</div>
					<div class="col-md-6">
						<p>
							<strong>Morgens</strong>
						</p>
						<p>
					
					</p></div>
					<div class="col-md-6">
						<p>07:00 - 12:00 h</p>

					</div>
					<div class="col-md-6">
						<p>
							<strong>Nachmittags</strong>
						</p>
						<p>
					
					</p></div>
					<div class="col-md-6">
						<p>13:00 - 18:00 h</p>

					</div>
					<div class="col-md-12">
						<h2>
							<small>Donnerstag</small>
						</h2>
					</div>
					<div class="col-md-6">
						<p>
							<strong>Morgens</strong>
						</p>
						<p>
					
					</p></div>
					<div class="col-md-6">
						<p>08:00 - 12:00 h</p>

					</div>
					<div class="col-md-6">
						<p>
							<strong>Nachmittags</strong>
						</p>
						<p>
					
					</p></div>
					<div class="col-md-6">
						<p>geschlossen</p>

					</div>
					<div class="col-md-12">
						<h2>
							<small>Freitag</small>
						</h2>
					</div>
					<div class="col-md-6">
						<p>
							<strong>Morgens</strong>
						</p>
						<p>
					
					</p></div>
					<div class="col-md-6">
						<p>07:00 - 12:00 h</p>

					</div>
					<div class="col-md-6">
						<p>
							<strong>Nachmittags</strong>
						</p>
						<p>
					
					</p></div>
					<div class="col-md-6">
						<p>14:00 - 16:00 h</p>

					</div>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-md-12">
					<h3>Telefonzeiten:</h3>
					<div class="row">
						<div class="col-md-12">
							<h4>
								<i class="fa fa-phone"></i> 044 941 60 20
							</h4>
						</div>
					</div>
					<div class="col-md-12">
						<h2>
							<small>Montag, Dienstag, Mittwoch</small>
						</h2>
					</div>
					<div class="col-md-6">
						<p>
							<strong>Morgens</strong>
						</p>
						<p>
					
					</p></div>
					<div class="col-md-6">
						<p>08:00 - 12:00 h</p>

					</div>
					<div class="col-md-6">
						<p>
							<strong>Nachmittags</strong>
						</p>
						<p>
					
					</p></div>
					<div class="col-md-6">
						<p>14:00 - 18:00 h</p>

					</div>
					<div class="col-md-12">
						<h2>
							<small>Donnerstag</small>
						</h2>
					</div>
					<div class="col-md-6">
						<p>
							<strong>Morgens</strong>
						</p>
						<p>
					
					</p></div>
					<div class="col-md-6">
						<p>08:00 - 12:00 h</p>

					</div>
					<div class="col-md-6">
						<p>
							<strong>Nachmittags</strong>
						</p>
						<p>
					
					</p></div>
					<div class="col-md-6">
						<p>geschlossen</p>

					</div>
					<div class="col-md-12">
						<h2>
							<small>Freitag</small>
						</h2>
					</div>
					<div class="col-md-6">
						<p>
							<strong>Morgens</strong>
						</p>
						<p>
					
					</p></div>
					<div class="col-md-6">
						<p>08:00 - 12:00 h</p>

					</div>
					<div class="col-md-6">
						<p>
							<strong>Nachmittags</strong>
						</p>
						<p>
					
					</p></div>
					<div class="col-md-6">
						<p>14:00 - 16:00 h</p>

					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php
			require_once 'includes/footer.php';
		?>

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
