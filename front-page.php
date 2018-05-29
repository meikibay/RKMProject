<?php get_header();?>

	<section class="hero is-large">
		<video autoplay muted loop type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/video/rental.mp4"></video>
	</section>


	<section class="3col">
		<div class="columns">
			<div class="column is-half has-text-centered">
				<h2 class="title marg"> Equipment Available</h2>
				<a class="button is-danger">Rent what you need here!</a>
			</div>
			<div class="column is-half">
				<img src="<?php echo get_template_directory_uri(); ?>/img/studio.jpg" alt="" class ="tri">
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-half">
				<img src="<?php echo get_template_directory_uri(); ?>/img/pablo.jpg" alt="" class ="tri">
			</div>
			<div class="column is-half has-text-centered">
				<h3 class="title marg">Props and Puppets? We can make them!</h3>
					<a class="button is-danger">Check them out here!</a>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-half has-text-centered">
				<h3 class="title marg">We are creators!</h3>
					<a class="button is-danger">Have a Request?</a>
			</div>
			<div class="column is-half">
				<img src="<?php echo get_template_directory_uri(); ?>/img/makers.jpg" alt="" class ="tri">
			</div>
		</div>
	</section>


	<section class="hero is-medium is-dark">
	  <div class="hero-body has-text-centered">
	    <div class="container">
	      <h2 class="title">
	          What our clients have to say about us
	      </h2>
	      <h3 class="subtitle">
	        RKM was fantastic to work with. 100% Recommended.
	         - The Client
	      </h3>
	    </div>
	  </div>
	</section>

	<section>
		<div class="columns">
			<div class="column is-half has-text-centered container">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/who.png" alt="" class ="image duo">
					<div class="overlay">
						<div class="text">Who We Are</div>
					</div>
				</a>
			</div>
			<div class="column is-half has-text-centered container">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/what.png" alt="" class ="image duo">
					<div class="overlay">
						<div class="text">What We Do</div>
					</div>
				</a>
		</div>
	</section>


<?php get_footer(); ?>
