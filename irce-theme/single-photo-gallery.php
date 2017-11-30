<?php
/*
Template Name Posts: Photo Gallery
*/
?>
<?php get_header(); ?>
<script>jQuery('body').addClass('gallery');</script>
<div class="main-container">
  <div class="main wrapper clearfix">
    <div id="contentwrapper">
      <article>
        <section>
          <h1>Photos</h1>
		 <div id="gallery-tabs">
          <form action="#">
            <fieldset>
              <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                <option value="#exhibition-tab">Exhibition</option>
                <option value="#conference-tab">Conference</option>
                <option value="#event-tab">Networking</option>
              </select>
            </fieldset>
          </form>
         <h5><a href="javascript:void(0);">Exhibition</a></h5>
          <a href="javascript:void(0);" class="gallery-toggle"></a>
          
          <ul class="tab-list clearfix">
            <li><a href="#exhibition" alt="Exhibition">Exhibition</a></li>
            <li><a href="#conference" alt="Conference">Conference</a></li>
            <li><a href="#event" alt="Special Events">Networking</a></li>
         </ul>     
          
          <div id="exhibition" class="tab-box">
            <?php echo get_new_royalslider(2); ?>
          </div>
          
          <div id="conference" class="tab-box">
            <?php echo get_new_royalslider(3); ?>
          </div>

          <div id="event" class="tab-box">
            <?php echo get_new_royalslider(4); ?>
          </div>
                         
                                              
</div>
        </section>
      </article>
    </div>
	 <aside> 
	      <?php get_sidebar(); ?>
	    </aside>
	  </div>
	  <!-- #main --> 
	</div>
	<!-- #main-container -->
<?php get_footer(); ?>