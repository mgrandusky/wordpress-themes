<?php

remove_filter( 'the_excerpt', 'wpautop' );
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
//register_new_royalslider_files(1);
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
			'rewrite' => array( 'slug' => 'news/%news-categories%', 'with_front' => false ),
            'has_archive' => 'news',
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions', 'magazine','author'),
            'capability_type' => 'post',
        )
    );
register_post_type(
        'pizzeria-rankings',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Pizzeria Rankings'),
                'singular_name' => __('Pizzeria Rankings'),
                'name_admin_bar' => __('Pizzeria Rankings'),
                'edit_item' => __('Edit Pizzeria Rankings'),
                'add_new_item' => __('Add New Pizzeria Rankings')
            ),
            'public' => true,
	        'menu_icon' => '',
            'has_archive' => 'pizzeria-rankings',
            'supports' => array('thumbnail', 'title', 'editor', 'wps_subtitle', 'themes', 'revisions','author'),
            'capability_type' => 'post',
        )
    );
    register_post_type(
        'departments',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Departments'),
                'singular_name' => __('Departments'),
                'name_admin_bar' => __('Departments'),
                'edit_item' => __('Edit Departments'),
                'add_new_item' => __('Add New Departments')
            ),
            'public' => true,
	    	'menu_icon' => '',
	    	'rewrite' => array( 'slug' => 'departments/%departments-categories%', 'with_front' => false ),
            'has_archive' => 'departments',
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions', 'thumbnail', 'author'),
            'capability_type' => 'page',
            'taxonomies' => array('departments')
        )
    );
    register_post_type(
        'recipes',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Recipes'),
                'singular_name' => __('Recipes'),
                'name_admin_bar' => __('Recipes'),
                'edit_item' => __('Edit Recipes'),
                'add_new_item' => __('Add New Recipes')
            ),
            'public' => true,
	    	'menu_icon' => '',
	    	'rewrite' => array( 'slug' => 'recipes/%recipes_custom%', 'with_front' => false ),
            'has_archive' => 'recipes',
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions', 'thumbnail', 'author'),
            'capability_type' => 'page',
            'taxonomies' => array('recipes')
        )
    );
    register_post_type(
        'products',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Products'),
                'name_admin_bar' => __('Products'),
                'edit_item' => __('Edit Products'),
                'add_new_item' => __('Add New Products')
            ),
            'public' => true,
	    	'menu_icon' => '',
	    	'rewrite' => array( 'slug' => 'products/%product_showcase_custom%', 'with_front' => false ),
            'has_archive' => 'products',
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions', 'thumbnail', 'author'),
            'capability_type' => 'page',
        )
    );
register_post_type(
        'magazines',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Magazine'),
                'singular_name' => __('Magazine'),
                'name_admin_bar' => __('Magazine'),
                'edit_item' => __('Edit Magazine'),
                'add_new_item' => __('Add New Magazine')
            ),
            'public' => true,
	    	'menu_icon' => '',
            'has_archive' => 'magazines',
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions', 'thumbnail', 'author'),
            'capability_type' => 'page',
        )
    );
register_post_type(
        'our-experts',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Our Experts'),
                'singular_name' => __('Our Experts'),
                'name_admin_bar' => __('Our Experts'),
                'edit_item' => __('Edit Our Experts'),
                'add_new_item' => __('Add New Our Experts')
            ),
            'public' => true,
	    	'menu_icon' => '',
            'has_archive' => 'our-experts',
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions', 'thumbnail', 'author'),
            'capability_type' => 'page',
        )
    );
	add_theme_support( 'post-thumbnails' );
	flush_rewrite_rules();
}



add_action('init', 'register_types');
function create_taxonomies() {
register_taxonomy('news-categories', array('news'), array(
	'labels' => array(
	    'name' => 'News Categories'
	),
    'show_ui' => true,
	'show_tagcloud' => false,
	'hierarchical' => true,
	'rewrite' => array( 'slug' => 'news', 'with_front' => false ),
    ));
    register_taxonomy('recipes_custom', array('recipes'), array(
	'labels' => array(
	    'name' => 'Recipe Categories'
	),
    'show_ui' => true,
	'show_tagcloud' => false,
	'hierarchical' => true,
	'rewrite' => array( 'slug' => 'recipes', 'with_front' => false ),
    ));
    register_taxonomy('product_showcase_custom', array('products'), array(
	'labels' => array(
	    'name' => 'Product Categories'
	),
    'show_ui' => true,
	'show_tagcloud' => false,
	'hierarchical' => true,
	'rewrite' => array( 'slug' => 'products', 'with_front' => false ),
    ));
    register_taxonomy('departments-categories', array('departments'), array(
	'labels' => array(
	    'name' => 'departments Categories'
	),
    'show_ui' => true,
	'show_tagcloud' => false,
	'hierarchical' => true,
	'rewrite' => array( 'slug' => 'departments', 'with_front' => false ),
    ));
flush_rewrite_rules();
}
add_action('init', 'create_taxonomies');
function wpa_news_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'news' ){
        $terms = wp_get_object_terms( $post->ID, 'news-categories' );
        if( $terms ){
            return str_replace( '%news-categories%' , $terms[0]->slug , $post_link );
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpa_news_permalinks', 1, 2 );
function wpa_recipes_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'recipes' ){
        $terms = wp_get_object_terms( $post->ID, 'recipes_custom' );
        if( $terms ){
            return str_replace( '%recipes_custom%' , $terms[0]->slug , $post_link );
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpa_recipes_permalinks', 1, 2 );

function wpa_products_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'products' ){
        $terms = wp_get_object_terms( $post->ID, 'product_showcase_custom' );
        if( $terms ){
            return str_replace( '%product_showcase_custom%' , $terms[0]->slug , $post_link );
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpa_products_permalinks', 1, 2 );

function wpa_departments_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'departments' ){
        $terms = wp_get_object_terms( $post->ID, 'departments-categories' );
        if( $terms ){
            return str_replace( '%departments-categories%' , $terms[0]->slug , $post_link );
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpa_departments_permalinks', 1, 2 );

/* CUSTOM POST TYPE FUNCTIONS END */


function search_results_title() {
  if( is_search() ) {
  
    global $wp_query;
    
    if( $wp_query->post_count == 1 ) {
      $result_title .= '1 search result found';
    } else {
      $result_title .= 'Showing ' . $wp_query->found_posts . ' results';
    }
    
    $result_title .= " for “<span style='color:#e83936;'>" . wp_specialchars($wp_query->query_vars['s'], 1) . "</span>”";
    
    echo $result_title;
  
  }
}




function fontawesome_dashboard() {
   wp_enqueue_style('fontawesome', 'https:////netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css', '', '4.2.0', 'all');
}

add_action('admin_init', 'fontawesome_dashboard');

function fontawesome_icon_dashboard() {

   echo '
<style type="text/css" media="screen">
		icon16.icon-media:before, #adminmenu .menu-icon-news div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f1ea";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-pizzeria-rankings div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f201";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-departments div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0f7";
     		}

		icon16.icon-media:before, #adminmenu .menu-icon-products div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f07a";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-recipes div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0f5";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-magazines div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f097";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-our-experts div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0c0";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-napo div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f022";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-napo_sponsors div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f022";
     		}
		

     	</style>';
 }
add_action('admin_head', 'fontawesome_icon_dashboard');








function my_connection_types() {
	
	p2p_register_connection_type( array(
		'name' => 'posts_to_magazines1',
		'from' => 'posts',
		'to' => 'magazines',
		'duplicate_connections' => true

	) );
	p2p_register_connection_type( array(
		'name' => 'posts_to_magazines',
		'from' => 'departments',
		'to' => 'magazines',
		'duplicate_connections' => true

	) );
	p2p_register_connection_type( array(
		'name' => 'posts_to_magazines2',
		'from' => 'news',
		'to' => 'magazines',
		'duplicate_connections' => true

	) );
	p2p_register_connection_type( array(
		'name' => 'posts_to_magazines3',
		'from' => 'pizzeria-rankings',
		'to' => 'magazines',
		'duplicate_connections' => true

	) );

}
add_action( 'p2p_init', 'my_connection_types' );


function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt).'...';
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_rewrite_rule('news/pizza-headlines/page/([0-9]+)/?$', 'index.php?news-categories=pizza-headlines&paged=$matches[1]', 'top');
add_rewrite_rule('news/pizza-expo-news/page/([0-9]+)/?$', 'index.php?news-categories=pizza-expo-news&paged=$matches[1]', 'top');
add_rewrite_rule('news/press-releases/page/([0-9]+)/?$', 'index.php?news-categories=press-releases&paged=$matches[1]', 'top');
add_rewrite_rule('news/videos/page/([0-9]+)/?$', 'index.php?news-categories=videos&paged=$matches[1]', 'top');

add_rewrite_rule('departments/front-of-the-house/page/([0-9]+)/?$', 'index.php?departments-categories=front-of-the-house&paged=$matches[1]', 'top');
add_rewrite_rule('departments/in-the-kitchen/page/([0-9]+)/?$', 'index.php?departments-categories=in-the-kitchen&paged=$matches[1]', 'top');
add_rewrite_rule('departments/back-office/page/([0-9]+)/?$', 'index.php?departments-categories=back-office&paged=$matches[1]', 'top');
add_rewrite_rule('departments/features/page/([0-9]+)/?$', 'index.php?departments-categories=features&paged=$matches[1]', 'top');
add_rewrite_rule('departments/our-experts/page/([0-9]+)/?$', 'index.php?departments-categories=our-experts&paged=$matches[1]', 'top');

add_rewrite_rule('recipes/pizzas/page/([0-9]+)/?$', 'index.php?recipes_custom=pizzas&paged=$matches[1]', 'top');
add_rewrite_rule('recipes/dough-breads/page/([0-9]+)/?$', 'index.php?recipes_custom=dough-breads&paged=$matches[1]', 'top');
add_rewrite_rule('recipes/sauces/page/([0-9]+)/?$', 'index.php?recipes_custom=sauces&paged=$matches[1]', 'top');
add_rewrite_rule('recipes/appetizers/page/([0-9]+)/?$', 'index.php?recipes_custom=appetizers&paged=$matches[1]', 'top');
add_rewrite_rule('recipes/entrees/page/([0-9]+)/?$', 'index.php?recipes_custom=entrees&paged=$matches[1]', 'top');
add_rewrite_rule('recipes/salads-sandwiches-soups/page/([0-9]+)/?$', 'index.php?recipes_custom=salads-sandwiches-soups&paged=$matches[1]', 'top');
add_rewrite_rule('recipes/desserts/page/([0-9]+)/?$', 'index.php?recipes_custom=desserts&paged=$matches[1]', 'top');

add_rewrite_rule('products/equipment/page/([0-9]+)/?$', 'index.php?product_showcase_custom=equipment&paged=$matches[1]', 'top');
add_rewrite_rule('products/ingredients/page/([0-9]+)/?$', 'index.php?product_showcase_custom=ingredients&paged=$matches[1]', 'top');
add_rewrite_rule('products/services/page/([0-9]+)/?$', 'index.php?product_showcase_custom=services&paged=$matches[1]', 'top');
add_rewrite_rule('products/supplies/page/([0-9]+)/?$', 'index.php?product_showcase_custom=supplies&paged=$matches[1]', 'top');

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

 function template_chooser($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type == 'recipes_custom' )   
  {
    return locate_template('search-archive.php');  //  redirect to archive-search.php
  }   
  return $template;   
}
add_filter('template_include', 'template_chooser');  



function add_allowed_origins( $origins ) {
    $origins[] = 'http://wpdev.emeraldexpo.com/';
    return $origins;
}
add_filter( 'allowed_http_origins', 'add_allowed_origins' );


add_action( 'init', 'my_add_excerpts_to_pages' );

function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}


/**
 * Only from certain origins
 */
add_action( 'rest_api_init', function() {

  remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
  add_filter( 'rest_pre_serve_request', function( $value ) {

    $origin = get_http_origin();
    if ( $origin && in_array( $origin, array(
        'http://www.pizzaandpastaexpo.com', 'http://www.pizzaexpo.com', 'https://www.pizzaandpastaexpo.com', 'https://www.pizzaexpo.com'
      ) ) ) {
      header( 'Access-Control-Allow-Origin: ' . esc_url_raw( $origin ) );
      header( 'Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE' );
      header( 'Access-Control-Allow-Credentials: true' );
    }

    return $value;
    
  });
}, 15 );