<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package extremetechnologies
 */
?>
<div class="home-prefooter">
	<div class="container">
		<h3 class="white">We are selective in who we work with. You should be, too. Are you top 20% in your field?</h3>
		<a href="/talent" class="button white">Join our Talent Network</a>
	</div>
</div>
<footer>
    <div class="footer">
        <div class="container">
			<div class="col-md-6">
				<a href="/"><img src="<?php bloginfo('template_directory');?>/img/footer-logo.png" class="logo" /></a>
				<ul>
				<?php
					$menu_name = "header";

						if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
							$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

							$menu_items = wp_get_nav_menu_items($menu->term_id);

							
							$menu_list = "";
							foreach ( (array) $menu_items as $key => $menu_item ) {
								$title = $menu_item->title;
								$url = $menu_item->url;
								$menu_list .="<li><a href=".$url.">".$title."</a></li>";
							}
						} else {
							$menu_list = '<li>Menu "' . $menu_name . '" not defined.</li>';
						}
						echo $menu_list;
				?>
				<!--<li><a href="#">Home</a></li>
					<li><a href="#">Our Approach</a></li>
			        <li><a href="#">Services</a></li>
			        <li><a href="#">Blog</a></li>
			        <li><a href="#">Talent Network</a></li>
			        <li><a href="#">Contact</a></li>-->
				</ul>
				<p class="copyright">&copy; <?php echo date("Y") ?> Extreme Technologies Inc. - Houston, Texas - All Rights Reserved.</p>
			</div>
			<div class="col-md-4">
				<h3 class="white bold"><a href="tel:281-293-7800">281.293.7800</a></h3>
				<p class="white bold">
					<a href="mailto:sales@extreme-technologies.com">sales@extreme-technologies.com</a>
						<br>
					<a href="mailto:recruiting@extreme-technologies.com">recruiting@extreme-technologies.com</a>
				</p>
			</div>
			<div class="col-lg-2">
				<a href="#" class="social-footer-google">Google+</a>
				<a href="#" class="social-footer-twitter">Twitter</a>
				<a href="#" class="social-footer-linkedin">Linkedin</a>
				<a href="#" class="social-footer-facebook">Facebook</a>
			</div>
        </div>     
    </div>
</footer>

<div class="footer-cta">
	<a href="/talent"><span>Join our</span><br>Talent Network</a>
</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<!-- Include for Slick -->
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick.min.js"></script>

	<!-- Initialize Slick -->
	<script type="text/javascript">
        $(document).ready(function(){
			$('.slickslider').slick({
				dots: true,
				arrow: true,
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 6000
			});
		});
    </script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>

 </body>
</html>