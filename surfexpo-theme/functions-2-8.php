<?php
/* REGISTER SIDEBARS START */
	register_sidebar( array(
		'name' => 'Holder 1',
    	'before_widget' => '<div id="%1$s" class="block widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h3>',
    	'after_title' => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Holder 2',
    	'before_widget' => '<div id="%1$s" class="block widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h3>',
    	'after_title' => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Holder 3',
    	'before_widget' => '<div id="%1$s" class="block widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h3>',
    	'after_title' => '</h3>',
	));
	
/* REGISTER SIDEBARS END */


register_new_royalslider_files(1);


/* REGISTER MENUS START */
add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'menu-1' => __( 'Menu 1' ),
			'menu-2' => __( 'Menu 2' )
		)
	);
}
/* REGISTER MENUS END */
/* CUSTOM POST TYPE FUNCTIONS START */
function register_types(){
    register_post_type(
        'the-show',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('The Show Pages'),
                'singular_name' => __('The Show Pages'),
                'name_admin_bar' => __('The Show Pages'),
                'edit_item' => __('Edit The Show Pages'),
                'add_new_item' => __('Add New The Show Pages')
            ),
           'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, themes, 'revisions'),
            'capability_type' => 'page',
         
         
        )
    );
    register_post_type(
        'buyer',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Buyer Pages'),
                'singular_name' => __('Buyer Pages'),
                'name_admin_bar' => __('Buyer Pages'),
                'edit_item' => __('Edit Buyer Pages'),
                'add_new_item' => __('Add New Buyer Pages')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, themes, 'revisions'),
            'capability_type' => 'page'
        )
    );
    register_post_type(
        'exhibitors',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Exhibitors Pages'),
                'singular_name' => __('Exhibitors Pages'),
                'name_admin_bar' => __('Exhibitors Pages'),
                'edit_item' => __('Edit Exhibitors Pages'),
                'add_new_item' => __('Add New Exhibitors Pages')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, themes, 'revisions'),
            'capability_type' => 'page'
        )
    );
     register_post_type(
        'hotel_travel',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Hotel & Travel Pages'),
                'singular_name' => __('Hotel & Travel Pages'),
                'name_admin_bar' => __('Hotel & Travel Pages'),
                'edit_item' => __('Edit Hotel & Travel Pages'),
                'add_new_item' => __('Add New Hotel & Travel Pages')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, 'themes', 'revisions'),
            'capability_type' => 'page'
        )
    );
    register_post_type(
        'press',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Press Pages'),
                'singular_name' => __('Press Pages'),
                'name_admin_bar' => __('Press Pages'),
                'edit_item' => __('Edit Press Pages'),
                'add_new_item' => __('Add New Press Pages')
            ),
            'public' => true,
	        'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, 'themes', 'revisions'),
            'capability_type' => 'page'
        )
    );
    register_post_type(
        'press-release',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Press Releases'),
                'singular_name' => __('Press Release'),
                'name_admin_bar' => __('Press Release'),
                'edit_item' => __('Edit Press Release'),
                'add_new_item' => __('Add New Press Releases')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page',
            'taxonomies' => array('category')
        )
    );
	register_post_type(
        'news',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('News'),
                'singular_name' => __('News'),
                'name_admin_bar' => __('News'),
                'edit_item' => __('Edit News'),
                'add_new_item' => __('Add New News')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page',
            'taxonomies' => array('category')
        )
    );
	register_post_type(
        'latest-news',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Latest News'),
                'singular_name' => __('Latest News'),
                'name_admin_bar' => __('Latest News'),
                'edit_item' => __('Edit Latest News'),
                'add_new_item' => __('Add New Latest News')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page',
            'taxonomies' => array('category')
        )
    );

    register_post_type(
        'faq',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('FAQs'),
                'singular_name' => __('FAQs'),
                'name_admin_bar' => __('FAQs'),
                'edit_item' => __('Edit FAQs'),
                'add_new_item' => __('Add New FAQs')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page'
        )
    );


	flush_rewrite_rules();
}
function my_cpt_post_types( $post_types ) {
    $post_types[] = 'the-show';
    $post_types[] = 'buyer';
    $post_types[] = 'exhibitors';
    $post_types[] = 'press';
    $post_types[] = 'hotel-travel';
    $post_types[] = 'news';
    return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );

add_action('init', 'register_types');

/* CUSTOM POST TYPE FUNCTIONS END */

/* SOCIAL MEDIA LINKS AND DISPLAYS START */
function display_social(){ ?>
	<ul class="social">
      <li class="fb"><span class="ir"><a href="<?php the_field('facebook', 'option'); ?>" target="_blank" title="follow us on Facebook"></a></span></li>
      <li class="tw"><span class="ir"><a href="<?php the_field('twitter', 'option'); ?>" target="_blank" title="follow us on Twitter"></a></span></li>
      <li class="ig"><span class="ir"><a href="<?php the_field('instagram', 'option'); ?>" target="_blank" title="follow us on Instagram"></a></span></li>
      <li class="li"><span class="ir"><a href="<?php the_field('flicker', 'option'); ?>" target="_blank" title="follow us on Flicker"></a></span></li>      
      <li class="vi"><span class="ir"><a href="<?php the_field('vimeo', 'option'); ?>" target="_blank" title="follow us on Vimeo"></a></span></li>            
    </ul>
<?php }
/* SOCIAL MEDIA LINKS AND DISPLAYS END */


/* SHOW MEDIA LINKS START */
function show_links($device = null){
//	$irceoptions = pods( 'irceoptions', $params );
  ?>
<div class="quicklinks clearfix"> 
<?php if( is_single('web3giftadw')) { 
        } else if(is_single(1882)) { 
        } else { ?>
            <a class="attend" href="<?php the_field('register_to_attend', 'option'); ?>" target="_blank">Register to Attend</a> 
            <a class="exhibit" href="<?php the_field('apply_to_exhibit', 'option'); ?>" >Request Info / Exhibit</a>
<?php } ?>
	<a href="<?php the_field('exhibitors_list', 'option'); ?>" class="exhibitor-list"><span>Exhibitor List</span></a> 
    <a href="<?php the_field('floor_plan', 'option'); ?>" class="floorplan" target="_blank"><span>Floor Plan</span></a> 
    
</div>
  <?php
}

add_theme_support( 'post-thumbnails' ); 

function my_wp_subtitle_page_part_support() {
    add_post_type_support( 'my_post_type', 'wps_subtitle' );
}
add_action( 'init', 'my_wp_subtitle_page_part_support' );

function search_results_title() {
  if( is_search() ) {
  
    global $wp_query;
    
    if( $wp_query->post_count == 1 ) {
      $result_title .= '1 search result found';
    } else {
      $result_title .= 'Showing ' . $wp_query->found_posts . ' results';
    }
    
    $result_title .= " for “<span style='color:#F28B00;'>" . wp_specialchars($wp_query->query_vars['s'], 1) . "</span>”";
    
    echo $result_title;
  
  }
}

function remove_page_from_query_string($query_string)
{ 
    if ($query_string['name'] == 'page' && isset($query_string['page'])) {
        unset($query_string['name']);
        // 'page' in the query_string looks like '/2', so i'm spliting it out
        list($delim, $page_index) = split('/', $query_string['page']);
        $query_string['paged'] = $page_index;
    }      
    return $query_string;
}
// I will kill you if you remove this. I died two days for this line 
add_filter('request', 'remove_page_from_query_string');

// following are code adapted from Custom Post Type Category Pagination Fix by jdantzer
function fix_category_pagination($qs){
	if(isset($qs['category_name']) && isset($qs['paged'])){
		$qs['post_type'] = get_post_types($args = array(
			'public'   => true,
			'_builtin' => false
		));
		array_push($qs['post_type'],'post');
	}
	return $qs;
}
add_filter('request', 'fix_category_pagination');

remove_filter('template_redirect', 'redirect_canonical'); 

function fontawesome_dashboard() {
   wp_enqueue_style('fontawesome', 'http:////netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css', '', '4.2.0', 'all');
}

add_action('admin_init', 'fontawesome_dashboard');

function fontawesome_icon_dashboard() {

   echo '
<style type="text/css" media="screen">
		icon16.icon-media:before, #adminmenu .menu-icon-the-show div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0c0";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-buyer div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f291";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-exhibitors div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0d1";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-hotel_travel div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f236";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-press div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f1ea";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-news div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0a1";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-press-release div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f1ea";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-latest-news div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0a1";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-faq div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0f6";
     		}
		

     	</style>';
 }
add_action('admin_head', 'fontawesome_icon_dashboard');

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
