<?php get_header(); ?>
    <div style="background-color: #fff;"><h3 class="container p-title"><?php the_title(); ?></h3></div>
    <div id="main" class="container">
        <?php if (have_posts()) : ?>
    <div id="content" class="col-md-8 col-sm-7">
        <?php /*
            // $thumb_id = get_post_thumbnail_id(); 
            // $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); 
            // $thumb_url = $thumb_url_array[0]; 
        ?>
        <!-- <?php #if($thumb_url != "http://www.pizzaexpo.com/wp-includes/images/media/default.png"): ?>
            <img class="ft-img" src="<?php #echo $thumb_url ?>" alt="">
        <?php #endif; ?> -->
        <?php */
        if ( has_post_thumbnail() ) : 
            the_post_thumbnail(); 
        endif; ?>
        <article class="entry">
          	<?php #if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
    <?php if(is_single('EDUCATION SCHEDULE')){ ?>
      <style> .entry{ height:2300px; } </style>
      <center><!-- BEGIN: GOEXPO SEMINARS -->
      <script type="text/javascript">
      geIframeContainer = 'http://' + document.domain + '/GoExpoIframeContainer.html';
      geIframeContents = 'https%3A%2F%2Fn1b.goexposoftware.com%2Fevents%2Fpe16%2FgoExpo%2Fpublic%2FlistSeminarsFrame.php';
      geIframeRoot = 'https://n1b.goexposoftware.com/events/pe16/goExpo/public';
      geFfRoot = 'https://n1b.goexposoftware.com/events/pe16/FORMfields';
      geShowDirRoot = 'https://n1b.goexposoftware.com/events/pe16/goExpo/shows/dev';
      geIframeUrl = geIframeContainer + '?r=' + geIframeRoot + '&amp;c=' + geIframeContents + '&amp;s=' + geShowDirRoot + '&amp;f=' + geFfRoot;
      </script>
      <script type="text/javascript" src="https://n1b.goexposoftware.com/events/pe16/goExpo/public/printIframeNew.js">
      </script>
      <!-- END: GOEXPO SEMINARS --></center>
    <?php } ?>
	      </article>
	    </div>
	    <div id="sidebar" class="col-md-4 col-sm-5">		
			<?php get_sidebar(); ?>
		</div>
</div>
<?php get_footer(); ?>