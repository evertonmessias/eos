<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
	<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

		<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

		<div class="carousel-inner" role="listbox">

			<!-- Slide 1 -->
			<div class="carousel-item active">
				<video autoplay muted loop class="vdesk">
					<source src="<?php echo SITEPATH; ?>assets/img/slide/1.webm" type="video/webm">
				</video>
				<!--<video autoplay muted loop class="vmobi">
					<source src="<?php //echo SITEPATH; 
									?>assets/img/slide/home-1_mobile.webm" type="video/webm">
				</video>-->
				<div class="carousel-container">
					<div class="container">
						<h2 class="center animate__animated animate__fadeInDown">NAUTILLUS</h2>
						<br>
						<hr class="bar"><br>
						<p class="Center center animate__animated animate__fadeInUp">Faça uma gestão comercial da<br>sua concessionária de àgua e esgoto.</p>
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
				<h2>Otimize a sua gestão, aumente sua<br>produtividade e reduza seus custos</h2>
				<br>
				<p class="center">Não é fácil ter visibilidade completa dos processos da área comercial de uma<br>
					empresa de saneamento. Com o Nautillus você realiza uma gestão segura e<br>
					profissional desde o controle dos clientes, consumos, faturamento, atendimento<br>
					ao cliente, cobrança e recebimentos. Tudo isso de forma simples e ágil.</p>
			</div>
			<br><br>

		</div>
	</section><!-- End Clients Section -->



	<!-- ======= Tabs 1 Section ======= -->
	<section class="tabs section-bg dark1">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-6 col1">
					<div class="section-title">
						<h4>Gestão automatizada</h4>
						<hr class="bar"><br>
						<p class="justify">O Nautillus automatiza a gestão da concessionária de forma intuitiva, por meio de sua estrutura inteligente e dinâmica possibilitando gerir clientes, consumos, cobrança, fiscalização, arrecadação, serviços, atendimento ao cliente, indicadores, contabilidade e jurídico.</p>
					</div>
				</div>
				<div class="col-lg-6 col2">
					<img src="<?php echo SITEPATH; ?>assets/img/pages/laptop1.png" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section><!-- End Tabs Section -->



	<!-- ======= Tabs 2 Section ======= -->
	<section class="tabs section-bg light">
		<img src="<?php echo SITEPATH; ?>assets/img/pages/laptop2.png" class="img-fluid" alt="">
		<div class="container" data-aos="fade-up">
			<div class="row">
				<div class="col-lg-6 col1">
				</div>
				<div class="col-lg-6 col2">
					<div class="section-title">
						<h4>Tenha uma gestão eficaz em<br>todos os seus processos</h4>
						<hr class="bar"><br>
						<p class="justify">Com o Nautillus você define as regras de funcionamento (metodologia), define quem implanta, controla e mantém (responsáveis), assegura a execução conforme os padrões (controle), previne e antecipa situações indesejadas (proatividade), identifica onde a prática é aplicada (abrangência), mostra desde quando e com que periodicidade está implantada a ação (continuidade), permite avaliar e melhorar os processos (refinamento), assegura a relação entre asáreas e com as partes interessadas, processos, práticas, estratégias e princípios (integração) e mede os benefícios trazidos (resultados).</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Tabs Section -->


	<!-- ======= Tabs 3 Section ======= -->
	<section class="tabs section-bg detail">
		<div class="container" data-aos="fade-up">

			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-4 col">
					<i class="ri-home-line"></i><br><br><br>
					<h4>Tecnologia Rebusta</h4>
					<hr class="barr"><br>
					<p class="justify">Software confiável e estável, 30 anos de mercado, sendo regularmente evoluído para melhor atender nossos clientes. Desenvolvido em arquitetura de multicamadas e com processo ágil de implementação.</p>
				</div>
				<div class="col-lg-4 col">
					<i class="ri-computer-line"></i><br><br><br>
					<h4>Know How</h4>
					<hr class="barr"><br>
					<p class="justify">Sabemos como e porque fazer, isso tonar a solução uma ferramenta especializada e inovadora, capaz de aumentar consideravelmente a eficácia dos processos.</p>
				</div>
				<div class="col-lg-2"></div>
			</div>

			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-4 col">
					<i class="ri-archive-line"></i><br><br><br>
					<h4>Gestão de Informação</h4>
					<hr class="barr"><br>
					<p class="justify">Visibilidade de informações. Saiba com exatidão dados cruciais para o seu negócio. Dessa forma, planeje com mais assertividade e alcance maior performance.</p>
				</div>
				<div class="col-lg-4 col">
					<i class="ri-calendar-check-fill"></i><br><br><br>
					<h4>Informações Compartilhadas</h4>
					<hr class="barr"><br>
					<p class="justify">Compartilhe informações entre sua equipe de maneira rápida e automatizada. Reduzindo custos e simplificando os processos.</p>
				</div>
				<div class="col-lg-2"></div>
			</div>

			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-4 col">
					<i class="ri-chat-3-line"></i><br><br><br>
					<h4>Interações</h4>
					<hr class="barr"><br>
					<p class="justify">Fácil integração a outros sistemas, por intermédio de componentes Web Service ou por rotinas desenvolvidas para este fim.</p>
				</div>
				<div class="col-lg-4 col">
					<i class="ri-layout-2-line"></i><br><br><br>
					<h4>100% costumizável</h4>
					<hr class="barr"><br>
					<p class="justify">Você pode personalizar o sistema com os relatórios e rotinas que mais se adequam ao seu uso. Aumentando assim sua produtividade e melhorando a usabilidade.</p>
				</div>
				<div class="col-lg-2"></div>
			</div>

		</div>
	</section><!-- End Tabs Section -->


	<!-- ======= Tabs 4 Section ======= -->
	<section class="tabs section-bg dark2">
	</section><!-- End Tabs Section -->



</main><!-- End #main -->
<?php get_footer(); ?>