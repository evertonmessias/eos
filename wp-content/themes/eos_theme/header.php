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

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo SITEPATH; ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">	
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/aos/aos.css" rel="stylesheet">
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

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center <?php if(!is_page_php() && !is_page_solutions() && !is_front_page())echo 'header-page' ?>">
		<div class="container d-flex align-items-center">

			<a href="/" class="logo me-auto"><img src="<?php echo SITEPATH; ?>assets/img/logo.png" title="EOS"></a>

			<nav id="navbar" class="navbar order-last order-lg-0">
				<ul>
					<li><a class="nav-link scrollto" href="/<?php if(is_front_page()) echo "#hero"; ?>">Home</a></li>					
					<li class="dropdown"><a class="nav-link scrollto <?php if(is_page_solutions()) echo "active"; ?>" href="/#solutions"><span>Soluções</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li><a href="/netuno">NETUNO</a></li>							
							<li><a href="/agillis">AGILLIS</a></li>
							<li><a href="/nautillus">NAUTILLUS</a></li>
							<li><a href="/zapia">ZÁPIA</a></li>
							<li><a href="/polis">PÓLIS</a></li>
						</ul>
					</li>
					<li><a class="nav-link scrollto <?php if(is_page('empresa')) echo "active"; ?>" href="/empresa">Empresa</a></li>
					<li><a class="nav-link scrollto <?php if(is_page('trabalhe')) echo "active"; ?>" href="/trabalhe">Trabalhe Conosco</a></li>
					<li><a class="nav-link scrollto <?php if(is_page('blog')) echo "active"; ?>" href="/blog">Blog</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

			<a href="/contato" class="get-started-btn scrollto">Contato</a>
		</div>
	</header><!-- End Header -->