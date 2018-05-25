<?php get_header();?>
<!--Content Overlaping the Hero Image with Map, Adress and Schedule
			<a target="_blank" href="<?php wp_get_attachment_url()?> schedule-2" class="button is-light is-medium">
				Our Schedule
			</a>
-->

		</section>
		<section>
			  <video autoplay="true" muted="true" loop="true" controls="true" type="video/mp4" src="https://www.youtube.com/watch?v=z2RYB8MFY2o&feature=youtu.be" ></video>
			<img src="<?php echo get_template_directory_uri(); ?>/img/.png" id="maplocation">
		</section>

    			<img src="<?php echo get_template_directory_uri(); ?>/img/.jpg">


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
