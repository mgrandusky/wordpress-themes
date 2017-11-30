	<div id="sidebar" class="cf">
		<?php show_links(); ?>
		<!-- <a href="<?= do_shortcode('[pods name="sitesettings" field="300x100_url"]') ?>"><img src="<?= do_shortcode('[pods name="sitesettings" field="300x100_img"]') ?>"></a> //-->
		
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
		<h3>Recent Posts</h3>
		<ul>
			<?php get_archives('postbypost', 5); ?>

		</ul>
		<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('orderby=name&show_count=1&hide_empty=1&hierarchical=0&exclude=,2&title_li='); ?>
		</ul>
		<h3>Archives</h3>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		<?php endif; ?>
		
	</div>