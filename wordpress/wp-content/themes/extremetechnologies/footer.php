<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package extremetechnologies
 */
?>
<footer>
    <div class="footer">
        <div class="container">
			<div class="col-md-6">
				<a href="#"><img src="<?php bloginfo('template_directory');?>/img/footer-logo.png" class="logo" /></a>
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
				<h3 class="white bold">281.293.7800</h3>
				<p class="white bold">
					<a href="mailto:sales@extreme-technologies.com">sales@extreme-technologies.com</a>
						<br>
					<a href="mailto:recruiting@extreme-technologies.com">recruiting@extreme-technologies.com</a>
				</p>
			</div>
			<div class="col-lg-2">
				<a href="#"><img src="<?php bloginfo('template_directory');?>/img/icon-google-white.png" class="social" />
				<a href="#"><img src="<?php bloginfo('template_directory');?>/img/icon-twitter-white.png" class="social" />
				<a href="#"><img src="<?php bloginfo('template_directory');?>/img/icon-linkedin-white.png" class="social" />
			</div>
        </div>     
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
</footer>
 </body>
</html>