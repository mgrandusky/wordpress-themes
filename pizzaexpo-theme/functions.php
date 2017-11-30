<?php

$pizzaexpooptions = pods( 'pizzaexpooptions', $params );


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
        'attendee',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Attendee Pages'),
                'singular_name' => __('Attendee Pages'),
                'name_admin_bar' => __('Attendee Pages'),
                'edit_item' => __('Edit Attendee Pages'),
                'add_new_item' => __('Add New Attendee Pages')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, themes, 'revisions'),
            'capability_type' => 'page',
        )
    );
    register_post_type(
        'exhibitor',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Exhibitor Pages'),
                'singular_name' => __('Exhibitor Pages'),
                'name_admin_bar' => __('Exhibitor Pages'),
                'edit_item' => __('Edit Exhibitor Pages'),
                'add_new_item' => __('Add New Exhibitor Pages')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, themes, 'revisions'),
            'capability_type' => 'page'
        )
    );
    register_post_type(
        'school-seminars',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('School & Seminars Pages'),
                'singular_name' => __('School & Seminars Pages'),
                'name_admin_bar' => __('School & Seminars Pages'),
                'edit_item' => __('Edit School & Seminars Pages'),
                'add_new_item' => __('Add New School & Seminars Pages')
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
        'events',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Event Pages'),
                'singular_name' => __('Event Pages'),
                'name_admin_bar' => __('Event Pages'),
                'edit_item' => __('Edit Event Pages'),
                'add_new_item' => __('Add New Event Pages')
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
        'ipc-results',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('IPC Results'),
                'singular_name' => __('IPC Results'),
                'name_admin_bar' => __('IPC Results'),
                'edit_item' => __('Edit IPC Results'),
                'add_new_item' => __('Add New IPC Results')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, wps_subtitle, 'themes', 'revisions'),
            'capability_type' => 'page'
        )
    );

    register_post_type(
        'spon-opp',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Sponsorship Opportunities'),
                'singular_name' => __('Sponsorship Opportunities'),
                'name_admin_bar' => __('Sponsorship Opportunities'),
                'edit_item' => __('Edit Sponsorship Opportunities'),
                'add_new_item' => __('Add New Sponsorship Opportunities')
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
    $post_types[] = 'show';
    $post_types[] = 'the-market';
    $post_types[] = 'exhibitor';
    $post_types[] = 'Press';
    $post_types[] = 'attendees';
    $post_types[] = 'events';
    $post_types[] = 'school-seminars';
    return $post_types;
}

add_action('admin_menu', 'add_cards_metaboxes');

add_filter( 'cpt_post_types', 'my_cpt_post_types' );

add_action('init', 'register_types');

/* CUSTOM POST TYPE FUNCTIONS END */

/* SHOW MEDIA LINKS START */
function show_links($device = null){
$pizzaexpooptions = pods( 'pizzaexpooptions', $params );
  
  ?>
  <div class="widget-1 <?php if($device == "phone"){
    echo "visible-phone";
    } else if(is_front_page()) {
     
echo "hidden-phone";
    }
      ?>" style="height:520px;" >
                <a href="<?php echo $pizzaexpooptions->field( 'buy_a_booth_url' ); ?>" class="btn green">Exhibit / Inquire</a>
                <a href="<?php echo $pizzaexpooptions->field( 'register_to_attend_url' ); ?>" class="btn red">Register to attend</a>
                <a href="<?php echo $pizzaexpooptions->field( 'floor_plan_url' ); ?>" class="fp" target="_blank">Floor Plan</a>
                <a href="<?php echo $pizzaexpooptions->field( 'exhibitors_list' ); ?>" class="ex">Exhibitor List</a>
                <br>
                <center><a href="<?php echo $pizzaexpooptions->field( 'school_of_pizza_management_url' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/school.png" width="100%" height="auto"></a><div style="position:relative;margin-top:-35px;color:#fff;"><?php echo $pizzaexpooptions->field( 'school_of_pizza_management_dates' ); ?></div></center>
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
    
    $result_title .= " for “<span style='color:#008C44;'>" . wp_specialchars($wp_query->query_vars['s'], 1) . "</span>”";
    
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
   			content: "\f06c";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-attendee div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0c0";
     		}
		
		icon16.icon-media:before, #adminmenu .menu-icon-exhibitor div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0d1";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-school-seminars div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f19d";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-hotel_travel div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f236";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-press div.wp-menu-image:before {
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
		icon16.icon-media:before, #adminmenu .menu-icon-spon-opp div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0d6";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-faq div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0f6";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-ipc-results div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f091";
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
?>