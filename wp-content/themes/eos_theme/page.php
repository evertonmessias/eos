<?php get_header(); ?>
<h1>&nbsp;</h1><h1>&nbsp;</h1><h1>&nbsp;</h1><h1>&nbsp;</h1><h1>&nbsp;</h1>
<?php

// PAGE

if ( have_posts() ) :

   while ( have_posts() ) : the_post(); ?>

		<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

<?php the_content() ?>

<?php endwhile;

else :

   echo '<p>There are no posts!</p>';

endif;

?>
<h1>&nbsp;</h1><h1>&nbsp;</h1><h1>&nbsp;</h1><h1>&nbsp;</h1><h1>&nbsp;</h1>
<?php get_footer(); ?>