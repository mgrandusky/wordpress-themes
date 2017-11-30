<?php
/*
Template Name Posts: Apply to Exhibit
*/
?>
<?php get_header(); ?>
<script>jQuery('body').addClass('exhibitor inner');</script>
<div class="main-container">

  <div class="main wrapper clearfix">

    <div id="contentwrapper">

      <article>

        <section>

          	<?php if (have_posts()) : ?>

    			<?php while (have_posts()) : the_post(); ?>
    			
    			<div class="open-text clearfix">
	          <h1 class="header"><?php the_title(); ?></h1>
              <?php the_field('content'); ?>
                  <div class="centerBtn"><a href="<?php the_field('new_to_interbike'); ?>"><button class="red-btn lrg-fnt lrg-bdr">New To Interbike</button></a></div>                  
	              <div class="centerBtn"><a href="<?php the_field('apply_to_interbike'); ?>"><button class="red-btn lrg-fnt lrg-bdr">Returning Exhibitor</button></a></div>
	              <div class="centerBtn"><a href="<?php the_field('apply_to_outdoor_demo'); ?>" target="_blank"><button class="red-btn lrg-fnt lrg-bdr">Apply to OutDoor Demo</button></a></div>                  
              
             
          </div>
          
        <div class="at-exhibit clearfix">
			 <h1><?php the_field('title'); ?></h1>        
			<div class="col-half">
				<h3><a href="<?php the_field('left_read_more_url'); ?>" target="_blank"><?php the_field('left_title'); ?></a></h3>
        	    <p><a href="<?php the_field('left_read_more_url'); ?>" target="_blank"><img src="<?php the_field('left_image'); ?>" border="0"/></a></p>
	            <?php the_field('left_content'); ?>
                <p><a href="<?php the_field('left_read_more_url'); ?>" class="more" target="_blank"><span>Find out More</span> &raquo; </a></p>	
    	        
			</div>        
			<div class="col-half">
				<h3><a href="<?php the_field('right_read_more_url'); ?>" target="_blank"><?php the_field('right_title'); ?></a></h3>
        	    <p><a href="<?php the_field('right_read_more_url'); ?>" target="_blank"><img src="<?php the_field('right_image'); ?>" border="0"/></a></p>
	            <?php the_field('right_content'); ?>
                <p><a href="<?php the_field('right_read_more_url'); ?>" class="more" target="_blank"><span>Find out More</span> &raquo; </a></p>	
    	        
			</div>                 
        </div>    
        <hr/>
        
        <div class="clearfix at-exhibit">
	        <div class="one-fourth"><a href="<?php the_field('erpdf_file'); ?>" target="_blank"><img src="<?php the_field('erimage'); ?>" border="0"/></div>
		    <div class="three-fourth a-left">
            <h3><a href="<?php the_field('erpdf_file'); ?>" target="_blank"><?php the_field('ertitle'); ?></a></h3>
            <?php the_field('ercontent'); ?>
            <p><a href="<?php the_field('erpdf_file'); ?>" class="pdf-icon" target="_blank">Download</a></p>
            </div>
         </div> 
 		 <hr/>    
         
         <div class="clearfix">
         <h2>Sales Representatives</h2>
         <p>For questions regarding exhibiting at Interbike and OutDoor Demo, please contact a member of the sales team below:</p>
         <div class="col-half">
         <?php if(get_field('name,_title1')) { ?>
         <p><?php the_field('name,_title1'); ?><br/>
			<?php the_field('phone1'); ?> Direct<br/>
			<?php the_field('fax1'); ?> Fax <br/>
            <a href="mailto:<?php the_field('email1'); ?>"><?php the_field('email1'); ?></a></p>
         <br>
	<?php } ?>
	<?php if(get_field('name,_title2')) { ?>
         <p><?php the_field('name,_title2'); ?><br/>
			<?php the_field('phone2'); ?> Direct<br/>
			<?php the_field('fax2'); ?> Fax <br/>
            <a href="mailto:<?php the_field('email2'); ?>"><?php the_field('email2'); ?></a></p>  
         <?php } ?>        
         </div>
         
         <div class="col-half">
      
	<?php if(get_field('name,_title3')) { ?>
         <p><?php the_field('name,_title3'); ?><br/>
			<?php the_field('phone3'); ?> Direct<br/>
			<?php the_field('fax3'); ?> Fax <br/>
            <a href="mailto:<?php the_field('email3'); ?>"><?php the_field('email3'); ?></a></p> 
      <br>
	<?php } ?>
	<?php if(get_field('name,_title4')) { ?>
         <p><?php the_field('name,_title4'); ?><br/>
			<?php the_field('phone4'); ?> Direct<br/>
			<?php the_field('fax4'); ?> Fax <br/>
            <a href="mailto:<?php the_field('email4'); ?>"><?php the_field('email4'); ?></a></p> 
  	<?php } ?>

         </div>
         
         </div>      
         
						<?php endwhile; ?>

			<?php endif; ?>

			</section>

	      </article>

	    </div>





	   		

			<?php get_sidebar(); ?>


</div>

<?php get_footer(); ?>