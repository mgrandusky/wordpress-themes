<?php

/*

Template Name Posts: Photo and Video

*/

?>

<?php get_header(); ?>


<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

<h2>Photos</h2>

 <div id="tabs" class="clearfix">            
         <h5><a href="javascript:void(0);">Outdoor Demo</a></h5>
          <a href="javascript:void(0);" class="gallery-toggle"></a>
          
          <ul class="tab-list clearfix">
		<?php $gallery_images = get_field('photo_gallery'); ?>
		<?php if($gallery_images): ?>
		<?php foreach ($gallery_images as $gallery_image) 
			{ ?>
<?php  echo $gallery_image['title']; ?>
				<li><a href="#tab-<?php  echo $gallery_image['rs_id']; ?>" alt="<?php  echo $gallery_image['gallery_name']; ?>"><?php  echo $gallery_image['gallery_name']; ?></a></li>
				<?php 
			} ?>
		<?php endif; ?>
         </ul>              
  
  <?php $gallery_images = get_field('photo_gallery'); ?>
		<?php if($gallery_images): ?>
		<?php foreach ($gallery_images as $gallery_image) 
			{ ?>
          <div id="tab-<?php  echo $gallery_image['rs_id']; ?>" class="tab-box">            

              <?php echo get_new_royalslider($gallery_image['rs_id']); ?>
            </div>
<?php 
			} ?>
		<?php endif; ?>
          

          
		</div> 
        
        
<script>
	$(function() {
	$( "#tabs" ).css("opacity", 0); 
    		 setTimeout(function(){ $( "#tabs" ).tabs();$( "#tabs" ).css("opacity", 1); }, 300);
	});
</script>
<h2 style="margin-top:45px;padding-bottom:0px;">Videos</h2>
<style>.videogallery.nav-outer .main-navigation { background: #fff; }</style>
<br clear="all" /><?php echo do_shortcode('[videogallery id="example_youtube_channel"]'); ?>
			</section>

	      </article>

	    </div>

<script>
$('body').addClass('photos-videos inner');
$('document').ready(function(){

}); 
</script>



	   		

			<?php get_sidebar(); ?>


</div>
<style type="text/css">
  .contain{
    width: 100%;
    min-height: 10px;
    background-color: #000;
  }
  .contain .rsGCaption{
    font-size: 16px;    
  }
</style> 

<?php get_footer(); ?>