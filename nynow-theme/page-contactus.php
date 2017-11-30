<?php 
/** 
 * Template Name: Contact Template */ 
?>
<?php get_header(); ?>
    <div id="main" class="cf">
        <div id="content" class="cf">
            <div style="padding-top:20px;"><h2 class="entry-title"><?php the_title(); ?></h2></div>
          <section class="body-content cf">
                <div class="cf">
						<?php echo the_field('top_content'); ?>
                        <?php
                            $contacts = get_field('contact_list'); 
                            $bottomContent = get_field('bottom_content'); 
                            $posttype = get_field('row_type_name'); 

                            if ($posttype) {
                            $args = array( 'post_type' =>  $posttype, 'posts_per_page' => 10, 'orderby' =>'menu_order', 'order' => 'ASC');
                            $loop = new WP_Query( $args );
                            $posts = array(); 
                            $unique_subcats = array(); 

                            foreach ($loop->get_posts() as $post) {
                                $posts[] = (array)$post;
                            }
                                while ( $loop->have_posts() ){ 
                                $loop->the_post(); 
                               
                        ?>
                                <h3><?php echo str_replace("and", "&", get_the_title()); ?></h3>
				 <div class="flex-parent three-col">
        	                <?php
                                   $count = 1;  
                                    foreach($contacts as $contact) { 
                                       if(get_the_title()==$contact['location']) {
					                   
                                       $subcat = $contact['sub_category'];    
					if( ! in_array( $subcat, $unique_subcats ) ) {
				                        $unique_subcats[] = $subcat;      
	                               ?>
                                        <h4><?php echo $subcat; ?></h4>                                            
 	                              <? 
                                        }
	        		      ?>
                                    <p>
                                        <strong><a href="mailto:<?=$contact['email'];?>"><?=$contact['name']; ?></a></strong><br/>
                                        <?php if($contact['occupation'] != '') { echo $contact['occupation'] ."<br/>"; } ?>
                                        <?php if($contact['phone'] != '') { echo $contact['phone'] ."<br/>"; } ?>
                                        <?php if($contact['companies'] != '') { echo $contact['companies'] ."<br/>"; } ?>
                                        <?php if($contact['address_1'] != '') { echo $contact['address_1'] ."<br/>"; } ?>
                                        <?php if($contact['address_2'] != '') { echo $contact['address_2'] ."<br/>"; } ?>
                                    </p>
	                       <?      
                                    
                                } 
                                } 

                            ?>

	                        </div>

                           <?php 
                                } //end while 
                            
                            } 
                        ?>    
			<div class="bottomContent">
	  		   <?php echo $bottomContent; ?>
			</div>             


			</section>

         <div style="width: 66%; float: left; margin-bottom: 20px;margin-top:20px;"><?php echo do_shortcode( '[gravityform id="3" name="Contact Form" description="false"]' ); ?></div>

	</div>
	
		<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>