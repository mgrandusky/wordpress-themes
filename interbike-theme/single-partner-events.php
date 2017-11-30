<?php

/*

Template Name Posts: Partner Events

*/

?>

<?php get_header(); ?>

<script>jQuery('body').addClass('contact-us');</script>
<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

          	<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post(); ?>
						<?php $args = array( 'post_type' => 'partner-events', 'posts_per_page' => 4);

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="event"><div style="width:40%;float:right;margin-top:30px;">
                                            <a href="<?php the_field('sign_up_link'); ?>" target="_blank"><img src="<?php the_field('image'); ?>" /></a>
                                            <?php if(get_field('sign_up_link')){ ?><a href="<?php the_field('sign_up_link'); ?>" target="_blank"><button class="red-btn lrg-fnt no-width" style="max-width:378px;margin-top:10px;width:100%;">Sign up for this event</button></a><?php } ?>
                                        </div>
                                        <div style="width:55%; float:left;margin-right:10px;">
                                            <?php if(get_field('subtitle')) { ?>
                                                <h2 style="margin-bottom:-15px;"><?php the_title(); ?></h2>
                                                <span style="margin-bottom:15px;"><i><?php the_field('subtitle'); ?></i></span>
                                                <h2></h2>
                                            <?php } else { ?>
                                            <h2><?php the_title(); ?></h2>
                    
                                            <?php } ?>
                                            <?php the_field('content'); ?>
                    
                                            <?php $sponsor_images = get_field('sponsor_images'); ?>
                                            <?php if($sponsor_images): ?>
                                            <i>Presented by</i><br />
                                            <?php foreach ($sponsor_images as $sponsor_image){ ?>
                                                <a href="<?php echo $sponsor_image['link']; ?>" target="_blank">
                                                    <img src="<?php echo $sponsor_image['image']; ?>" style="float: left;margin-bottom:10px;margin-right:10px;"/>
                                                </a>
                                            <?php } ?>
                                            <?php endif; ?>
                                        </div>
                                        <br clear="all" /></div>
                    <hr />                          
                <?php endwhile; ?>
                         <?php endwhile; ?>

			<?php endif; ?>

			</section>

	      </article>

	    </div>





	   		

			<?php get_sidebar(); ?>


</div>
<style type="text/css">
@media screen and (max-width: 1139px){.event > div{float: none !important;margin: auto;}
    .event > div:nth-of-type(1){
        width: 100% !important;
        min-width: 320px;
        margin-bottom: 15px;
    }
    .event > div:nth-of-type(2){
        width: 100% !important;
    }}
</style>
<?php get_footer(); ?>