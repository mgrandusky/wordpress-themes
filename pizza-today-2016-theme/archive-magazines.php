<?php get_header(); ?>


 <div class="container" id="main">
  <div class="fluid-width">
    <div class="inner-block row">
      <section class="full-width twelve row">
        <h1 class="header"><a href="#">PREVIOUS ISSUES</a></h1>
        <section class="twelve columns row magazine">
          <div id="tabs" class="divider clearfix">
          	<div class="row">
            	
	            <div class="mag-rightCol">
                <h5 style="float:right">
                	<a href="javascript:void(0);">BROWSE BY YEAR </a></h5>
	    	        <a href="javascript:void(0);" class="ad-opps-toggle"></a><i class="fa fa-chevron-down" aria-hidden="true" style="position:absolute;right:6px;top:25px;"></i>
                </div>
        	    <ul class="clearfix addopps">
                  <li><a href="#2016" alt="2016">2016</a></li>
            	  <li><a href="#2015" alt="2015">2015</a></li>
	          <li><a href="#2014" alt="2014">2014</a></li>
    	          <li><a href="#2013" alt="2013">2013</a></li>
		  <li><a href="#2012" alt="2012">2012</a></li>
		  <li><a href="#2011" alt="2011">2011</a></li>
		  <li><a href="#2010" alt="2010">2010</a></li>
		  <li><a href="#2009" alt="2009">2009</a></li>
        	    </ul>
            </div>
            
            <div class="tabcontent">
              <div id="2016">
                <h4 class="tabHead">2016</h4>
<hr>
                <div class="section-row">
                  <section class="flex-parent start twelve alignStart row" id="gallery-list">

        <?php

$args = array(
	'posts_per_page' => 200,
	'post_type' => 'magazines', 


	
);
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
$year = "2016";
substr($dynamicstring, -7);
?>
			<?php if(substr(get_the_title(), -4) == "2016") : ?>
                    <article class="row three columns" style="display: block;">
		      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                      <p class="date row" style="text-align:center;color:#111;"><a href="<?php the_permalink(); ?>" style="text-align:center;color:#111;"><?php the_title(); ?></a></p>
		    </article>
			<?php endif; ?>
<?php endwhile; ?>


                  </section>
                </div>
              </div>
              <div id="2015">
                <h4 class="tabHead">2015</h4>
<hr>
                <div class="section-row">
                  <section class="flex-parent start twelve alignStart row" id="gallery-list">

        <?php

$args = array(
	'posts_per_page' => 200,
	'post_type' => 'magazines', 


	
);
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
$year = "2016";
substr($dynamicstring, -7);
?>
			<?php if(substr(get_the_title(), -4) == "2015") : ?>
                    <article class="row three columns" style="display: block;">
		      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                      <p class="date row" style="text-align:center;color:#111;"><a href="<?php the_permalink(); ?>" style="text-align:center;color:#111;"><?php the_title(); ?></a></p>
		    </article>
			<?php endif; ?>
<?php endwhile; ?>


                  </section>
                </div>
              </div>
                            <div id="2014">
                <h4 class="tabHead">2014</h4>
<hr>
                <div class="section-row">
                  <section class="flex-parent start twelve alignStart row" id="gallery-list">

        <?php

$args = array(
	'posts_per_page' => 200,
	'post_type' => 'magazines', 


	
);
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
$year = "2016";
substr($dynamicstring, -7);
?>
			<?php if(substr(get_the_title(), -4) == "2014") : ?>
                    <article class="row three columns" style="display: block;">
		      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                      <p class="date row" style="text-align:center;color:#111;"><a href="<?php the_permalink(); ?>" style="text-align:center;color:#111;"><?php the_title(); ?></a></p>
		    </article>
			<?php endif; ?>
<?php endwhile; ?>


                  </section>
                </div>
              </div>
              <div id="2013">
                <h4 class="tabHead">2013</h4>
<hr>
                <div class="section-row">
                  <section class="flex-parent start twelve alignStart row" id="gallery-list">

        <?php

$args = array(
	'posts_per_page' => 200,
	'post_type' => 'magazines', 


	
);
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
$year = "2016";
substr($dynamicstring, -7);
?>
			<?php if(substr(get_the_title(), -4) == "2013") : ?>
                    <article class="row three columns" style="display: block;">
		      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                      <p class="date row" style="text-align:center;color:#111;"><a href="<?php the_permalink(); ?>" style="text-align:center;color:#111;"><?php the_title(); ?></a></p>
		    </article>
			<?php endif; ?>
<?php endwhile; ?>


                  </section>
                </div>
              </div>
              <div id="2012">
                <h4 class="tabHead">2012</h4>
<hr>
                <div class="section-row">
                  <section class="flex-parent start twelve alignStart row" id="gallery-list">

        <?php

$args = array(
	'posts_per_page' => 200,
	'post_type' => 'magazines', 


	
);
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
$year = "2016";
substr($dynamicstring, -7);
?>
			<?php if(substr(get_the_title(), -4) == "2012") : ?>
                    <article class="row three columns" style="display: block;">
		      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                      <p class="date row" style="text-align:center;color:#111;"><a href="<?php the_permalink(); ?>" style="text-align:center;color:#111;"><?php the_title(); ?></a></p>
		    </article>
			<?php endif; ?>
<?php endwhile; ?>


                  </section>
                </div>
              </div>
              <div id="2011">
                <h4 class="tabHead">2011</h4>
<hr>
                <div class="section-row">
                  <section class="flex-parent start twelve alignStart row" id="gallery-list">

        <?php

$args = array(
	'posts_per_page' => 200,
	'post_type' => 'magazines', 


	
);
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
$year = "2016";
substr($dynamicstring, -7);
?>
			<?php if(substr(get_the_title(), -4) == "2011") : ?>
                    <article class="row three columns" style="display: block;">
		      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                      <p class="date row" style="text-align:center;color:#111;"><a href="<?php the_permalink(); ?>" style="text-align:center;color:#111;"><?php the_title(); ?></a></p>
		    </article>
			<?php endif; ?>
<?php endwhile; ?>


                  </section>
                </div>
              </div>
              <div id="2010">
                <h4 class="tabHead">2010</h4>
<hr>
                <div class="section-row">
                  <section class="flex-parent start twelve alignStart row" id="gallery-list">

        <?php

$args = array(
	'posts_per_page' => 200,
	'post_type' => 'magazines', 


	
);
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
$year = "2016";
substr($dynamicstring, -7);
?>
			<?php if(substr(get_the_title(), -4) == "2010") : ?>
                    <article class="row three columns" style="display: block;">
		      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                      <p class="date row" style="text-align:center;color:#111;"><a href="<?php the_permalink(); ?>" style="text-align:center;color:#111;"><?php the_title(); ?></a></p>
		    </article>
			<?php endif; ?>
<?php endwhile; ?>


                  </section>
                </div>
              </div>
              <div id="2009">
                <h4 class="tabHead">2009</h4>
<hr>
                <div class="section-row">
                  <section class="flex-parent start twelve alignStart row" id="gallery-list">

        <?php

$args = array(
	'posts_per_page' => 200,
	'post_type' => 'magazines', 


	
);
$query = new WP_Query( $args );
while ( $query->have_posts() ) : $query->the_post();
$year = "2016";
substr($dynamicstring, -7);
?>
			<?php if(substr(get_the_title(), -4) == "2009") : ?>
                    <article class="row three columns" style="display: block;">
		      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                      <p class="date row" style="text-align:center;color:#111;"><a href="<?php the_permalink(); ?>" style="text-align:center;color:#111;"><?php the_title(); ?></a></p>
		    </article>
			<?php endif; ?>
<?php endwhile; ?>


                  </section>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
    </div>
  </div>
<?php get_sidebar(); ?>


  
  <!-- #main --> 

</div>

<!-- #main-container -->




<?php get_footer(); ?>