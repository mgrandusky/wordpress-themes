<?php
/*
Template Name Posts: Past Winners
*/
?>
	
<?php get_header(); ?>
        <section id="main" class="cf">
            <div id="content">
                <article class="entry page">
                    <?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); 
                            //
                            ?>
                            <h2 class="entry-title"><?php the_title(); ?></h2>
				<?php $thumb_id = get_post_thumbnail_id(); ?>
				<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
				<?php $thumb_url = $thumb_url_array[0]; ?>
				<p><?php if($thumb_url != "http://www.icff.com/wp-content/uploads/2015/04/default.png"){ ?><img src="<?php echo $thumb_url ?>" alt="" class="featured"><?php } ?></p>
                            <?php
                            // Post Content here
				
                            the_content();
                            //
                        } // end while
                    } // end if
                    ?>
                </article>
            </div>
            <?php get_sidebar(); ?>
        </section>
<div id="ewinners-home" class="cf">


        <div class="cf">
<h2>Past Winners</h2>
	<section class="selectyear" style="float:right;margin-top:-75px;width:295px;color:#fff;margin-right:0px;">YEAR<br>
<?php
if ($tags = get_tags( array('order' => 'DESC') )){
		echo '<select name="tag" id="tag" class="postform">';
		echo '<option value="all">All Years</option>';
		foreach ($tags as $tag)
		{
			echo '<option value="'.$tag->slug.'">'.$tag->name.'</option>';
		}
		echo '</select> ';
}
?>
<script type="text/javascript">
 $( document ).ready(function() {
        var dropCat = document.getElementById("cat");
        var dropTag = document.getElementById("tag");
        var tagname = $('#tag').val();
            var catname = $('#cat').val();
        if(tagname == 'all' && catname == "37"){

                $('#ewinners-home div div').show();
                $('#ewinners-home div div').addClass('visible');
		var x = 1; 
		$('.visible').each(function(){
		if (x%4 == 0){
		$(this).addClass('end');
		}
		console.log(x);
		x++;
	});

            } 
        function onChange() {
            var tagname = $('#tag').val();
            var catname = $('#cat').val();
            // var all = tagname+catname;
            $('#ewinners-home div div').removeClass('end');
            if(tagname == 'all' && catname == "37"){

                $('#ewinners-home div div').show();
                $('#ewinners-home div div').addClass('visible');
		var x = 1; 
		$('.visible').each(function(){
		if (x%4 == 0){
		$(this).addClass('end');
		}
		console.log(x);
		x++;
	});

            } else if(tagname == 'all'){
                $('.' + catname).show();
                $('#ewinners-home div div').not('.' + catname ).hide();
                $('.' + catname).addClass('visible');
                $('#ewinners-home div div').not('.' + catname ).removeClass('visible');
		var x = 1; 
		$('.visible').each(function(){
		if (x%4 == 0){
		$(this).addClass('end');
		}
		console.log(x);
		x++;
	});

            } else if(catname == '37'){
                $('.' + tagname).show();
                $('#ewinners-home div div').not('.' + tagname ).hide();
                $('.' + tagname).addClass('visible');
                $('#ewinners-home div div').not('.' + tagname ).removeClass('visible');
		var x = 1; 
		$('.visible').each(function(){
		if (x%4 == 0){
		$(this).addClass('end');
		}
		console.log(x);
		x++;
	});

            }else{
                $('#ewinners-home div div').not('.' + catname + '.' + tagname).hide();
                $('.' + catname +'.' + tagname).show();
                $('#ewinners-home div div').not('.' + catname + '.' + tagname).removeClass('visible');
                $('.' + catname +'.' + tagname).addClass('visible');
		var x = 1; 
		$('.visible').each(function(){
		if (x%4 == 0){
		$(this).addClass('end');
		}
		console.log(x);
		x++;
	});
            }

            console.log('.' + catname + '.' + tagname);
	
	
        }
        dropCat.onchange = onChange;
        dropTag.onchange = onChange;
    });
</script>

</section>
<section class="selectaward" style="float:right;margin-top:-75px;width:295px;color:#fff;margin-right:320px;">AWARD<br>

<select name='cat' id='cat' class='postform' >
 <option value="37">All Awards</option> 
 <?php 
  $categories = get_categories('child_of=1'); 
  foreach ($categories as $category) {
  	$option = '<option value="'.$category->cat_ID .'">';
	$option .= $category->cat_name;
	$option .= '</option>';
	echo $option;
  }
 ?>
</select>

<script type="text/javascript">
		$( document ).ready(function() {

});
		<!--
		/* var dropdown = document.getElementById("cat");
		function onCatChange() {
			
			if($('#cat').val() == '16'){
				$('.16').show();
				$('.12').hide();
				$('.22').hide();
				$('.8').hide();
			}
			if($('#cat').val() == '12'){
				$('.16').hide();
				$('.12').show();
				$('.22').hide();
				$('.8').hide();
			}
			if($('#cat').val() == '22'){
				$('.16').hide();
				$('.12').hide();
				$('.22').show();
				$('.8').hide();
			}
			if($('#cat').val() == '8'){
				$('.16').hide();
				$('.12').hide();
				$('.22').hide();
				$('.8').show();
			}
			 
		
		}
	
		dropdown.onchange = onCatChange;*/
				-->
			</script>

</section>
          
		<?php $args = array( 'post_type' => 'exhibitor_winner', 'posts_per_page' => -1,'order' => 'DESC' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $thumb_id = get_post_thumbnail_id(); ?>
					<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); ?>
					<?php $thumb_url = $thumb_url_array[0]; ?>
					<?php $category = get_the_category( $custompost ); ?>
					<?php $tag_ids = wp_get_post_tags( $post->ID ); ?>
					<div class="<?php echo $category[0]->term_id; ?> <?php echo $tag_ids[0]->name; ?> visible">
						<a href="<?= get_post_meta($post->ID, "winner_url", true); ?>" target="_blank"><img src="<?php echo $thumb_url ?>" alt=""></a>
					<hr style="border-top:1px solid #fff;">
					<p><span style="font-size:14px;text-transform:uppercase;color:#888888;"><?php echo $category[0]->cat_name; ?> <?php echo $tag_ids[0]->name; ?></span><br>
                    	<a href="<?= get_post_meta($post->ID, "winner_url", true); ?>" target="_blank"><?php the_title() ?></a></p>
          
					</div>
				<?php endwhile; ?>

		
	</div>
</div>
<?php get_footer(); ?>