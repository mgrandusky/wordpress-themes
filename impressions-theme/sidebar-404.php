    <aside id="sidebar" class="col-lg-3">
      <div class="section cf">
        <h4>Magazine <hr></h4> <br>
        <a style="font-size: 66px; float: left; margin-right: 10px;" href="<?php the_field('read_online_link', 'option'); ?>" target="_blank"><img src="<?php the_field('cover_image', 'option'); ?>" alt="" style="display: block;"></a>
        <div style="display: inline-block;">
          <a class="btn primary" href="<?php the_field('subscribe_link', 'option'); ?>" style="display: block; width:138px; padding:8px 15px; margin-bottom: 15px;">Subscribe</a>
          <a class="btn primary" href="<?php the_field('read_online_link', 'option'); ?>" style="display: block; width:138px; padding:8px 5px;margin-bottom: 15px;font-size:16px" target="_blank">Read Online</a>
		  <a href="<?php the_field('archive_link', 'option'); ?>" style="display: block; width:138px; padding:8px 5px;text-align:center;font-size:18px" target="_blank"><strong>Archives</strong></a>
          
        </div>
      </div>
      <div class="section cf">
        <h4>Upcoming Show <hr></h4> <br>
        <img src="<?php the_field('logo', 'option'); ?>" alt="" style="float: left; margin-right: 5px;width:50px;height:auto;">
        <div style="display:inline-block">
          <h5 style="font-size: 1.25em;"><?php the_field('show_date', 'option'); ?></h5>
          <span style="font-size: 1em;margin-bottom:10px;"><?php the_field('show_location', 'option'); ?></span><br clear="all">
          <div style="margin-top:10px;"><a href="<?php the_field('show_link', 'option'); ?>" style="font-size: 1.125em; text-decoration: none; border-bottom: 3px solid #00aeef" target="_blank"><b>LEARN MORE</b></a></div>
        </div>
        
      </div>
      <div class="section">
        <h4>Newsletters <hr></h4> <br>
        <a href="<?php bloginfo('siteurl'); ?>/newsletters"><i class="fa fa-envelope-open-o" aria-hidden="true" style="font-size: 66px; float: left; margin-right: 15px;"></i></a><span style="font-size: 1.125em;">Get Impressions' newsletters delivered weekly to your inbox</span> <br><br>
        <a href="<?php bloginfo('siteurl'); ?>/newsletters" class="btn primary" style="display: block; padding-top: 9px; padding-bottom: 9px;">Subscribe</a>
      </div>

      <div class="section">
        <h4>Product Spotlight <hr></h4> <br>
        <a href="<?php the_field('product_link', 'option'); ?>"><img src="<?php the_field('product_image', 'option'); ?>" alt="" style="width:280px;height:auto;"></a> <br>
        <div style="margin-top:10px;"><span style="color: #9e0039; text-transform: uppercase;">Sponsored</span></div>
        <a href="<?php the_field('product_link', 'option'); ?>"><h5 style="font-size: 1.5em"><?php the_field('product_title', 'option'); ?></h5></a>
        <p style="font-size: 1.125em"><?php the_field('product_description', 'option'); ?></p>
         <p style="text-align:right;"><a href="<?php the_field('product_link', 'option'); ?>" style="font-size: 1.125em; text-transform: uppercase; border-bottom: 3px solid; font-weight: 700;">More</a></p>
      </div>
    </aside>