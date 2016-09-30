<?php
$page_title = "Angebot";
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
			<div class="col-lg-12">

				<ul id="myTab" class="nav nav-tabs nav-justified">
					<li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-medkit"></i> Gyn&auml;kologie</a></li>
					<li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-female"></i> Geburtshilfe</a></li>
					<li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-user-md"></i> Gyn&auml;kologische Chirurgie</a></li>
				</ul>

				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade active in" id="service-one">
						<h4>Gyn&auml;kologie</h4>
						<p>Jahreskontrolle, Gyn&auml;kologische Vorsorge</p>
						<p>Familienplanung, Schwangerschaftsverh&uuml;tung</p>
						<p>Sterilit&auml;tsabkl&auml;rung</p>
						<p>Menopausenberatung, Behandlung klimakterischer Beschwerden</p>
						<p>Urogyn&auml;kologie</p>
						<p>Abklarung von Brustver&auml;nderungen</p>
						<p>Abkl&auml;rung und Behandlung von Harninkontinenz</p>
					</div>
					<div class="tab-pane fade" id="service-two">
						<h4>Geburtshilfe</h4>
						<p>Schwangerschaftskontrollen</p>
						<p>Pr&auml;natale Diagnostik</p>
						<p>Ultraschall</p>
						<p>Geburten (privat oder halbprivat)</p>
						<p>Wochenbettbetreuung</p>
						<p>Beratung nach der Geburt</p>
					</div>
					<div class="tab-pane fade" id="service-three">
						<h4>Gyn&auml;kologische Chirurgie</h4>
						<p>Laparoskopische Operationen ("Knopfloch"-Technik)</p>
						<p>Operationen bei Harninkontinenz</p>
						<p>Sterilit&auml;tsabkl&auml;rungen, Unterbindung</p>
						<p>Hysteroskopische Operationen</p>
						<p>Brustoperationen</p>
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
