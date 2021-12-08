<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php bloginfo() ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?php echo SITEPATH; ?>assets/img/favicon.png" rel="icon">
	<link href="<?php echo SITEPATH; ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo SITEPATH; ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo SITEPATH; ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/css/eos_theme.css" rel="stylesheet">

	<!-- Google Translate -->
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
					pageLanguage: 'pt'
				},
				'google_translate_element');
		}
	</script>

	<?php wp_head(); ?>

</head>

<body>

	<!-- ======= Top Bar ======= -->
	<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
		<div class="container d-flex">
			<div class="col-md-4 contact-info mr-auto">
				<i class="icofont-envelope"></i> <a href="mailto:contato@eosconsultores.com.br">contato@eosconsultores.com.br</a>
				<i class="icofont-phone"></i> (67) 3321-2898
			</div>
			<div class="col-md-4 google-language">
				<div id="google_translate_element" class="google-translate"></div>
			</div>
			<div class="col-md-4 social-links">
				<a href="#"><i class="bx bxl-facebook"></i></a>
				<a href="#"><i class="bx bxl-instagram"></i></a>
			</div>
		</div>
	</div>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center">
		<div class="container d-flex align-items-center">

			<a href="/" class="logo me-auto"><img src="<?php echo SITEPATH; ?>assets/img/logo.png" alt=""></a>

			<nav id="navbar" class="navbar order-last order-lg-0">
				<ul>
					<li><a class="nav-link scrollto active" href="/#hero">Home</a></li>
					<li><a class="nav-link scrollto" href="/#about">Sobre</a></li>
					<li><a class="nav-link scrollto" href="/#tabs">Soluções</a></li>
					<li><a class="nav-link scrollto" href="/#services">Serviços</a></li>
					<li><a class="nav-link scrollto " href="/#portfolio">Portfolio</a></li>
					<li><a class="nav-link scrollto" href="/#team">Equipe</a></li>
					<li><a href="blog.html">Blog</a></li>
					<!--<li class="dropdown"><a href="/#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="/#">Drop Down 1</a></li>
							<li class="dropdown"><a href="/#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
								<ul>
									<li><a href="/#">Deep Drop Down 1</a></li>
									<li><a href="/#">Deep Drop Down 2</a></li>
									<li><a href="/#">Deep Drop Down 3</a></li>
									<li><a href="/#">Deep Drop Down 4</a></li>
									<li><a href="/#">Deep Drop Down 5</a></li>
								</ul>
							</li>
							<li><a href="/#">Drop Down 2</a></li>
							<li><a href="/#">Drop Down 3</a></li>
							<li><a href="/#">Drop Down 4</a></li>
						</ul>
					</li>-->
					<li><a class="nav-link scrollto" href="/#contact">Contato</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

			<a href="/#about" class="get-started-btn scrollto">Get Started</a>
		</div>
	</header><!-- End Header -->