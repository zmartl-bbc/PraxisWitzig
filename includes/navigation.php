<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Dr. med. Dieter Witzig</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse"
			id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
			<?php 
			if($page_title == "Angebot") {
				echo '<li class="active"><a href="services.php">Angebot</a></li>';
			} else {
				echo '<li><a href="services.php">Angebot</a></li>';
			} 
			if($page_title == "Lageplan"){
				echo '<li class="active"><a href="location.php">Lageplan</a></li>';
			} else {
				echo '<li><a href="location.php">Lageplan</a></li>';
			}
			if($page_title == "Team"){
				echo '<li class="active"><a href="team.php">Team</a></li>';
			} else {
				echo '<li><a href="team.php">Team</a></li>';
			}
			if($page_title == "Links"){
				echo '<li class="active"><a href="links.php">Links</a></li>';
			} else {
				echo '<li><a href="links.php">Links</a></li>';
			}
			if($page_title == "&Ouml;ffnungszeiten") {
				echo '<li class="active"><a href="openingtimes.php">&Ouml;ffnungszeiten</a></li>';
			} else {
				echo '<li><a href="openingtimes.php">&Ouml;ffnungszeiten</a></li>';				
			}				
				?>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>