<?php
/*
Template Name Posts: Promotional Opportunities
*/
?>
	
<?php get_header(); ?>

<script>jQuery('body').addClass('advertising-sponsoship');</script>
<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>
        <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
            <h1 class="header"><?php the_title(); ?></h1>
			<?php the_content(); ?>
            <div id="tabs">
                <ul class="addopps clearfix">
                    <li><a href="#tabs-po-1">Pre-Show</a></li>
                    <li><a href="#tabs-po-2">Onsite</a></li>
                    <li><a href="#tabs-po-3">Digital</a></li>
                </ul>
				
			
                <div id="tabs-po-1">
					<h3 style="font-size:1.5em; font-weight: 400; margin:32px 0;">Pre-Show Opportunities</h3>
                    <?php $args = array( 'post_type' => 'promo-opp', 'posts_per_page' => 100);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
	          				<?php if(get_field('opportunity') == 'Pre-Show'){ ?>
                            
	          				<div class="sponsor-type cf">
	                            <div>
									<b><?php the_title(); ?> - <span style="color:#c8382c"><?php echo the_field('cost'); ?></span></b>
	                                <?php if(get_field('image')){ ?><img src="<?php echo the_field('image'); ?>" style="float:right; margin:10px 0px 10px 10px;"><?php } ?><?php echo the_field('content'); ?>
	                                
	                            </div>
                                <br clear="all" />
                                <hr />
							</div>
			                <?php } ?>
			                
					<?php endwhile; ?>
				</div>
                <div id="tabs-po-2">
					<h3 style="font-size:1.5em; font-weight: 400; margin:32px 0;">Onsite Opportunities</h3>
                    <?php $args = array( 'post_type' => 'promo-opp', 'posts_per_page' => 100);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
	          				<?php if(get_field('opportunity') == 'Onsite'){ ?>
                            
	          				<div class="sponsor-type cf">
	                            <div>
									<b><?php the_title(); ?> - <span style="color:#c8382c"><?php echo the_field('cost'); ?></span></b>
	                                <?php if(get_field('image')){ ?><img src="<?php echo the_field('image'); ?>" style="float:right; margin:10px 0px 10px 10px;"><?php } ?><?php echo the_field('content'); ?>
	                                
	                            </div>
                                <br clear="all" />
                                <hr />
							</div>
			                <?php } ?>
			                
					<?php endwhile; ?>
                </div>
                <div id="tabs-po-3">
                   <h3 style="font-size:1.5em; font-weight: 400; margin:32px 0;">Digital Opportunities</h3>
                    <?php $args = array( 'post_type' => 'promo-opp', 'posts_per_page' => 100);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
	          				<?php if(get_field('opportunity') == 'Digital'){ ?>
                            
	          				<div class="sponsor-type cf">
	                            <div>
									<b><?php the_title(); ?> - <span style="color:#c8382c"><?php echo the_field('cost'); ?></span></b>
	                              <?php if(get_field('image')){ ?><img src="<?php echo the_field('image'); ?>" style="float:right; margin:10px 0px 10px 10px;"><?php } ?><?php echo the_field('content'); ?>
	                                
	                            </div>
                                <br clear="all" />
                                <hr />
							</div>
			                <?php } ?>
			                
					<?php endwhile; ?>
                </div>
            </div>
                                <?php endwhile; ?>

			<?php endif; ?>

				</section>

	      </article>

	    </div>





	   		

			<?php get_sidebar(); ?>


</div>

  <script>
        $(function() {
        $("#tabs").tabs();
        });

//Toggles top nav open and close on click
$(document).ready (function () {
    $('#tabs h6 a').click(function(){
        if ($('#tabs ul').hasClass('show')) {
            $('#tabs ul').removeClass('show');
            $('#tabs h6 a').removeClass('active');
            $('#tabs h6').removeClass('active');
        } else {
            $('#tabs ul').addClass('show');
            $('#tabs a').addClass('active');
            $('#tabs h6').addClass('active');
        }
    });
});		

</script> 

<?php get_footer(); ?>