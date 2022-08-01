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
						<h2 class="center animate__animated animate__fadeInDown">SOBRE A EOS</h2>
						<br>
						<hr class="bar"><br>
						<p class="Center center animate__animated animate__fadeInUp">Somos especialistas no segmento de saneamento básico.<br>Há 30 anos ajudamos empresas a modernizarem sua gestão</p>
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

	<!-- ======= Tabs Section ======= -->
	<section class="tabs">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h4>QUEM SOMOS</h4>
						<hr class="bar"><br>
						<?php the_content() ?>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-6 blue col1">
					<div class="section-title">
						<h4>Missão</h4>
						<p>Oferecer, de forma sustentável, soluções de softwares e serviços eficazes,<br>seguros e rentáveis, que melhorem os resultados de nossos clientes.</p>
					</div>
				</div>
				<div class="col-lg-6 blue col2">
					<div class="section-title">
						<h4>Visão</h4>
						<p>Ser reconhecida no mercado pela excelência e inovação.</p>
					</div>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-lg-6 text col1">
					<div class="section-title">
						<h4>ÉTICA</h4>
						<hr class="bar"><br>
						<p>Honestidade e confiança. Relações de trabalho são como relações pessoais, precisam ser baseadas em pilares fortes. Não seriamos nada sem a confiança de nossos parceiros e clientes, e só adquirimos essa relação com muita honestidade e seriedade no trabalho.</p>
					</div>
				</div>
				<div class="col-lg-6 img col2">
					<img src="<?php echo SITEPATH; ?>assets/img/pages/etica.jpg" class="img-fluid" alt="">
				</div>
			</div>
			<div class="row">
			<div class="col-lg-6 img col2">
					<img src="<?php echo SITEPATH; ?>assets/img/pages/organizacao.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 text col1">
					<div class="section-title">
						<h4>ORGANIZAÇÃO</h4>
						<hr class="bar"><br>
						<p>Temos compromisso com a melhoria e foco nos clientes. Trabalhamos incessantemente para encontrar sempre as melhores práticas de trabalho, gerando os melhores resultados para os nossos clientes.</p>
					</div>
				</div>				
			</div>
			<div class="row">
				<div class="col-lg-6 text col1">
					<div class="section-title">
						<h4>SIMPLICIDADE</h4>
						<hr class="bar"><br>
						<p>Agir simples para agir certo. O foco na produtividade, velocidade e qualidade são garantias de trabalho bem feito. Portanto, acima de qualquer coisa, foco nas ações corretas, é assim que trabalhamos.</p>
					</div>
				</div>
				<div class="col-lg-6 img col2">
					<img src="<?php echo SITEPATH; ?>assets/img/pages/simplicidade.jpg" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section><!-- End Tabs Section -->

	<!-- ======= Clients Section ======= -->
	<section id="clients" class="clients">
		<div class="container" data-aos="zoom-in">
			<br><br>
			<h2 class="center">Alguns dos nossos clientes:</h2>
			<br><br>
			<?php clients_slider() ?>
			<br><br>

		</div>
	</section><!-- End Clients Section -->

</main><!-- End #main -->
<?php get_footer(); ?>