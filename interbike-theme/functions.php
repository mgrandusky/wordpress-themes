<?php

//$irceoptions = pods( 'irceoptions', $params );


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
        'show',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Show Pages'),
                'singular_name' => __('Show Pages'),
                'name_admin_bar' => __('Show Pages'),
                'edit_item' => __('Edit Show Pages'),
                'add_new_item' => __('Add New Show Pages')
            ),
           'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, themes, 'revisions'),
            'capability_type' => 'page',
         
         
        )
    );

    register_post_type(
        'attendees',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Attendees Pages'),
                'singular_name' => __('Attendees Pages'),
                'name_admin_bar' => __('Attendees Pages'),
                'edit_item' => __('Edit Attendees Pages'),
                'add_new_item' => __('Add New Attendees Pages')
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
        'conference',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Conference Pages'),
                'singular_name' => __('Conference Pages'),
                'name_admin_bar' => __('Conference Pages'),
                'edit_item' => __('Edit Conference Pages'),
                'add_new_item' => __('Add New Conference Pages')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, themes, 'revisions'),
            'capability_type' => 'page',
        )
    );
    register_post_type(
        'events',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Events Pages'),
                'singular_name' => __('Events Pages'),
                'name_admin_bar' => __('Events Pages'),
                'edit_item' => __('Edit Events Pages'),
                'add_new_item' => __('Add New Events Pages')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, themes, 'revisions'),
            'capability_type' => 'page',
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
        'media',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Media Pages'),
                'singular_name' => __('Media Pages'),
                'name_admin_bar' => __('Media Pages'),
                'edit_item' => __('Edit Media Pages'),
                'add_new_item' => __('Add New Media Pages')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => true,
            'supports' => array('thumbnail', title, editor, themes, 'revisions'),
            'capability_type' => 'page'
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

    register_post_type(
        'promo-opp',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Promotional Opportunities'),
                'singular_name' => __('Promotional Opportunities'),
                'name_admin_bar' => __('Promotional Opportunities'),
                'edit_item' => __('Edit Promotional Opportunities'),
                'add_new_item' => __('Add New Promotional Opportunities')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page'
        )
    );
    register_post_type(
        'partner-events',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Partner Events'),
                'singular_name' => __('Partner Events'),
                'name_admin_bar' => __('Partner Events'),
                'edit_item' => __('Edit Partner Events'),
                'add_new_item' => __('Add New Partner Events')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
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
	flush_rewrite_rules();
}
function my_cpt_post_types( $post_types ) {
    $post_types[] = 'show';
    $post_types[] = 'media';
    $post_types[] = 'exhibitors';
    $post_types[] = 'Press';
    $post_types[] = 'attendees';
    $post_types[] = 'events';
    $post_types[] = 'promo-opp';
    $post_types[] = 'conference';
    return $post_types;
}

add_action('admin_menu', 'add_cards_metaboxes');

add_filter( 'cpt_post_types', 'my_cpt_post_types' );

add_action('init', 'register_types');

/* CUSTOM POST TYPE FUNCTIONS END */




/* SHOW MEDIA LINKS START */
function show_links($device = null){
//	$irceoptions = pods( 'irceoptions', $params );
  ?>
<div class="quicklinks clearfix"> 
    <a class="exhibit" href="<?php the_field('apply_to_exhibit', 'option'); ?>">Exhibit / Inquire</a> 
    <a class="attend" href="<?php the_field('register_to_attend', 'option'); ?>" >Register to Attend</a> 
    <a href="<?php the_field('floor_plan', 'option'); ?>" class="floorplan" target="_blank"><span>Floor Plan</span></a> 
    <a href="<?php the_field('exhibitors_list', 'option'); ?>" class="exhibitor-list"><span>Exhibitor List</span></a> 
</div>
  <?php
}

function show_links_tablet($device = null){
?>  
    <div class="quicklinks quicklinks-tablet clearfix">
        <hr class="divider clearfix" style="padding-bottom:10px;">
    <a class="exhibit" href="<?php the_field('apply_to_exhibit', 'option'); ?>">Exhibit / Inquire</a> 
    <a class="attend" href="<?php the_field('register_to_attend', 'option'); ?>" >Register to Attend</a> 
    <a href="<?php the_field('floor_plan', 'option'); ?>" class="floorplan"><span>Floor Plan</span></a> 
    <a href="<?php the_field('exhibitors_list', 'option'); ?>" class="exhibitor-list"><span>Exhibitor List</span></a> 
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
    
    $result_title .= " for “<span style='color:#c8382c;'>" . wp_specialchars($wp_query->query_vars['s'], 1) . "</span>”";
    
    echo $result_title;
  
  }
}


function show_winner()

{
    global $post;
    // Noncename needed to verify where the data originated

    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .

    wp_create_nonce(plugin_basename(__FILE__)) . '" />';

    // Get the location data if its already been entered


    $winner_url = get_post_meta($post->ID, 'winner_url', true);


    // Echo out the field

    echo 

    '<label for="">Winners\'s URL<input type="text" name="winner_url" value="' . $winner_url  . '" class="widefat" /><br> ';

}
function wpt_save_winner_meta($post_id, $post)

{

    // verify this came from the our screen and with proper authorization,

    // because save_post can be triggered at other times

    if (!wp_verify_nonce($_POST['eventmeta_noncename'], plugin_basename(__FILE__))) {

        return $post->ID;

    }

    // Is the user allowed to edit the post or page?

    if (!current_user_can('edit_post', $post->ID)) {

        return $post->ID;

    }

    // OK, we're authenticated: we need to find and save the data

    // We'll put it into an array to make it easier to loop though.


    $show_winner_meta['winner_url'] = $_POST['winner_url'];




    // Add values of $cards_meta as custom fields

    foreach ($show_winner_meta as $key => $value) { // Cycle through the $cards_meta array!

        if ($post->post_type == 'revision') {

            return;// Don't store custom data twice

        }

        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)

        if (get_post_meta($post->ID, $key, false)) {

        // If the custom field already has a value

            update_post_meta($post->ID, $key, $value);

        } else { // If the custom field doesn't have a value

            add_post_meta($post->ID, $key, $value);

        }

        if (!$value) {

            delete_post_meta($post->ID, $key); // Delete if blank

        }

    }

}

add_action('save_post', 'wpt_save_winner_meta', 1, 2); // save the custom fields

function add_cards_metaboxes()

{
 
    add_meta_box('show_winner', 'Exhibitor Winner', 'show_winner', 'exhibitor_winner', 'normal', 'default');

}

function studio_participants()

{
    global $post;
    // Noncename needed to verify where the data originated

    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .

    wp_create_nonce(plugin_basename(__FILE__)) . '" />';

    // Get the location data if its already been entered


    $participants_url = get_post_meta($post->ID, 'participants_url', true);


    // Echo out the field

    echo 

    '<label for="">Participant\'s URL<input type="text" name="participants_url" value="' . $participants_url  . '" class="widefat" /><br> ';

}
function wpt_studio_participants_meta($post_id, $post)

{

    // verify this came from the our screen and with proper authorization,

    // because save_post can be triggered at other times

    if (!wp_verify_nonce($_POST['eventmeta_noncename'], plugin_basename(__FILE__))) {

        return $post->ID;

    }

    // Is the user allowed to edit the post or page?

    if (!current_user_can('edit_post', $post->ID)) {

        return $post->ID;

    }

    // OK, we're authenticated: we need to find and save the data

    // We'll put it into an array to make it easier to loop though.


    $studio_participants_meta['participants_url'] = $_POST['participants_url'];




    // Add values of $cards_meta as custom fields

    foreach ($studio_participants_meta as $key => $value) { // Cycle through the $cards_meta array!

        if ($post->post_type == 'revision') {

            return;// Don't store custom data twice

        }

        $value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)

        if (get_post_meta($post->ID, $key, false)) {

        // If the custom field already has a value

            update_post_meta($post->ID, $key, $value);

        } else { // If the custom field doesn't have a value

            add_post_meta($post->ID, $key, $value);

        }

        if (!$value) {

            delete_post_meta($post->ID, $key); // Delete if blank

        }

    }

}

add_action('save_post', 'wpt_studio_participants_meta', 1, 2); // save the custom fields

function add_studio_metaboxes()

{
 
    add_meta_box('studio_participants', 'Studio Participants', 'studio_participants', 'studio_participants', 'normal', 'default');

}

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
function add_jquery_ui() {
    wp_enqueue_script( 'jquery-ui-tabs' );
}
add_action( 'wp_enqueue_scripts', 'add_jquery_ui' );

add_filter( 'submit_job_form_fields', 'frontend_add_salary_field' );
 
function frontend_add_salary_field( $fields ) {
  $fields['job']['job_salary'] = array(
    'label' => __( 'Salary', 'job_manager' ),
    'type' => 'text',
    'required' => true,
    'placeholder' => '',
    'priority' => 7
  );
    unset( $fields['company']['company_twitter'] );
    unset( $fields['company']['company_video'] );
 
 
  return $fields;
}
 
add_action( 'job_manager_update_job_data', 'frontend_add_salary_field_save', 10, 2 );
 
function frontend_add_salary_field_save( $job_id, $values ) {
  update_post_meta( $job_id, '_job_salary', $values['job']['job_salary'] );
}
 
add_filter( 'job_manager_job_listing_data_fields', 'admin_add_salary_field' );
 
function admin_add_salary_field( $fields ) {
  $fields['_job_salary'] = array(
    'label' => __( 'Salary', 'job_manager' ),
    'type' => 'text',
    'placeholder' => '',
    'description' => ''
  );
  return $fields;
}
 
add_action( 'single_job_listing_meta_end', 'display_job_salary_data' );
 
function display_job_salary_data() {
  global $post;
 
  $salary = get_post_meta( $post->ID, '_job_salary', true );
 
  if ( $salary ) {
    echo '<li>' . __( 'Salary:' ) . ' ' . $salary . '</li>';
  }
}
 
function delete_backend_form_fields($fields) { // name your function whatever you want (here: delete_form_field)
    unset($fields['_company_twitter']); // remove the field company name in the form
    unset($fields['_company_video']); // remove the field company name in the form
    unset( $fields['salary'] );
 
    return $fields;
}
add_filter('job_manager_job_listing_data_fields', 'delete_backend_form_fields');

function category_posts_per_page( $query ) {
    if ( $query->is_category() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 3 );
    }
}
add_action( 'pre_get_posts', 'category_posts_per_page' );

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

function remove_menus () {
    if(is_user_logged_in() && current_user_can('editor'))
    {
        global $menu;
        $restricted = array( __('Posts'),__('Contact'), __('Links'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));
        end ($menu);
        while (prev($menu)){
            $value = explode(' ',$menu[key($menu)][0]);
            if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
        }
    }
if(is_user_logged_in() && current_user_can('editorplus'))
    {
        global $menu;
        $restricted = array( __('Posts'),__('Contact'), __('Links'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));
        end ($menu);
        while (prev($menu)){
            $value = explode(' ',$menu[key($menu)][0]);
            if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
        }
    }

}
add_action('admin_menu', 'remove_menus');

function fontawesome_dashboard() {
   wp_enqueue_style('fontawesome', 'https:////netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css', '', '4.2.0', 'all');
}

add_action('admin_init', 'fontawesome_dashboard');

function fontawesome_icon_dashboard() {

   echo '
<style type="text/css" media="screen">
		icon16.icon-media:before, #adminmenu .menu-icon-show div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f07a";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-conference div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f073";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-attendees div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0c0";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-exhibitors div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0d1";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-hotel_travel div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f236";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-media div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f1ea";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-events div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f073";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-press-release div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f1ea";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-promo-opp div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f155";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-faq div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0f6";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-partner-events div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f145";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-sponsors-partners div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f219";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-media-coverage div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f008";
     		}

     	</style>';
 }
add_action('admin_head', 'fontawesome_icon_dashboard');



add_filter('upload_mimes', 'my_upload_mimes');

function my_upload_mimes ( $existing_mimes=array() ) {
    $existing_mimes['csv'] = 'text/csv';
    return $existing_mimes;
}
add_filter('nav_menu_css_class', 'add_active_class', 10, 2 );

function add_active_class($classes, $item) {

  if( in_array( 'current-menu-item', $classes ) ||
    in_array( 'current-menu-ancestor', $classes ) ||
    in_array( 'current-menu-parent', $classes ) ||
    in_array( 'current_page_parent', $classes ) ||
    in_array( 'current_page_ancestor', $classes )
    ) {

    $classes[] = "active";
  }

  return $classes;
}


add_action( 'rest_api_init', 'dt_register_api_hooks' );
function dt_register_api_hooks() {

    // Add the plaintext content to GET requests for individual posts
    register_api_field(
        'post',
        'plaintext',
        array(
            'get_callback'    => 'dt_return_plaintext_content',
        )
    );
}

// Return plaintext content for posts
function dt_return_plaintext_content( $object, $field_name, $request ) {
    return "rstlne";
}


add_filter( 'json_prepare_post', function ($data, $post, $context) {
    $data['myextradata'] = array(
        'plaintext' => get_post_meta( $post['ID'], 'plaintext', true ),
    );
    return $data;
}, 10, 3 );


if( function_exists('acf_add_options_page') ) {
 
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));
 
} 
