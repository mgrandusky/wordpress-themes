<?php
/**
 * Template Name: Subscribe Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 ?>
<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
	<!--[if gt IE 8]><!-->
	<html class="no-js" lang="en">
	<!--<![endif]-->
	<head>

  	<!-- Basic Page Needs
  	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<title>Impressions Magazine | Homepage</title>
  	<meta name="description" content="">
  	<meta name="author" content="">

  	<!-- Mobile Specific Metas
  	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="apple-touch-icon" href="apple-touch-icon.png">
  	<!-- FONT
  	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


  	<!-- CSS
  	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">


  	<!-- Favicon
  	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />

  	<!-- JS
  	  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script src="https://use.fontawesome.com/7e1eb8de7c.js"></script>

  	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
      <header>
      <div class="brand container">
        <a href="<?php bloginfo('siteurl'); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/impressions_logo.png" alt=""></a>
        <div class="social">
          <a href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="<?php the_field('instagram', 'option'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="<?php the_field('linked_in', 'option'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
      </div>
      <nav>
        <div class="container" style="height:50px;">
		</div>
      </nav>
    </header>
  <main class="container">
    <div id="content" class="col-lg-12">
		<article>
			<section>

        	<?php if (have_posts()) : ?>
  					<?php while (have_posts()) : the_post(); ?>
  					
  						<?php the_content(); ?>
  					<?php endwhile; ?>
  				<?php endif; ?>

			</section>
		</article>
 	</div>

  </main>
  <footer>
    <div class="container" style="display: block;">
      <nav>
<span style="font-size:14px;color:#707070;">* Subscriptions are free to qualified professionals. The publisher reserves the right to limit the number of free subscriptions.<br><br>
            &copy; <?php echo date('Y'); ?> <a href="https://www.emeraldexpositions.com/" style="color: inherit;font-size:14px;">Emerald Expositions, LLC.</a> All Rights Reseved<br>
            <a href="<?php bloginfo('siteurl'); ?>/terms-of-use" style="font-size:14px;">Terms</a> | <a href="<?php bloginfo('siteurl'); ?>/privacy-policy" style="font-size:14px;">Privacy</a></span>

      </nav>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>