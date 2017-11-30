<div id="sidebar" class="cf">
		<? show_links(); ?>
		
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
		c
		<?php endif; ?>
		<?php if(get_option('sidebar_image') != ""){ ?>
		<div id="execphp-3" class="block widget widget_execphp" style="height:120px;">
			<a href="<?= get_option('sidebar_image_link') ?>" target="_blank"><img src="<?= get_option('sidebar_image') ?>" alt="Featured Sidebar Image" style="margin-bottom:-5px;"></a>
		</div>
		<?php } ?>
		<?php if(get_option('sidebar_image_2') != ""){ ?>
		<div id="execphp-4" class="block widget widget_execphp" style="height:120px;">
			<a href="<?= get_option('sidebar_image_link_2') ?>" target="_blank"><img src="<?= get_option('sidebar_image_2') ?>" alt="Featured Sidebar Image" style="margin-bottom:-5px;"></a>
		</div>
		<?php } ?>
		<div class="ad-space widget">
				<div id='nynow_300_Top' style=width:300;height:250;”>
				<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('nynow_300_Top'); });
				</script>
			</div>
		</div>
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>
		<?php endif; ?>
		<div class="ad-space widget">
				<div id='nynow_300_Bottom' style=width:300;height:250;”>
				<script type='text/javascript'>
					googletag.cmd.push(function() { googletag.display('nynow_300_Bottom'); });
				</script>
			</div>
		</div>
		
		
	
		
	</div>
