<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <video autoplay muted loop class="vdesk">
          <source src="<?php echo SITEPATH; ?>assets/img/slide/home-1.webm" type="video/webm">
        </video>
        <!--<video autoplay muted loop class="vmobi">
					<source src="<?php //echo SITEPATH; 
                        ?>assets/img/slide/home-1_mobile.webm" type="video/webm">
				</video>-->
        <div class="carousel-container">
          <div class="container">
            <h2 class="center animate__animated animate__fadeInDown">BLOG DA EOS</h2>
            <br>
            <hr class="bar"><br>
            <p class="Center center animate__animated animate__fadeInUp">Fonte de informação rica para empresas de saneamento básico.</p>
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

  <!-- ======= Blog Single Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

        <?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
          'order'   => 'DESC'
				);
				$loop = new WP_Query($args);
				while ($loop->have_posts()) {
					$loop->the_post();					
				?>

          <article class="entry entry-single">

            <h2 class="entry-title">
              <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title() ?></a>
            </h2>

            <div class="entry-content">
              <?php echo search_tag(get_the_content()); ?>
            </div>

          </article><!-- End blog entry -->

          <?php }
				wp_reset_postdata();
				?>

          <!--<div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>-->

        </div><!-- End blog entries list -->











        <div class="col-lg-4 sideb">

          <div class="sidebar">

            <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li>
              </ul>
            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Recent Posts</h3>
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

            </div><!-- End sidebar recent posts-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Single Section -->

</main><!-- End #main -->

<?php get_footer(); ?>