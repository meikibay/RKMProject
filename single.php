<?php get_header();?>

<section class="content has-text-centered full-hd">
	<h1><?php the_title();?></h1>
	<?php the_post_thumbnail('medium'); ?>
	<br>
	<br>
	<?php
	the_post();
	the_content();
	?>
</section>

<?php get_footer(); ?>
