
<?php get_header(); ?>
<script>jQuery('body').addClass('inner');</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section>
          	<?php if (have_posts()) : ?>
    			<?php while (have_posts()) : the_post(); ?>
        			<h1 class="header"><?php the_title(); ?></h1>
        			<?php the_content(); ?>
              <?php 
                    if(is_page('the-manifesto-for-change')) {
                        // The Query
                        $the_query = new WP_Query( array('post_type' => 'supporter', 'posts_per_page' => -1) );

                        // The Loop
                        if ( $the_query->have_posts() ) { ?>
                            <h3>Supporters</h3>
                            <?php while ( $the_query->have_posts() ) {
                                $the_query->the_post(); ?>
                                <div class="supporter">
                                    <?php if(get_the_title() != ""){ ?>
                                        <span><i>Name: <?php the_title() ?></i> </span><br>
                                    <?php }
                                    if(get_post_meta(get_the_ID(), 'zip_code', true) != ""){ 
                                     ?>
                                        <span><i>Zip Code: <?= get_post_meta(get_the_ID(), 'zip_code', true); ?></i> </span><br>
                                    <?php }
                                    if(get_post_meta(get_the_ID(), 'company_name', true) != ""){
                                     ?>
                                        <span><i>Company Name: <?= get_post_meta(get_the_ID(), 'company_name', true); ?></i> </span><br>
                                        <span><i>Comments: </i> </span>
                                    <?php } ?>
                                    <span><i><?php the_content(); ?></i> </span>

                                 </div> 
                                 <br>
                            <?php }
                        } else {
                            // no posts found
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();
                    }
                ?>                    
    			<?php endwhile; ?>
			<?php endif; ?>
			</section>
	      </article>
	    </div>
			<?php get_sidebar(); ?>
</div>
</div>
</div>
<?php get_footer(); ?>