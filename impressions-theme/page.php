<?php get_header(); ?>
  <main class="container">
    <div id="content" class="col-lg-9">
		<article>
			<section>
            <?php if(is_page('industry-associations')): ?>
            	<h1 class="entry-title"><?php the_title(); ?><hr /></h1><br />
                <?php $ia_listings = get_field('ia'); ?>
  				<?php if($ia_listings): ?>
  				<?php foreach ($ia_listings as $ia_listing) { ?>
                	<div style="margin-bottom:20px;display:block;">
                	<strong><?php echo $ia_listing['name']; ?></strong><br />
                    <?php if($ia_listing['address'] != ''): ?><?php echo $ia_listing['address']; ?><br /><?php endif; ?>
                    <?php if($ia_listing['phone1'] != ''): ?><?php echo $ia_listing['phone1']; ?><br /><?php endif; ?>
                    <?php if($ia_listing['phone2'] != ''): ?><?php echo $ia_listing['phone2']; ?><br /><?php endif; ?>
                    <?php if($ia_listing['email'] != ''): ?><a href="mailto:<?php echo $ia_listing['email']; ?>"><?php echo $ia_listing['email']; ?></a><br /><?php endif; ?>
                    <?php if($ia_listing['website'] != ''): ?><a href="<?php echo $ia_listing['website']; ?>" target="_blank"><?php echo $ia_listing['website']; ?></a><?php endif; ?>
                    </div>
                
                <?php } ?>
                <?php endif; ?>
               
            <?php elseif(is_page('catalog-request')): ?>
            <?php if (have_posts()) : ?>
  					<?php while (have_posts()) : the_post(); ?>
  						<h1 class="entry-title"><?php the_title(); ?><hr /></h1><br />
  						<?php the_content(); ?>
  					<?php endwhile; ?>
  				<?php endif; ?>
                <br clear="all" />
                <h2>View Catalogs</h2>
                <?php echo the_field('view_catalogs_content'); ?>
                <br clear="all" />
                <?php $cr_listings = get_field('catalog_requests'); ?>
  				<?php if($cr_listings): ?>
  				<?php foreach ($cr_listings as $cr_listing) { ?><strong></strong>
                <div style="margin-bottom:20px;display:inline-block;clear:both;">
                	<?php if($cr_listing['catalog_image'] != ''): ?><a href="<?php echo $cr_listing['catalog_url']; ?>" target="_blank"><img src="<?php echo $cr_listing['catalog_image']; ?>" align="left" style="margin-right:15px;"/></a><?php endif; ?>
                	<strong><a href="<?php echo $cr_listing['company_url']; ?>" target="_blank" style="font-size:24px;text-decoration:none;"><?php echo $cr_listing['name']; ?></a></strong><br />
                    <?php echo $cr_listing['description']; ?>
                    <a href="<?php echo $cr_listing['catalog_url']; ?>" target="_blank" style="text-decoration:none;"><?php echo $cr_listing['catalog_link_text']; ?></a>
                    </div>
                 <?php } ?>
                <?php endif; ?>
                <br clear="all" />
                <h2>Supplier Info</h2>
                <?php echo the_field('supplier_info_content'); ?>
                
                <style>
				   h2 {
					   width:100%;
font-size: 1.25em !important;
display: block;
border-bottom: 2px solid #000;
color: #000;
text-decoration: none;
padding-bottom: 5px;
font-weight:400 !important;

    }
	
	p {
    margin-top: 0px !important;
}

	</style>
            <?php else: ?>
        	<?php if (have_posts()) : ?>
  					<?php while (have_posts()) : the_post(); ?>
  						<h1 class="entry-title"><?php the_title(); ?><hr /></h1>
  						<?php the_content(); ?>
  					<?php endwhile; ?>
  				<?php endif; ?>
             <?php endif; ?>
			</section>
		</article>
 	</div>
	<?php get_sidebar(); ?>
  </main>
<?php get_footer(); ?>