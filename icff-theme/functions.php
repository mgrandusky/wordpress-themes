<?php
/* REGISTER SIDEBARS START */
    	register_sidebar( array(
        	'before_widget' => '<div id="%1$s" class="block widget %2$s"><hr>',
        	'after_widget' => '</div>',
        	'before_title' => '<h3>',
        	'after_title' => '</h3>',
    	));
	register_sidebar( array(
		'name' => 'Footer Sidebar 1',
		'id' => 'footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Footer Sidebar 2',
		'id' => 'footer-sidebar-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Footer Sidebar 3',
		'id' => 'footer-sidebar-3',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar( array(
		'name' => 'Footer Sidebar 4',
		'id' => 'footer-sidebar-4',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
/* REGISTER SIDEBARS END */

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
        'Show',
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
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, 'revisions'),
            'capability_type' => 'page',
            'taxonomies' => array('category'),
            //'register_meta_box_cb' => 'add_show_metaboxes',
        )
    );
    register_post_type(
        'Attendee',
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
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, themes, 'revisions'),
            'capability_type' => 'page',
            'taxonomies' => array('category'),
            //'register_meta_box_cb' => 'add_attendee_metaboxes',
        )
    );
    register_post_type(
        'Exhibitor',
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
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, 'revisions'),
            'capability_type' => 'page',
            'taxonomies' => array('category'),
            //'register_meta_box_cb' => 'add_exhibitor_metaboxes',
        )
    );
    register_post_type(
        'Conference',
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
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, 'revisions', wps_subtitle),
            'capability_type' => 'page',
            'taxonomies' => array('category'),
            //'register_meta_box_cb' => 'add_conference_metaboxes',
        )
    );
    register_post_type(
        'Hotel & Travel',
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
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, 'revisions'),
            'capability_type' => 'page',
            'taxonomies' => array('category'),
            //'register_meta_box_cb' => 'add_hotel_travel_metaboxes',
        )
    );
    register_post_type(
        'Press',
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
            'has_archive' => true,
            'supports' => array('thumbnail', title, editor, 'themes', 'revisions'),
            'capability_type' => 'page',
            'taxonomies' => array('category'),
            'has_archive' => true,
            //'register_meta_box_cb' => 'add_press_metaboxes',
        )
    );
    register_post_type(
        'press-release',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Press Releases'),
                'singular_name' => __('Press Releases'),
                'name_admin_bar' => __('Press Releases'),
                'edit_item' => __('Edit Press Releases'),
                'add_new_item' => __('Add New Press Releases')
            ),
            'public' => true,
				    'publicly_queryable' => true,
				    'show_ui' => true,
				    'show_in_menu' => true,
				    'query_var' => true,
				    // 'rewrite' => true,
				    'capability_type' => 'post',
				    'has_archive' => true,
				    // 'hierarchical' => false,
				    'menu_position' => null,
                    'supports' => array('thumbnail', title, editor, 'revisions'),
                    'taxonomies' => array('category'),
            //'register_meta_box_cb' => 'add_press_metaboxes',
        )
    );
    register_post_type(
        'Spotlights',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Spotlights'),
                'singular_name' => __('Spotlights'),
                'name_admin_bar' => __('Spotlights'),
                'edit_item' => __('Edit Spotlights'),
                'add_new_item' => __('Add New Spotlights')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('thumbnail', title, wps_subtitle, editor, 'revisions'),
            'capability_type' => 'post',
            'taxonomies' => array('category'),
            //'register_meta_box_cb' => 'add_press_metaboxes',
        )
    );

    register_post_type(
        'Features',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Features'),
                'singular_name' => __('Features'),
                'name_admin_bar' => __('Features'),
                'edit_item' => __('Edit Features'),
                'add_new_item' => __('Add New Features')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('thumbnail', title, wps_subtitle, editor, 'revisions'),
            'capability_type' => 'post',
            'taxonomies' => array('category'),
            //'register_meta_box_cb' => 'add_press_metaboxes',
        )
    );
    register_post_type(
        'exhibitor_winner',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('ICFF Exhibitor Awards'),
                'singular_name' => __('Exhibitor Winners'),
                'name_admin_bar' => __('Exhibitor Winners'),
                'edit_item' => __('Edit Exhibitor Winners'),
                'add_new_item' => __('Add New Exhibitor Winners')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('thumbnail', title, 'revisions'),
            'capability_type' => 'post',
            'taxonomies' => array('category','post_tag'),
            'register_meta_box_cb' => 'add_cards_metaboxes',
        )
    );
    register_post_type(
        'studio_participants',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Studio Participants'),
                'singular_name' => __('Studio Participants'),
                'name_admin_bar' => __('Studio Participants'),
                'edit_item' => __('Edit Studio Participants'),
                'add_new_item' => __('Add New Studio Participants')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('thumbnail', title, 'revisions'),
            'capability_type' => 'post',
            'taxonomies' => array('category','post_tag'),
            'register_meta_box_cb' => 'add_studio_metaboxes',
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
            'has_archive' => false,
            'supports' => array('thumbnail', title,  editor, 'revisions'),
            'capability_type' => 'post',
            'taxonomies' => array('category'),
            //'register_meta_box_cb' => 'add_press_metaboxes',
        )
    );

	flush_rewrite_rules();
}
function my_cpt_post_types( $post_types ) {
    $post_types[] = 'Show';
    $post_types[] = 'Exhibitor';
    $post_types[] = 'Press';
    return $post_types;
}

add_action('admin_menu', 'add_cards_metaboxes');

add_filter( 'cpt_post_types', 'my_cpt_post_types' );

add_action('init', 'register_types');

/* CUSTOM POST TYPE FUNCTIONS END */

/* SOCIAL MEDIA LINKS AND DISPLAYS START */
function display_social(){ ?>
        <a href="<?= get_option('ig') ?>" class="ig" target="_blank"></a>
        <a href="<?= get_option('fb') ?>" class="fb" target="_blank"></a>
        <a href="<?= get_option('tw') ?>" class="tw" target="_blank"></a>
<?php }
/* SOCIAL MEDIA LINKS AND DISPLAYS END */

/* SHOW MEDIA LINKS START */
function show_links($device = null){
  ?>
  <aside class="widget-1 <?php if($device == "phone"){
    echo "visible-phone";
    } else if(is_front_page()) {
     
echo "hidden-phone";
    }
      ?>" >
<div style="width:300px;padding:10px;border:3px solid #000;background:#6dcff6;text-align:center;"> 
		<div style="width:100%;margin-bottom:30px;"><h1 style="margin-bottom:-5px;">Registration Opens January 2018!</div>
		<div style="width:100%;margin-bottom:20px;"><a class="rrbutton" href="<?= do_shortcode('[pods name="sitesettings" field="register_now_url"]') ?>" target="_blank" style="width:300px;border:3px solid #000; border-radius:15px;color:#000;text-transform:uppercase;font-size:24px;padding:5px 20px;font-weight:600;text-decoration:none;">Register to Attend</a></div>
                <div style="width:100%;margin-bottom:10px;"><a class="rrbutton" href="<?= do_shortcode('[pods name="sitesettings" field="apply_to_exhibit_url"]') ?>" style="width:300px;border:3px solid #000; border-radius:15px;color:#000;text-transform:uppercase;margin-top:120px;font-size:24px;padding:5px 42px;font-weight:600;text-decoration:none;">Exhibit/Inquire</a></div>
</div>
                <div class="button" style="background-color: #000;margin-top:15px;">
                    <a style="font-size:0.75em; color: #fff; " href="<?= do_shortcode('[pods name="sitesettings" field="floor_plan_url"]') ?>" target="blank">Floor Plan</a> / <a style="font-size:0.75em; color: #fff; " href="<?= do_shortcode('[pods name="sitesettings" field="exhibitors_list_url"]') ?>">Exhibitor List</a>
                </div>
  </aside>
  <?php
}

add_theme_support( 'post-thumbnails' ); 

function getLatestSpotlight(){

 global $post;
 $myposts = get_posts('numberposts=1&post_type=Spotlights&category=36');
 foreach($myposts as $post) :
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
	?><a href="<?php echo post_permalink( $ID ); ?>"><img src="<?php echo $thumb_url ?>"></a><?php
	?><p><a href="<?php echo post_permalink( $ID ); ?>"><strong style="font-size: inherit;"><?php the_title() ?></strong> - <?php the_subtitle() ?><strong><a href="<?php echo post_permalink( $ID ); ?>" style="display: block; text-align: right;font-family: 'pt serif', times, serif;color:#164d8b; text-decoration: underline; font-style: italic;" class="spotlight-link">Learn more</a></strong></p><?php ;
 
  endforeach; 

}

register_new_royalslider_files(1);


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
    
    $result_title .= " for “<span style='color:#ff5000;'>" . wp_specialchars($wp_query->query_vars['s'], 1) . "</span>”";
    
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
    '<label for="">Winners\'s URL</label><input type="text" name="winner_url" value="' . $winner_url  . '" class="widefat" /><br> ';
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
    '<label for="">Participant\'s URL</label><input type="text" name="participants_url" value="' . $participants_url  . '" class="widefat" /><br> ';
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

?>