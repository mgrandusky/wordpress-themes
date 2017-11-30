<aside id="sidebar" class="row">

  <div class="rc-content row rc-mz">
    <h3>Magazine</h3>
    <div class="flex-parent alignCenter start">
      <p><a href="<?php the_field('subscribe_link', 'option'); ?>"><img src="<?php the_field('cover', 'option'); ?>" style="width:150px;height:auto;"/></a></p>
      <p> <a href="<?php the_field('subscribe_link', 'option'); ?>" class="btn btn-shade">Subscribe</a> 
      <a href="<?php the_field('latest_edition_link', 'option'); ?>" class="btn btn-shade">Latest Edition</a>
       <a href="<?php the_field('archive_link', 'option'); ?>" class="dark center"><strong>Archives</strong></a></p>
    </div>
  </div>

  <div class="rc-content row rc-ts">
    <h3>Trade Show</h3>
    <div>
      <p><a href="<?php the_field('more_info_link', 'option'); ?>"><img src="<?php the_field('image', 'option'); ?>"/></a></p>
      <p> <strong><?php the_field('dates', 'option'); ?></strong><br/>
        <?php the_field('location', 'option'); ?><br/>
        <a href="<?php the_field('more_info_link', 'option'); ?>"><strong>Find out more</strong></a> </p>
    </div>
  </div>
   
  <div class="rc-content row rc-nl">
    <h3>Quick Tips Newsletter</h3>
    <div>
      <p><?php the_field('content', 'option'); ?></p>
	<?php echo do_shortcode('[formidable id="24"]'); ?>
      
      <p class="policy"><a href="<?php bloginfo('siteurl'); ?>/privacy-policy">Privacy Policy</a></p>
       </div>
  </div>


</aside>