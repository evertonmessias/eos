<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
	<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

		<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

		<div class="carousel-inner" role="listbox">

			<!-- Slide 1 -->
			<div class="carousel-item active">
				<video autoplay muted loop class="vdesk">
					<source src="<?php echo SITEPATH; ?>assets/img/slide/6.webm" type="video/webm">
				</video>
				<!--<video autoplay muted loop class="vmobi">
					<source src="<?php //echo SITEPATH; 
									?>assets/img/slide/home-1_mobile.webm" type="video/webm">
				</video>-->
				<div class="carousel-container">
				<div class="container">
						<h2 class="center animate__animated animate__fadeInDown">PÓLIS</h2>
						<br>
						<hr class="bar"><br>
						<h4 class="Center center animate__animated animate__fadeInUp">Evite o desperdício de recursos<br>em sua empresa</h4>
						<p class="Center center animate__animated animate__fadeInUp">Tenha o controle completo do consumo de energia elétrica, água,<br>gás e água quente e otimize seus processos internos.</p>
					</div>
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

	<!-- ======= Clients Section ======= -->
	<section id="clients" class="clients">
		<div class="container" data-aos="zoom-in">
			<br><br>
			<h2 class="center">Alguns dos nossos clientes:</h2>
			<br><br>
			<?php clients_slider() ?>
			<br><br>
			<div class="section-title">
				<h2>Tenha dados claros sobre o<br>consumo de sua empresa.</h2>
				<br>
				<p class="center">Utilizando o software Grandes Consumidores será possível ter uma visão clara<br>dos gastos diários de sua empresa com água, energia, gás e água quente.</p>
			</div>
			<br><br>

		</div>
	</section><!-- End Clients Section -->



	<!-- ======= Tabs 1 Section ======= -->
	<section class="tabs section-bg pdark1">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-6 col1">
					<div class="section-title">
						<h4>Informações facilmente visualizadas</h4>
						<hr class="bar"><br>
						<p class="justify">O software foi desenvolvido para a fácil compreensão do que está acontecendo e quais os pontos que podem ser melhorados no dia a dia.</p>
					</div>
				</div>
				<div class="col-lg-6 col2">
					<img src="<?php echo SITEPATH; ?>assets/img/pages/laptop1.png" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section><!-- End Tabs Section -->



	<!-- ======= Tabs 2 Section ======= -->
	<section class="tabs section-bg plight">		
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-6 col1">
					<img src="<?php echo SITEPATH; ?>assets/img/pages/laptop7.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 col2">
					<div class="section-title">
						<h4>Controle Financeiro</h4>
						<hr class="bar"><br>
						<p class="justify">Muitas empresas deixam de desenvolver novos projetos por medo dos gastos, agora é possível saber exatamente quanto irá gastar e fazer o planejamento financeiro completo.</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Tabs Section -->


	<!-- ======= Tabs 3 Section ======= -->
	<section class="tabs section-bg pdetail">
		<div class="container" data-aos="fade-up">

			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-4 col">
					<i class="ri-home-line"></i><br><br><br>
					<h4>Dados atualizados</h4>
					<hr class="barr"><br>
				</div>
				<div class="col-lg-4 col">
					<i class="ri-computer-line"></i><br><br><br>
					<h4>Ampla cobertura</h4>
					<hr class="barr"><br>
				</div>
				<div class="col-lg-2"></div>
			</div>

			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-4 col">
					<i class="ri-archive-line"></i><br><br><br>
					<h4>Proteção de dados</h4>
					<hr class="barr"><br>
				</div>
				<div class="col-lg-4 col">
					<i class="ri-calendar-check-fill"></i><br><br><br>
					<h4>Tecnologia</h4>
					<hr class="barr"><br>
				</div>
				<div class="col-lg-2"></div>
			</div>

			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-4 col">
					<i class="ri-chat-3-line"></i><br><br><br>
					<h4>Gerenciamento</h4>
					<hr class="barr"><br>
				</div>
				<div class="col-lg-4 col">
					<i class="ri-layout-2-line"></i><br><br><br>
					<h4>100% costumizável</h4>
					<hr class="barr"><br>
				</div>
				<div class="col-lg-2"></div>
			</div>

		</div>
	</section><!-- End Tabs Section -->


	<!-- ======= Tabs 4 Section ======= -->
	<section class="tabs section-bg pdark2">
	</section><!-- End Tabs Section -->



</main><!-- End #main -->
<?php get_footer(); ?>