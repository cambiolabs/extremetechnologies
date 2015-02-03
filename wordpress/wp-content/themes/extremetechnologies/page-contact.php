<?php 
/*
	Template Name:  Contact
*/
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="subhero subhero-contact">
				<div class="container">
					<div class="col-md-8">
						<h1><?php the_title(); ?></h1>
						<h3>Nestled under several 100-year-old oaks in a small town minutes away from the hubbub, but far enough away to breathe.</h3>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="col-md-8">
					<form>
						<div class="form-group">
							<input type="" class="form-control" id="name" name="name" placeholder="First & Last Name" value="" required>
						</div>
						<div class="form-group">
							<input type="" class="form-control" id="website" name="website" placeholder="Website" value="" required>
						</div>
						<div class="form-group">
							<input type="" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="" required>
						</div>
						<div class="form-group">
							<input type="" class="form-control" id="email" name="email" placeholder="Email Address" value="" required>
						</div>
						
						<div class="form-group">
							<textarea type="" class="form-control" id="" name="" placeholder="Message" value="" required></textarea>
						</div>
						
						<button type="submit" class="button orange" name="submit" id="submit" value="submit">Send</button>
					</form>			
				</div>
				<div class="col-md-4 center">
					<h2>Get in touch</h2>
					
					<img src="<?php bloginfo('template_directory');?>/img/icon-phone.png" class="contact-icon" />
					<p><a href="tel:281-293-7800">281.293.7800</a></p>
					
					<img src="<?php bloginfo('template_directory');?>/img/icon-mail.png" class="contact-icon" style="hmargin: 0 0 -5px -5px;" />
					<p><a href="mailto:sales@extreme-technologies.com">sales@extreme-technologies.com</a><br>
						<a href="mailto:recruiting@extreme-technologies.com">recruiting@extreme-technologies.com</a>
					</p>
					
					<img src="<?php bloginfo('template_directory');?>/img/icon-tree.png" class="contact-icon" style="margin: 10px 0 5px;" />
					<p>1411 Avenue A<br>Katy, TX 77493</p>
					<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; min-height:500px; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3462.4964408328015!2d-95.82163000000001!3d29.792199000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8641242ef1bfd633%3A0x83844619a15dad2f!2s1411+Avenue+A%2C+Katy%2C+TX+77493!5e0!3m2!1sen!2sus!4v1422914745002' width='600' height='450' frameborder='0' style='border:0'></iframe></div>
				</div>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
