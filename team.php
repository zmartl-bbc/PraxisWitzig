<?php 
$page_title = "Team";
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

		<div class="row animated bounceInLeft">
			<div class="col-md-8">
				<h1>Dr. med. Dieter Witzig</h1>
			</div>
			<div class="col-md-4">
				<img src="https://praxis-witzig.ch/images/witzig/portrait.jpg" alt="Dieter Witzig Image" title="Dieter Witzig" class="img-responsive" />
			</div>
		</div>
			<hr/>
		<div class="row animated bounceInRight">
			<div class="col-md-8">
				<h1>Rubina Pagotto</h1>
			</div>
			<div class="col-md-4">
				<img src="https://praxis-witzig.ch/images/team/team1.jpg" alt="Rubina Pagotto Image" title="Rubina Pagotto" class="img-responsive" />
			</div>
		</div>
		<hr/>
		<div class="row animated bounceInLeft">
			<div class="col-md-8">
				<h1>Monika Lombris</h1>
			</div>
			<div class="col-md-4">
				<img src="https://praxis-witzig.ch/images/team/team2.jpg" alt="Monika Lombris Image" title="Monika Lombris" class="img-responsive " />
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
