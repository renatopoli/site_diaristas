<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="html 5 template, cleaning service template, cleaning template, cleaning company template">
	<meta name="author" content="tonytemplates.com">
	<meta name="format-detection" content="telephone=no">
	<!--link rel="icon" href="favicon.ico"-->
	<title>Diarista - <?php echo $_SESSION['header-title']; ?></title>
	<script>if ( top !== self && ['iPad', 'iPhone', 'iPod'].indexOf(navigator.platform) >= 0 ) top.location.replace( self.location.href );</script>
	<!-- Vendors -->
	<link href="css/vendor/bootstrap.min.css" rel="stylesheet">
	<link href="css/vendor/animate.min.css" rel="stylesheet">
	<link href="css/vendor/slick.css" rel="stylesheet">
	<link href="css/vendor/lightbox.css" rel="stylesheet">
	<link href="css/vendor/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="css/vendor/nouislider.css" rel="stylesheet">
	<!-- Template Style -->
	<link href="css/custom.css" rel="stylesheet">
	<!-- Icon Font-->
	<link href="fonts/icomoon/style.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>

<body class="page-index">
	<!-- Header -->
	<header class="page-header header-sticky">
		<div class="page-header-mobile-info">
			<div class="page-header-mobile-info-content">
				<div class="page-header-info">
					<i class="icon icon-map-marker"></i>Av ABC, 00 - 2º andar Sala 01 - CEP: 0000-000
				</div>
				<div class="page-header-info">
					<i class="icon icon-technology"></i>(11) 1234-5678
				</div>
				<div class="page-header-info">
					<i class="icon icon-clock"></i>Segunda à sexta das 08h00 as 18h00
				</div>
				<div class="page-header-info">
					<i class="icon icon-speech-bubble"></i><a href="mailto:email@email">email@email</a>
				</div>
				<ul class="social-list">
					<li><a href="#"><i class="icon-google-plus-logo"></i></a></li>
					<li><a href="#"><i class="icon-facebook-logo"></i></a></li>
					<li><a href="#"><i class="icon-twitter-logo"></i></a></li>
					<li><a href="#"><i class="icon-instagram-logo"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="page-header-top">
			<div class="container">
				<div class="page-header-mobile-info-toggle"></div>
				<div class="logo">
					<a href="home"><img src="images/logo.gif" alt=""></a>
					<div class="shine"></div>
				</div>
				<div class="page-header-top-middle hidden-xs">
					<div class="page-header-slogan visible-lg">Seja bem-vindo!</div>
					<div class="page-header-shedule"><i class="icon icon-clock"></i>Segunda à sexta das 08h00 as 18h00
						<!--br>08h00 as 18h00--></div>
					<div class="page-header-phone text-right"><span>Ligue:</span> <span class="phone-number">(11) 1234-5678</span></div>
				</div>
				<div class="quote-button-wrap"><a href="contato" class="btn"><i class="icon icon-bell"></i>DÚVIDAS?</a></div>
				<a href="#" class="menu-toggle"><i class="icon-line-menu"></i><i class="icon-cancel"></i></a>
			</div>
		</div>
		<div class="page-header-menu">
			<?php include_once "menu.php"; ?>
		</div>
	</header>
	<!-- /Header -->