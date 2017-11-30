<?php 
/** 
 * Template Name: Contact Template */ 
?>
<?php get_header(); ?>
<div class="container" id="main">
  <div class="fluid-width">
    <div class="inner-block row">
      <section>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
        <h1 class="header top row">Contact Us</h1>
        <section class="tenth-width row">
        	<h2>Editorial</h2>
            <div class="flex-parent start alignStart contact-us">
		<?php $editorial_listings = get_field('editorials'); ?>
		<?php if($editorial_listings): ?>
		<?php foreach ($editorial_listings as $editorial_listing) { ?>
			<?php if($editorial_listing['photo']){ ?>
	    	       		<p><img src="<?php echo $editorial_listing['photo']; ?>" border="0"/><br>
			<?php }else{ ?>
				<p><img src="<?php echo get_template_directory_uri(); ?>/images/structural-images/contact-us-placeholder.jpg" border="0"/><br>
			<?php } ?>
			<?php echo $editorial_listing['name']; ?><br/>
			<strong><?php echo $editorial_listing['title']; ?></strong><br/>
			<a href="mailto:<?php echo $editorial_listing['email']; ?>">Email</a>
			</p> 
		<?php } ?>
		<?php endif; ?>                                                                       
            </div>
		<hr>            
        </section>
        
		<section class="tenth-width row">
        	<h2>Advertising</h2>
            <div class="flex-parent start alignStart contact-us">
		<?php $advertising_listings = get_field('advertising'); ?>
		<?php if($advertising_listings): ?>
		<?php foreach ($advertising_listings as $advertising_listing) { ?>
			<?php if($advertising_listing['photo']){ ?>
	    	       		<p><img src="<?php echo $advertising_listing['photo']; ?>" border="0"/><br>
			<?php }else{ ?>
				<p><img src="<?php echo get_template_directory_uri(); ?>/images/structural-images/contact-us-placeholder.jpg" border="0"/><br>
			<?php } ?>
			<?php echo $advertising_listing['name']; ?><br/>
			<strong><?php echo $advertising_listing['title']; ?></strong><br/>
			<a href="mailto:<?php echo $advertising_listing['email']; ?>">Email</a>
			</p> 
		<?php } ?>
		<?php endif; ?>                                                               
            </div>
			<hr>                
        </section>        
        
		<section class="tenth-width row">
        <div class="open-text">
		<?php the_field('content'); ?>
        </div>            
            <hr>
        </section>
        
        <section class="tenth-width row">
        	<h2>KBIS</h2>
            <div class="flex-parent start alignStart contact-us">
		<?php $kbis_listings = get_field('kbis'); ?>
		<?php if($kbis_listings): ?>
		<?php foreach ($kbis_listings as $kbis_listing) { ?>
			<?php if($kbis_listing['photo']){ ?>
	    	       		<p><img src="<?php echo $kbis_listing['photo']; ?>" border="0"/><br>
			<?php }else{ ?>
				<p><img src="<?php echo get_template_directory_uri(); ?>/images/structural-images/contact-us-placeholder.jpg" border="0"/><br>
			<?php } ?>
			<?php echo $kbis_listing['name']; ?><br/>
			<strong><?php echo $kbis_listing['title']; ?></strong><br/>
			<a href="mailto:<?php echo $kbis_listing['email']; ?>">Email</a>
			</p> 
		<?php } ?>
		<?php endif; ?>                                                               
            </div>
	<?php endwhile; ?>
	<?php endif; ?>
        </section>
        
      </section>
    </div>
  </div>
		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>