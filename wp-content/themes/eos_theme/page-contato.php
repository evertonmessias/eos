<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
	<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

		<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

		<div class="carousel-inner" role="listbox">

			<!-- Slide 1 -->
			<div class="carousel-item active">
				<video autoplay muted loop class="vdesk">
					<source src="<?php echo SITEPATH; ?>assets/img/slide/3.webm" type="video/webm">
				</video>
				<!--<video autoplay muted loop class="vmobi">
					<source src="<?php //echo SITEPATH; 
									?>assets/img/slide/home-1_mobile.webm" type="video/webm">
				</video>-->
				<div class="carousel-container">
					<div class="container">
						<h2 class="center animate__animated animate__fadeInDown">FALE COM UM ESPECIALISTA</h2>
						<br>
						<hr class="bar"><br>
						<p class="Center center animate__animated animate__fadeInUp">Entre em contato conosco.</p>
					</div>
				</div>
			</div>

		</div>

		<!--<a class="carousel-control-prev" href="/#heroCarousel" role="button" data-bs-slide="prev">
			<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
		</a>

		<a class="carousel-control-next" href="/#heroCarousel" role="button" data-bs-slide="next">
			<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
		</a>-->

	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= Tabs 3 Section ======= -->
	<section class="tabs detail job">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-2"></div>				
				<div class="col-lg-8">
					<?php echo do_shortcode('[contact-form-7 id="118" title="Fale com um Especialista"]'); ?>
				</div>
				<div class="col-lg-2"></div>
			</div>
		</div>
		<br>
	</section><!-- End Tabs Section -->

</main><!-- End #main -->
<?php get_footer(); ?>