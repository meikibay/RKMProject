<?php get_header();?>
<!--Content Overlaping the Hero Image with Map, Adress and Schedule
			<a target="_blank" href="<?php wp_get_attachment_url()?> schedule-2" class="button is-light is-medium">
				Our Schedule
			</a>


		<video autoplay="true" muted="true" loop="true" controls="true" type="video/mp4" src="https://www.youtube.com/watch?v=z2RYB8MFY2o&feature=youtu.be"></video>
		<section "container is-fullhd">
			<div class="columns">
				<div class="column is-half">
						Sample Text
					<div>
				<div class="column"><img src="<?php echo get_template_directory_uri(); ?>/img/.png" id="maplocation">
				</div>
			</div>
		</section>
	<section "container is-fullhd">
		<div class="columns">
			<div class="column is-half">
		    	<img src="<?php echo get_template_directory_uri(); ?>/img/pablo.jpg">
			<div class="column">
				Sample text 2
			</div>
		</div>
		</div>
	</section>
	-->

	<section class="hero is-large">
		<video autoplay muted loop type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/video/rental.mp4"></video>
	</section>


	<section class="3col">
		<div class="columns">
			<div class="column is-half has-text-centered">
				<h2>Who we are</h2>
				<a class="button is-danger">Read more about me</a>
			</div>
			<div class="column is-half">
				<img src="http://via.placeholder.com/350x200" alt="" class ="tri">
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-half">
				<img src="http://via.placeholder.com/350x200" alt="" class ="tri">
			</div>
			<div class="column is-half has-text-centered">
				<h3>Who am I</h3>
					<a class="button is-danger">about this</a>
			</div>
		</div>
		<div class="columns is-centered">
			<div class="column is-half has-text-centered">
				<h3>Does this work</h3>
					<a class="button is-danger">about another thing</a>
			</div>
			<div class="column is-half">
				<img src="http://via.placeholder.com/350x200" alt="" class ="tri">
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

	<section class="">
		<div class="columns">
			<div class="column is-half">
				<img src="http://via.placeholder.com/350x200" alt="" class ="tri">
			</div>
			<div class="column is-half has-text-centered">
				<h2>Who we are</h2>
				<a class="button is-danger">Read more about me</a>
			</div>
		</div>
	</section>




<!--JavaScript for the slider (hiding & displaying next image)
	<script type="text/javascript">
		var slides = document.querySelectorAll('#slides .slide');
		var currentSlide = 0;
		var slideInterval = setInterval(nextSlide,2500);

		function nextSlide(){
		slides[currentSlide].className = 'slide';
		currentSlide = (currentSlide+1)%slides.length;
		slides[currentSlide].className = 'slide showing';
		}
	</script>
-->

<?php get_footer(); ?>
