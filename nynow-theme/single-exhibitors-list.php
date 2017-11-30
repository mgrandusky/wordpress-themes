<?php
/*
Template Name Posts: Exhibitors List
 */
?>
<?php get_header();?>
<div id="main" class="cf">
    <div id="content">
        <article class="hentry">
<?php if (have_posts()):?>
			<?php while (have_posts()):the_post();?>

				<h2 class="entry-title"><?php the_title();?></h2>
<?php the_content();?>

<?php endwhile;?>
			<?php endif;?>

				
<!-- BEGIN: GOEXPO EXHIBITORS -->
<script type="text/javascript">
geIframeContainer = 'http://' + document.domain + '/GoExpoIframeContainer.html';
geIframeContents = 'https%3A%2F%2Fn1a.goexposoftware.com%2Fevents%2Fnyns16%2FgoExpo%2Fpublic%2FlistExhibitorsFrame.php';
geIframeRoot = 'https://n1a.goexposoftware.com/events/nyns16/goExpo/public';
geFfRoot = 'https://n1a.goexposoftware.com/events/nyns16/FORMfields';
geShowDirRoot = 'https://n1a.goexposoftware.com/events/nyns16/goExpo/shows/dev';
geIframeUrl = geIframeContainer + '?r=' + geIframeRoot + '&amp;c=' + geIframeContents + '&amp;s=' + geShowDirRoot + '&amp;f=' + geFfRoot;
</script>
<script type="text/javascript" src="https://n1a.goexposoftware.com/events/nyns16/goExpo/public/printIframeNew.js">
</script>
<!-- END: GOEXPO EXHIBITORS -->

					

		</article>
	</div>
<?php get_sidebar();?>
</div>
<?php get_footer();?>