<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
	<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

		<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

		<div class="carousel-inner" role="listbox">

			<!-- Slide 1 -->
			<div class="carousel-item active">
				<video autoplay muted loop class="vdesk">
					<source src="<?php echo SITEPATH; ?>assets/img/slide/2.webm" type="video/webm">
				</video>
				<!--<video autoplay muted loop class="vmobi">
					<source src="<?php //echo SITEPATH; 
									?>assets/img/slide/home-1_mobile.webm" type="video/webm">
				</video>-->
				<div class="carousel-container">
					<div class="container">
						<h2 class="center animate__animated animate__fadeInDown">AGILLIS</h2>
						<br>
						<hr class="bar"><br>
						<h4 class="Center center animate__animated animate__fadeInUp">Tecnologia e simplicidade na obtenção<br>de consumo de água</h4>
						<p class="Center center animate__animated animate__fadeInUp">Ferramenta completa para leitura, faturamento, impressão e<br>entrega simultânea de contas</p>
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
				<h2>Reduza os erros de leitura e aumente<br>a produtividade de seu agente de campo</h2>
				<br>
				<p class="center">O Agillis realiza todo o processo de leitura, cálculo e emissão da fatura.<br>Com muita praticidade e precisão, assegura o cumprimento de todo o processo de<br>obtenção de leitura e faturamento, aumentando a produtividade do agente de<br>campo e diminuindo custos.</p>
			</div>
			<br><br>

		</div>
	</section><!-- End Clients Section -->



	<!-- ======= Tabs 1 Section ======= -->
	<section class="tabs section-bg adark1">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-6 col1">
					<div class="section-title">
						<h4>Gerenciamento de leituras</h4>
						<hr class="bar"><br>
						<p>O Agillis gerencia por completo todas as fases do processo. Desde a geração da leitura até a atualização dos dados da conta no sistema gestor da empresa.</p>
					</div>
				</div>
				<div class="col-lg-6 col2">
					<img src="<?php echo SITEPATH; ?>assets/img/pages/laptop3.png" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section><!-- End Tabs Section -->



	<!-- ======= Tabs 2 Section ======= -->
	<section class="tabs section-bg alight">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-6 col1">
					<img src="<?php echo SITEPATH; ?>assets/img/pages/laptop4.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 col2">
					<div class="section-title">
						<h4>Fotos de leituras e concorrências</h4>
						<hr class="bar"><br>
						<p>Com o Agillis você tira fotos das leituras e ocorrências de campo, dando transparência ao processo de obtenção de leituras e faturamento.</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Tabs Section -->


	<!-- ======= Tabs 3 Section ======= -->
	<section class="tabs section-bg adetail">
		<div class="container" data-aos="fade-up">

			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-4 col">
					<i class="ri-layout-2-line"></i><br><br><br>
					<h4>Online ou Offline?</h4>
					<hr class="barr"><br>
					<p>O Agillis pode trabalhar on-line ou off-line, de acordo com a demanda da concessionária ou da prestadora de serviço. Sua finalidade é ser ágil e preciso.</p>
				</div>
				<div class="col-lg-4 col">
					<i class="ri-archive-line"></i><br><br><br>
					<h4>Tecnologia</h4>
					<hr class="barr"><br>
					<p>O Software tem embarcado em seu código fonte, tecnologia e conhecimento de mais de 30 anos de atuação no mercado de saneamento básico.</p>
				</div>
				<div class="col-lg-2"></div>
			</div>

			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-4 col">
					<i class="ri-computer-line"></i><br><br><br>
					<h4>Coletor, Smartphone ou PDA?</h4>
					<hr class="barr"><br>
					<p>Tanto faz! O Agillis pode ser utilizado em coletores de dados robustos, ou em smartphones e PDA’s. Também está homologado para as principais impressoras portáteis do mercado.</p>
				</div>
				<div class="col-lg-4 col">
					<i class="ri-calendar-check-fill"></i><br><br><br>
					<h4>Agilidade</h4>
					<hr class="barr"><br>
					<p>As rotas com os serviços (rol de leitura) são enviadas e executadas em tempo real ou remotamente. O leiturista tem acesso visual a toda a sua rota, possibilitando a escolha do melhor percurso no menor tempo.</p>
				</div>
				<div class="col-lg-2"></div>
			</div>

			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-4 col">
					<i class="ri-chat-3-line"></i><br><br><br>
					<h4>Mais do que coleta de leitura</h4>
					<hr class="barr"><br>
					<p>O Agillis age como um fiscal, apontando ocorrências, permitindo a tomada de ações preventivas e corretivas. Emissão de faturas de débitos, avisos em geral e  certidão anual de quitação de débitos também fazem parte das rotinas do software.</p>
				</div>
				<div class="col-lg-4 col">
					<i class="ri-home-line"></i><br><br><br>
					<h4>Mobilidade</h4>
					<hr class="barr"><br>
					<p>Gerenciamento on-line das equipes externas, facilitando a empresa mover-se para perto do cliente, diminuindogastos com deslocamentos, aumentando a eficiência  e fidelizando a marca.</p>
				</div>
				<div class="col-lg-2"></div>
			</div>

		</div>
	</section><!-- End Tabs Section -->


	<!-- ======= Tabs 4 Section ======= -->
	<section class="tabs section-bg adark2">
	</section><!-- End Tabs Section -->



</main><!-- End #main -->
<?php get_footer(); ?>