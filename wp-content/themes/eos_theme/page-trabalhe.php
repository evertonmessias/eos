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
						<h2 class="center animate__animated animate__fadeInDown">TRABALHE CONOSCO</h2>
						<br>
						<hr class="bar"><br>
						<p class="Center center animate__animated animate__fadeInUp">Acreditamos que investir nos nossos colaboradores é trazer ainda mais qualidade aos nosso negócios e aos nossos produtos. Por isso, estamos<br>sempre em busca de novos talentos dispostos a dividir esse sonho grande com a gente.</p>
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
			<div class="section-title">
				<h2>SEJA BEM-VINDO À PÁGINA DE RECRUTAMENTO DA EOS CONSULTORES!</h2>
			</div>
			<div class="row">
				<div class="col-lg-6 col1">
					<div class="row">
						<div class="row">
							<div class="col-lg-2"><i class="ri-number-1"></i></div>
							<div class="col-lg-10">
								<p class="justify">Somos uma empresa de Consultoria especializada em desenvolvimento de software de gestão e que busca jovens talentos.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2"><i class="ri-number-2"></i></div>
							<div class="col-lg-10">
								<p class="justify">Preencha o formulário ao lado com seus dados e nos envie seu currículo. Conforme surgirem as oportunidades, entramos em contato.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2"><i class="ri-number-3"></i></div>
							<div class="col-lg-10">
								<p class="justify">Ficamos muito felizes pelo seu interesse em trabalhar conosco e será um prazer conhecê-lo. Boa sorte!</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col2">
					<?php echo do_shortcode('[contact-form-7 id="339" title="Trabalhe Conosco"]'); ?>
				</div>
			</div>
		</div>
		<br>
	</section><!-- End Tabs Section -->

</main><!-- End #main -->
<?php get_footer(); ?>