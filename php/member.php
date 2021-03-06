<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Butter Member</title>
	<link rel="stylesheet" href="../stylesheets/styles.css">
	<!-- Temporary fix for font-awesome -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
</head>
<body>
	<!-- Header -->
	<header class="main-header clearfix">
		<div class="main-header-wrapper">
			<div class="main-header-left">
				<a href="../index.html"><i class="fa fa-home fa-2x"></i></a>
			</div>

			<div class="main-header-right">
				<ul>
					<li><a href="../contact.html">Contact</a></li>
					<li class="signin-overlay">
						<?php
							session_start();
							if ($_SESSION['username']) {
								echo "<a href='logout.php'>logout <i class='fa fa-sign-in fa-lg'></i></a>";	
							} else {
								die("You must log in!");
							}
						?>
					</li>
				</ul>
			</div>

			<div class="main-header-mobile-button"><i class="fa fa-bars fa-2x"></i></div>
		</div>
	</header>

	<div class="main-header-mobile">
		<ul>
			<li><a href="../contact.html">Contact</a></li>
			<li class="signin-overlay">
				<?php
					session_start();
					if ($_SESSION['username']) {
						echo "<a href='logout.php'>logout <i class='fa fa-sign-in fa-lg'></i></a>";	
					} else {
						die("You must log in!");
					}
				?>
			</li>
		</ul>
	</div>
	<!-- End Header -->


	<!-- Container -->
	<div class="container">
		<div class="member-container">
			<section class="section-wrapper padding-top">
				<!-- <h1>Web <span>Butter</span></h1>
				<h4>Building professionaly developed content for the web.</h4> -->
				<?php
					session_start();
					if ($_SESSION['username']) {
						echo "<h1>Welcome, ".$_SESSION['username'] . "! </h1>";
					} else {
						die("You must log in!");
					}
				?>
			</section>
		</div>

		<section class="section-wrapper">
			<div class="slice">
				<form class="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
					<input class="upload-btn" type="file" name="file">
					<input class="upload-submit-btn" type="submit" value="upload">
				</form>
			</div>
		</section>
	
		<!-- FOOTER -->
		<footer class="footer-top">
			<section class="footer-wrapper">
				<div class="slice">
					<ul class="footer-top-ul-top">
						<li><a href="#/"><i class="fa fa-github-square fa-2x"></i></a></li>
						<li><a href="#/"><i class="fa fa-facebook-square fa-2x"></i></a></li>
						<li><a href="#/"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
						<li><a href="#/"><i class="fa fa-twitter-square fa-2x"></i></a></li>
					</ul>

					<ul class="footer-top-ul-bottom">
						<li><a href="../contact.html">Contact Us</a></li>
						<li><a href="#/">Privacy</a></li>
						<li><a href="#/">Site Map</a></li>
						<li><a href="#/">Collaborate</a></li>
					</ul>
				</div>
			</section>
		</footer>
		
		<footer class="footer-bottom">
			<section class="footer-wrapper">
				<div class="slice">
					<h5>Web Butter</h5>
					<p>&#169; Copyright November 2014</p>
				</div>
			</section>
		</footer>
		<!-- END FOOTERs -->
	</div>
	<!-- END CONTAINER -->
	<script type="text/javascript">
		function get() {
			$.post('../php/data.php', { name: form.project_name.value }, 
				function(output) {
					$('#info').html(output).show();
				});
		};
	</script>
	<script src="../js/jquery-2.1.1.min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>
</body>
</html>