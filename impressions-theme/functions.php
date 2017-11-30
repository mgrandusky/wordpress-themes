<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


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

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );

	register_nav_menus(
    array(
        'Top-menu' => 'Main Menu',
    )
);
}
add_action( 'init', 'register_my_menus' );

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
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page',
        )
    );
    register_post_type(
        'screen-printing',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Screen Printing'),
                'singular_name' => __('Screen Printing'),
                'name_admin_bar' => __('Screen Printing'),
                'edit_item' => __('Edit Screen Printing'),
                'add_new_item' => __('Add New Screen Printing')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => 'screen-printing',
'rewrite' => array( 'slug' => 'screen-printing/%screen-printing-categories%', 'with_front' => false ),
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page',
        )
    );
    register_post_type(
        'embroidery',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Embroidery'),
                'singular_name' => __('Embroidery'),
                'name_admin_bar' => __('Embroidery'),
                'edit_item' => __('Edit Embroidery'),
                'add_new_item' => __('Add New Embroidery')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => 'embroidery',
'rewrite' => array( 'slug' => 'embroidery/%embroidery-categories%', 'with_front' => false ),
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page',
            'taxonomies' => array('embroidery')
        )
    );
    register_post_type(
        'digital-decorating',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Digital Decorating'),
                'singular_name' => __('Digital Decorating'),
                'name_admin_bar' => __('Digital Decorating'),
                'edit_item' => __('Edit Digital Decorating'),
                'add_new_item' => __('Add New Digital Decorating')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => 'digital-decorating',
'rewrite' => array( 'slug' => 'digital-decorating/%digital-decorating-categories%', 'with_front' => false ),
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page',
			'taxonomies' => array('digital-decorating')
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
            'has_archive' => 'products',
'rewrite' => array( 'slug' => 'products/%products-categories%', 'with_front' => false ),
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page',
			'taxonomies' => array('products')
        )
    );
    register_post_type(
        'galleries',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Galleries'),
                'singular_name' => __('Galleries'),
                'name_admin_bar' => __('Galleries'),
                'edit_item' => __('Edit Galleries'),
                'add_new_item' => __('Add New Galleries')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => 'galleries',
'rewrite' => array( 'slug' => 'galleries/%galleries-categories%', 'with_front' => false ),
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page',
			'taxonomies' => array('galleries')
        )
    );
    register_post_type(
        'build-your-business',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Build Your Business'),
                'singular_name' => __('Build Your Business'),
                'name_admin_bar' => __('Build Your Business'),
                'edit_item' => __('Edit Build Your Business'),
                'add_new_item' => __('Add New Build Your Business')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => 'build-your-business',
'rewrite' => array( 'slug' => 'build-your-business/%build-your-business-categories%', 'with_front' => false ),
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page',
			'taxonomies' => array('build-your-business')
        )
    );
    register_post_type(
        'sponsored',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Sponsored'),
                'singular_name' => __('Sponsored'),
                'name_admin_bar' => __('Sponsored'),
                'edit_item' => __('Edit Sponsored'),
                'add_new_item' => __('Add New Sponsored')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page'
        )
    );
flush_rewrite_rules( false );
}

function news_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'News Categories',
		'singular_name'     => 'News Category',
		'search_items'      => 'Search News Categories',
		'all_items'         => 'All News Categories',
		'edit_item'         => 'Edit News Category',
		'update_item'       => 'Update News Category',
		'add_new_item'      => 'Add New News Category',
		'new_item_name'     => 'New News Category',
		'menu_name'         => 'News Categories'
	);
	// register taxonomy
	register_taxonomy( 'news-categories', array('news'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true,
'rewrite' => array( 'slug' => 'news', 'with_front' => true ),
    'show_ui' => true,
	'show_tagcloud' => false,
	) );
}
add_action( 'init', 'news_register_taxonomy' );

function screen_printing_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Screen Printing Categories',
		'singular_name'     => 'Screen Printing Category',
		'search_items'      => 'Search Screen Printing Categories',
		'all_items'         => 'All Screen Printing Categories',
		'edit_item'         => 'Edit Screen Printing Category',
		'update_item'       => 'Update Screen Printing Category',
		'add_new_item'      => 'Add New Screen Printing Category',
		'new_item_name'     => 'New Screen Printing Category',
		'menu_name'         => 'Screen Printing Categories'
	);
	// register taxonomy
	register_taxonomy( 'screen-printing-categories', array('screen-printing'), array(
		'hierarchical' => true,
		'labels' => $labels,
'rewrite' => array( 'slug' => 'screen-printing', 'with_front' => true ),
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'screen_printing_register_taxonomy' );

function embroidery_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Embroidery Categories',
		'singular_name'     => 'Embroidery Category',
		'search_items'      => 'Search Embroidery Categories',
		'all_items'         => 'All Embroidery Categories',
		'edit_item'         => 'Edit Embroidery Category',
		'update_item'       => 'Update Embroidery Category',
		'add_new_item'      => 'Add New Embroidery Category',
		'new_item_name'     => 'New Embroidery Category',
		'menu_name'         => 'Embroidery Categories'
	);
	// register taxonomy
	register_taxonomy( 'embroidery-categories', array('embroidery'), array(
		'hierarchical' => true,
		'labels' => $labels,
'rewrite' => array( 'slug' => 'embroidery', 'with_front' => true ),
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'embroidery_register_taxonomy' );

function digital_decorating_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Digital Decorating Categories',
		'singular_name'     => 'Digital Decorating Category',
		'search_items'      => 'Search Digital Decorating Categories',
		'all_items'         => 'All Digital Decorating Categories',
		'edit_item'         => 'Edit Digital Decorating Category',
		'update_item'       => 'Update Digital Decorating Category',
		'add_new_item'      => 'Add New Digital Decorating Category',
		'new_item_name'     => 'New Digital Decorating Category',
		'menu_name'         => 'Digital Decorating Categories'
	);
	// register taxonomy
	register_taxonomy( 'digital-decorating-categories', array('digital-decorating'), array(
		'hierarchical' => true,
		'labels' => $labels,
'rewrite' => array( 'slug' => 'digital-decorating', 'with_front' => true ),
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'digital_decorating_register_taxonomy' );

function products_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Products Categories',
		'singular_name'     => 'Products Category',
		'search_items'      => 'Search Products Categories',
		'all_items'         => 'All Products Categories',
		'edit_item'         => 'Edit Products Category',
		'update_item'       => 'Update Products Category',
		'add_new_item'      => 'Add New Products Category',
		'new_item_name'     => 'New Products Category',
		'menu_name'         => 'Products Categories'
	);
	// register taxonomy
	register_taxonomy( 'products-categories', array('products'), array(
		'hierarchical' => true,
		'labels' => $labels,
'rewrite' => array( 'slug' => 'products', 'with_front' => true ),
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'products_register_taxonomy' );

function galleries_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Galleries Categories',
		'singular_name'     => 'Galleries Category',
		'search_items'      => 'Search Galleries Categories',
		'all_items'         => 'All Galleries Categories',
		'edit_item'         => 'Edit Galleries Category',
		'update_item'       => 'Update Galleries Category',
		'add_new_item'      => 'Add New Galleries Category',
		'new_item_name'     => 'New Galleries Category',
		'menu_name'         => 'Galleries Categories'
	);
	// register taxonomy
	register_taxonomy( 'galleries-categories', array('galleries'), array(
		'hierarchical' => true,
		'labels' => $labels,
'rewrite' => array( 'slug' => 'galleries', 'with_front' => true ),
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'galleries_register_taxonomy' );

function build_your_business_register_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Build Your Business Categories',
		'singular_name'     => 'Build Your Business Category',
		'search_items'      => 'Search Build Your Business Categories',
		'all_items'         => 'All Build Your Business Categories',
		'edit_item'         => 'Edit Build Your Business Category',
		'update_item'       => 'Update Build Your Business Category',
		'add_new_item'      => 'Add New Build Your Business Category',
		'new_item_name'     => 'New Build Your Business Category',
		'menu_name'         => 'Build Your Business Categories'
	);
	// register taxonomy
	register_taxonomy( 'build-your-business-categories', array('build-your-business'), array(
		'hierarchical' => true,
		'labels' => $labels,
'rewrite' => array( 'slug' => 'build-your-business', 'with_front' => true ),
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'build_your_business_register_taxonomy' );
flush_rewrite_rules();
add_action('init', 'register_types');

/* CUSTOM POST TYPE FUNCTIONS END */

function search_results_title() {
  if( is_search() ) {
  
    global $wp_query;
    
    if( $wp_query->post_count == 1 ) {
      $result_title .= '1 search result found';
    } else {
      $result_title .= 'Showing ' . $wp_query->found_posts . ' results';
    }
    
    $result_title .= " for “<span style='color:#9e0b0f;'>" . wp_specialchars($wp_query->query_vars['s'], 1) . "</span>”";
    
    echo $result_title;
  
  }
}
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

function wpa_screen_printing_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'screen-printing' ){
        $terms = wp_get_object_terms( $post->ID, 'screen-printing-categories' );
        if( $terms ){
            return str_replace( '%screen-printing-categories%' , $terms[0]->slug , $post_link );
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpa_screen_printing_permalinks', 1, 2 );

function wpa_embroidery_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'embroidery' ){
        $terms = wp_get_object_terms( $post->ID, 'embroidery-categories' );
        if( $terms ){
            return str_replace( '%embroidery-categories%' , $terms[0]->slug , $post_link );
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpa_embroidery_permalinks', 1, 2 );

function wpa_digital_decorating_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'digital-decorating' ){
        $terms = wp_get_object_terms( $post->ID, 'digital-decorating-categories' );
        if( $terms ){
            return str_replace( '%digital-decorating-categories%' , $terms[0]->slug , $post_link );
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpa_digital_decorating_permalinks', 1, 2 );

function wpa_products_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'products' ){
        $terms = wp_get_object_terms( $post->ID, 'products-categories' );
        if( $terms ){
            return str_replace( '%products-categories%' , $terms[0]->slug , $post_link );
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpa_products_permalinks', 1, 2 );

function wpa_galleries_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'galleries' ){
        $terms = wp_get_object_terms( $post->ID, 'galleries-categories' );
        if( $terms ){
            return str_replace( '%galleries-categories%' , $terms[0]->slug , $post_link );
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpa_galleries_permalinks', 1, 2 );

function wpa_build_your_business_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'build-your-business' ){
        $terms = wp_get_object_terms( $post->ID, 'build-your-business-categories' );
        if( $terms ){
            return str_replace( '%build-your-business-categories%' , $terms[0]->slug , $post_link );
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpa_build_your_business_permalinks', 1, 2 );
?>