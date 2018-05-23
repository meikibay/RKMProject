<?php get_header('special');?>

<section class="content has-text-centered full-hd">
	<h1><?php the_title();?></h1>

	<?php 
	the_post();
	the_content();
	?>
	
</section>

<?php get_footer(); ?>