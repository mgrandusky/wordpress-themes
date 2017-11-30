<?php
/* REGISTER SIDEBARS START */
    	register_sidebar( array(
			'name' => 'Future Market',
        	'before_widget' => '<div id="%1$s" class="block widget %2$s">',
        	'after_widget' => '</div>',
        	'before_title' => '<h3>',
        	'after_title' => '</h3>',
    	));
	register_sidebar( array(
			'name' => 'Product Showcase',
        	'before_widget' => '<div id="%1$s" class="block widget %2$s">',
        	'after_widget' => '</div>',
        	'before_title' => '<h3>',
        	'after_title' => '</h3>',
    	));
	register_sidebar( array(
			'name' => 'Email Updates',
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
        'the-market',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('The Market Pages'),
                'singular_name' => __('The Market Pages'),
                'name_admin_bar' => __('The Market Pages'),
                'edit_item' => __('Edit The Market Pages'),
                'add_new_item' => __('Add New The Market Pages')
            ),
           'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, themes, 'revisions'),
            'capability_type' => 'page',
         
         
        )
    );
    register_post_type(
        'collections',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Collections Pages'),
                'singular_name' => __('Collections Pages'),
                'name_admin_bar' => __('Collections Pages'),
                'edit_item' => __('Edit Collections Pages'),
                'add_new_item' => __('Add New Collections Pages')
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
            'has_archive' => true,
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
        'industry-insights',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Industry Insights'),
                'singular_name' => __('Industry Insights'),
                'name_admin_bar' => __('Industry Insights'),
                'edit_item' => __('Edit Industry Insights'),
                'add_new_item' => __('Add New Industry Insights')
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
            'supports' => array('thumbnail', title, editor, 'themes', 'revisions'),
            'capability_type' => 'post',
	   
        )
    );

    register_post_type(
        'events',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Events'),
                'name_admin_bar' => __('Events'),
                'edit_item' => __('Edit Events'),
                'add_new_item' => __('Add New Events')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, 'themes', 'revisions'),
            'capability_type' => 'post'
        )
    );

    register_post_type(
        'featured',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Featured Exhibitors'),
                'singular_name' => __('Featured Exhibitors'),
                'name_admin_bar' => __('Featured Exhibitors'),
                'edit_item' => __('Edit Featured Exhibitors'),
                'add_new_item' => __('Add New Featured Exhibitors')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, 'themes', 'revisions'),
            'capability_type' => 'post'
        )
    );
    register_post_type(
        'home',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('HOME'),
                'singular_name' => __('HOME'),
                'name_admin_bar' => __('HOME'),
                'edit_item' => __('Edit HOME'),
                'add_new_item' => __('Add New HOME')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, 'themes', 'revisions'),
            'capability_type' => 'page'
        )
    );
    register_post_type(
        'lifestyle',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('LIFESTYLE'),
                'singular_name' => __('LIFESTYLE'),
                'name_admin_bar' => __('LIFESTYLE'),
                'edit_item' => __('Edit LIFESTYLE'),
                'add_new_item' => __('Add New LIFESTYLE')
            ),
            'public' => true,
            'has_archive' => false,
	    'menu_icon' => '',
            'supports' => array('thumbnail', title, editor, 'themes', 'revisions'),
            'capability_type' => 'post'
        )
    );
    register_post_type(
        'handmade',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('HANDMADE'),
                'singular_name' => __('HANDMADE'),
                'name_admin_bar' => __('HANDMADE'),
                'edit_item' => __('Edit HANDMADE'),
                'add_new_item' => __('Add New HANDMADE')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, 'themes', 'revisions'),
            'capability_type' => 'post'
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
            'supports' => array('thumbnail', title, editor, 'themes', 'revisions'),
            'capability_type' => 'post'
        )
    );
    register_post_type(
        'exhibitors-spotlight',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Exhibitors Spotlight'),
                'singular_name' => __('Exhibitors Spotlight'),
                'name_admin_bar' => __('Exhibitors Spotlight'),
                'edit_item' => __('Edit Exhibitors Spotlight'),
                'add_new_item' => __('Add New Exhibitors Spotlight')
            ),
            'public' => true,
	    'menu_icon' => '',
            'has_archive' => false,
            'supports' => array('thumbnail', title, editor, 'themes', 'revisions'),
            'capability_type' => 'post'
        )
    );

	flush_rewrite_rules();
}
function my_cpt_post_types( $post_types ) {
    $post_types[] = 'Show';
    $post_types[] = 'the-market';
    $post_types[] = 'exhibitors';
    $post_types[] = 'Press';
    $post_types[] = 'Collections';
    $post_types[] = 'industry-insights';
    $post_types[] = 'attendees';
    return $post_types;
}

add_action('admin_menu', 'add_cards_metaboxes');

add_filter( 'cpt_post_types', 'my_cpt_post_types' );

add_action('init', 'register_types');

/* CUSTOM POST TYPE FUNCTIONS END */

/* THEME OPTIONS START */
add_option('event_location');
add_option('headline');
add_option('event_date1');
add_option('event_date2');
add_option('market1');
add_option('market2');
add_option('clockTD');
add_option('clockTD-left');
add_option('clockTD-right');
add_option('fb');
add_option('tw');
add_option('yt');
add_option('ig');
add_option('future_date');
add_option('future_date_link');
add_option('sidebar_image');
add_option('sidebar_image_link');
add_option('sidebar_image_2');
add_option('sidebar_image_link_2');
add_option('register_now_url');
add_option('exhibitor_apply_url');
add_option('floor_plan_url');
add_option('exhibitors_url');
add_option('seo_copy_home');
add_option('seo_copy_artisan_resource');
add_option('seo_copy_first_time_attendees');
add_option('seo_copy_why_exhibit');
add_option('seo_copy_exhibitors_list');
add_option('seo_copy_programs');
add_option('seo_copy_events');
add_option('seo_copy_displays_awards_submissions');
add_option('seo_copy_collections_home');
add_option('seo_copy_collections_home_tgh');
add_option('seo_copy_collections_home_ad');
add_option('seo_copy_collections_home_hft');
add_option('seo_copy_collections_lifestyle');
add_option('seo_copy_collections_lifestyle_bc');
add_option('seo_copy_collections_lifestyle_gift');
add_option('seo_copy_collections_lifestyle_pa');
add_option('seo_copy_collections_lifestyle_pcw');
add_option('seo_copy_collections_handmade');
add_option('seo_copy_collections_handmade_stuff');
add_option('seo_copy_collections_handmade_ar');
add_option('seo_copy_collections_handmade_dm');
add_option('seo_copy_collections_handmade_gd');


function civ_slider_options_page(){
  add_menu_page('NYNow Options', 'NYNow Options', 5, 'civ_slider', 'civ_slider_options', '', 6.11);
}
add_action('admin_menu', 'civ_slider_options_page');
function civ_slider_options(){
//changing post order on submit
if (isset($_POST['event_location'])) {
  update_option('event_location', $_POST['event_location']);
}
if (isset($_POST['event_date1'])) {
update_option('event_date1', $_POST['event_date1']);
}
if (isset($_POST['event_date2'])) {
update_option('event_date2', $_POST['event_date2']);
}
if (isset($_POST['market1'])) {
update_option('market1', $_POST['market1']);
}
if (isset($_POST['market2'])) {
update_option('market2', $_POST['market2']);
}
if (isset($_POST['headline'])) {
update_option('headline', $_POST['headline']);
}
if (isset($_POST['clockTD'])) {
update_option('clockTD', $_POST['clockTD']);
}
if (isset($_POST['clockTD-left'])) {
update_option('clockTD-left', $_POST['clockTD-left']);
}
if (isset($_POST['clockTD-right'])) {
update_option('clockTD-right', $_POST['clockTD-right']);
}
if (isset($_POST['fb'])) {
update_option('fb', $_POST['fb']);
}
if (isset($_POST['tw'])) {
update_option('tw', $_POST['tw']);
}
if (isset($_POST['yt'])) {
update_option('yt', $_POST['yt']);
}
if (isset($_POST['ig'])) {
update_option('ig', $_POST['ig']);
}
if (isset($_POST['future_date'])) {
update_option('future_date', $_POST['future_date']);
}
if (isset($_POST['future_date_link'])) {
update_option('future_date_link', $_POST['future_date_link']);
}

if (isset($_POST['sidebar_image'])) {
update_option('sidebar_image', $_POST['sidebar_image']);
}
if (isset($_POST['sidebar_image_link'])) {
update_option('sidebar_image_link', $_POST['sidebar_image_link']);
}

if (isset($_POST['sidebar_image_2'])) {
update_option('sidebar_image_2', $_POST['sidebar_image_2']);
}
if (isset($_POST['sidebar_image_link_2'])) {
update_option('sidebar_image_link_2', $_POST['sidebar_image_link_2']);
}

if (isset($_POST['buy_tickets'])) {
update_option('buy_tickets', $_POST['buy_tickets']);
}
if (isset($_POST['exhibitor_apply_url'])) {
update_option('exhibitor_apply_url', $_POST['exhibitor_apply_url']);
}
if (isset($_POST['floor_plan_url'])) {
update_option('floor_plan_url', $_POST['floor_plan_url']);
}
if (isset($_POST['exhibitors_url'])) {
update_option('exhibitors_url', $_POST['exhibitors_url']);
}
if (isset($_POST['seo_copy_home'])) {
update_option('seo_copy_home', $_POST['seo_copy_home']);
}
if (isset($_POST['seo_copy_artisan_resource'])) {
update_option('seo_copy_artisan_resource', $_POST['seo_copy_artisan_resource']);
}
if (isset($_POST['seo_copy_first_time_attendees'])) {
update_option('seo_copy_first_time_attendees', $_POST['seo_copy_first_time_attendees']);
}
if (isset($_POST['seo_copy_why_exhibit'])) {
update_option('seo_copy_why_exhibit', $_POST['seo_copy_why_exhibit']);
}
if (isset($_POST['seo_copy_exhibitors_list'])) {
update_option('seo_copy_exhibitors_list', $_POST['seo_copy_exhibitors_list']);
};
if (isset($_POST['seo_copy_programs'])) {
update_option('seo_copy_programs', $_POST['seo_copy_programs']);
}
if (isset($_POST['seo_copy_events'])) {
update_option('seo_copy_events', $_POST['seo_copy_events']);
}
if (isset($_POST['seo_copy_displays_awards_submissions'])) {
update_option('seo_copy_displays_awards_submissions', $_POST['seo_copy_displays_awards_submissions']);
}
if (isset($_POST['seo_copy_collections_home'])) {
update_option('seo_copy_collections_home', $_POST['seo_copy_collections_home']);
}

if (isset($_POST['seo_copy_collections_home_tgh'])) {
update_option('seo_copy_collections_home_tgh', $_POST['seo_copy_collections_home_tgh']);
}
if (isset($_POST['seo_copy_collections_home_ad'])) {
update_option('seo_copy_collections_home_ad', $_POST['seo_copy_collections_home_ad']);
}
if (isset($_POST['seo_copy_collections_home_hft'])) {
update_option('seo_copy_collections_home_hft', $_POST['seo_copy_collections_home_hft']);
}

if (isset($_POST['seo_copy_collections_lifestyle'])) {
update_option('seo_copy_collections_lifestyle', $_POST['seo_copy_collections_lifestyle']);
}

if (isset($_POST['seo_copy_collections_lifestyle_bc'])) {
update_option('seo_copy_collections_lifestyle_bc', $_POST['seo_copy_collections_lifestyle_bc']);
}
if (isset($_POST['seo_copy_collections_lifestyle_gift'])) {
update_option('seo_copy_collections_lifestyle_gift', $_POST['seo_copy_collections_lifestyle_gift']);
}
if (isset($_POST['seo_copy_collections_lifestyle_pa'])) {
update_option('seo_copy_collections_lifestyle_pa', $_POST['seo_copy_collections_lifestyle_pa']);
}
if (isset($_POST['seo_copy_collections_lifestyle_pcw'])) {
update_option('seo_copy_collections_lifestyle_pcw', $_POST['seo_copy_collections_lifestyle_pcw']);
}


if (isset($_POST['seo_copy_collections_handmade'])) {
update_option('seo_copy_collections_handmade', $_POST['seo_copy_collections_handmade']);
}

if (isset($_POST['seo_copy_collections_handmade_stuff'])) {
update_option('seo_copy_collections_handmade_stuff', $_POST['seo_copy_collections_handmade_stuff']);
}
if (isset($_POST['seo_copy_collections_handmade_ar'])) {
update_option('seo_copy_collections_handmade_ar', $_POST['seo_copy_collections_handmade_ar']);
}

if (isset($_POST['seo_copy_collections_handmade_dm'])) {
update_option('seo_copy_collections_handmade_dm', $_POST['seo_copy_collections_handmade_dm']);
}
if (isset($_POST['seo_copy_collections_handmade_gd'])) {
update_option('seo_copy_collections_handmade_gd', $_POST['seo_copy_collections_handmade_gd']);
}
?>
<h2>Theme Options</h2>
<style type="text/css">
    form label{width: 140px;display: inline-block;}
    form input[type=text], textarea{width: 440px;display: inline-block;}
</style>
<form method="post">
  <h3>Header Event Info</h3>
  Event headline: <input type="text" name="headline" value="<?php if(get_option('headline')){echo get_option('headline');} ?>" /><br>
  Event location: <input type="text" name="event_location" value="<?php if(get_option('event_location')){echo get_option('event_location');} ?>" /><br>
  Event date: <input type="text" name="event_date1" value="<?php if(get_option('event_date1')){echo get_option('event_date1');} ?>" /><br>
  Event market: <input type="text" name="market1" value="<?php if(get_option('market1')){echo get_option('market1');} ?>" /><br>
  Event date: <input type="text" name="event_date2" value="<?php if(get_option('event_date2')){echo get_option('event_date2');} ?>" /><br>
  Event market: <input type="text" name="market2" value="<?php if(get_option('market2')){echo get_option('market2');} ?>" /><br>
  <h3>Future Date (sidebar)</h3>
  Future Date: <input type="text" name="future_date" value="<?php if(get_option('future_date')){echo get_option('future_date');} ?>" /><br>
  Future Date Link: <input type="text" name="future_date_link" value="<?php if(get_option('future_date_link')){echo get_option('future_date_link');} ?>" /><br>
  <h3>Countdown Clock</h3>
  Clock Date & Time: <input type="text" name="clockTD" value="<?php if(get_option('clockTD')){echo get_option('clockTD');} ?>" /><br>
  Left Copy: <input type="text" name="clockTD-left" value="<?php if(get_option('clockTD-left')){echo get_option('clockTD-left');} ?>" /><br>
  Right Copy: <input type="text" name="clockTD-right" value="<?php if(get_option('clockTD-right')){echo get_option('clockTD-right');} ?>" /><br>
  <h3>Featured Image (sidebar)</h3>
  Sidebar Image: <input type="text" name="sidebar_image" value="<?php if(get_option('sidebar_image')){echo get_option('sidebar_image');} ?>" /><br>
  Sidebar Image Link: <input type="text" name="sidebar_image_link" value="<?php if(get_option('sidebar_image_link')){echo get_option('sidebar_image_link');} ?>" /><br>
    <h3>Featured Image 2 (sidebar)</h3>
  Sidebar Image: <input type="text" name="sidebar_image_2" value="<?php if(get_option('sidebar_image_2')){echo get_option('sidebar_image_2');} ?>" /><br>
  Sidebar Image Link: <input type="text" name="sidebar_image_link_2" value="<?php if(get_option('sidebar_image_link_2')){echo get_option('sidebar_image_link_2');} ?>" /><br>
  <h3>Social Links</h3>
  <h3>Social Links</h3>
  Facebook URL: <input type="text" name="fb" value="<?php if(get_option('fb')){echo get_option('fb');} ?>" /><br>
  Twitter URL: <input type="text" name="tw" value="<?php if(get_option('tw')){echo get_option('tw');} ?>" /><br>
  YouTube URL: <input type="text" name="yt" value="<?php if(get_option('yt')){echo get_option('yt');} ?>" /><br>
  Instagram URL: <input type="text" name="ig" value="<?php if(get_option('ig')){echo get_option('ig');} ?>" /><br>
  <h3>Apply/Exhibitor Links</h3>
  Register Now URL: <input type="text" name="buy_tickets" value="<?php if(get_option('buy_tickets')){echo get_option('buy_tickets');} ?>" /><br>
  Apply to Exhibit URL: <input type="text" name="exhibitor_apply_url" value="<?php if(get_option('exhibitor_apply_url')){echo get_option('exhibitor_apply_url');} ?>" /><br>
  Floor Plan URL: <input type="text" name="floor_plan_url" value="<?php if(get_option('floor_plan_url')){echo get_option('floor_plan_url');} ?>" /><br>
  Exhibitors List URL: <input type="text" name="exhibitors_url" value="<?php if(get_option('exhibitors_url')){echo get_option('exhibitors_url');} ?>" /><br>
<h3>SEO Copy</h3>
  Homepage Copy<br>
  <textarea name="seo_copy_home" id="" cols="30" rows="10"><?php if(get_option('seo_copy_home')){echo stripslashes(get_option('seo_copy_home'));} ?></textarea><br>
  Artisans Resource Copy<br>
  <textarea name="seo_copy_artisan_resource" id="" cols="30" rows="10"><?php if(get_option('seo_copy_artisan_resource')){echo stripslashes(get_option('seo_copy_artisan_resource'));} ?></textarea><br>
  First Time Attendees Copy<br>
  <textarea name="seo_copy_first_time_attendees" id="" cols="30" rows="10"><?php if(get_option('seo_copy_first_time_attendees')){echo stripslashes(get_option('seo_copy_first_time_attendees'));} ?></textarea><br>
  Why Exhibit Copy<br>
  <textarea name="seo_copy_why_exhibit" id="" cols="30" rows="10"><?php if(get_option('seo_copy_why_exhibit')){echo stripslashes(get_option('seo_copy_why_exhibit'));} ?></textarea><br>
  Exhibitors List Copy<br>
  <textarea name="seo_copy_exhibitors_list" id="" cols="30" rows="10"><?php if(get_option('seo_copy_exhibitors_list')){echo stripslashes(get_option('seo_copy_exhibitors_list'));} ?></textarea><br>
  Programs Copy<br>
  <textarea name="seo_copy_programs" id="" cols="30" rows="10"><?php if(get_option('seo_copy_programs')){echo stripslashes(get_option('seo_copy_programs'));} ?></textarea><br>
  Events Copy<br>
  <textarea name="seo_copy_events" id="" cols="30" rows="10"><?php if(get_option('seo_copy_events')){echo stripslashes(get_option('seo_copy_events'));} ?></textarea><br>
  Display Awards Submissions Copy<br>
  <textarea name="seo_copy_displays_awards_submissions" id="" cols="30" rows="10"><?php if(get_option('seo_copy_displays_awards_submissions')){echo stripslashes(get_option('seo_copy_displays_awards_submissions'));} ?></textarea><br>
  Collections - Home Copy<br>
  <textarea name="seo_copy_collections_home" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_home')){echo stripslashes(get_option('seo_copy_collections_home'));} ?></textarea><br>
  Collections - Home - Tabletop + Gourmet Housewares Copy<br>
  <textarea name="seo_copy_collections_home_tgh" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_home_tgh')){echo stripslashes(get_option('seo_copy_collections_home_tgh'));} ?></textarea><br>
  Collections - Home Accent on Design® Copy<br>
  <textarea name="seo_copy_collections_home_ad" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_home_ad')){echo stripslashes(get_option('seo_copy_collections_home_ad'));} ?></textarea><br>
  Collections - Home Home Furnishings + Textiles Copy<br>
  <textarea name="seo_copy_collections_home_hft" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_home_hft')){echo stripslashes(get_option('seo_copy_collections_home_hft'));} ?></textarea><br>
  Collections - Lifestyle Copy<br>
  <textarea name="seo_copy_collections_lifestyle" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_lifestyle')){echo stripslashes(get_option('seo_copy_collections_lifestyle'));} ?></textarea><br>

  Collections - Lifestyle Baby + Child Copy<br>
  <textarea name="seo_copy_collections_lifestyle_bc" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_lifestyle_bc')){echo stripslashes(get_option('seo_copy_collections_lifestyle_bc'));} ?></textarea><br>
  Collections - Lifestyle Gift Copy<br>
  <textarea name="seo_copy_collections_lifestyle_gift" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_lifestyle_gift')){echo stripslashes(get_option('seo_copy_collections_lifestyle_gift'));} ?></textarea><br>
  Collections - Lifestyle Personal Accessories Copy<br>
  <textarea name="seo_copy_collections_lifestyle_pa" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_lifestyle_pa')){echo stripslashes(get_option('seo_copy_collections_lifestyle_pa'));} ?></textarea><br>
  Collections - Lifestyle Personal Care + Wellness Copy<br>
  <textarea name="seo_copy_collections_lifestyle_pcw" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_lifestyle_pcw')){echo stripslashes(get_option('seo_copy_collections_lifestyle_pcw'));} ?></textarea><br>

  Collections - Handmade Copy<br>
  <textarea name="seo_copy_collections_handmade" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_handmade')){echo stripslashes(get_option('seo_copy_collections_handmade'));} ?></textarea><br>
  Collections - Handmade Stuff Copy<br>
  <textarea name="seo_copy_collections_handmade_stuff" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_handmade_stuff')){echo stripslashes(get_option('seo_copy_collections_handmade_stuff'));} ?></textarea><br>
  Collections - Handmade Artisan Resource® Copy<br>
  <textarea name="seo_copy_collections_handmade_ar" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_handmade_ar')){echo stripslashes(get_option('seo_copy_collections_handmade_ar'));} ?></textarea><br>
  Collections - Handmade Design Maker Copy<br>
  <textarea name="seo_copy_collections_handmade_dm" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_handmade_dm')){echo stripslashes(get_option('seo_copy_collections_handmade_dm'));} ?></textarea><br>
  Collections - Handmade Global Design Copy<br>
  <textarea name="seo_copy_collections_handmade_gd" id="" cols="30" rows="10"><?php if(get_option('seo_copy_collections_handmade_gd')){echo stripslashes(get_option('seo_copy_collections_handmade_gd'));} ?></textarea><br>

  <input type="submit" value="Update Options" >

</form>
<?php } 

/* THEME OPTIONS END */

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
  <aside class="widget-1 apply <?php if($device == "phone"){
    echo "visible-phone";
    } else if(is_front_page()) {
     
echo "hidden-phone";
    }
      ?>" >
    <hr class="thick">
    <a class="mklayout" href="<?= get_option('floor_plan_url') ?>">Market Layout</a>
    <hr>
    <a class="ex-list" href="<?= get_option('exhibitors_url') ?>">Exhibitor List</a>
   
    <a class="ex-ev" href="http://www.nynow.com/the-market/programs/">EVENTS & SEMINARS</a>

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
	?><p><a href="<?php echo post_permalink( $ID ); ?>"><strong style="font-size: inherit;"><?php the_title() ?></strong> - <?php the_subtitle() ?><a href="<?php echo post_permalink( $ID ); ?>" style="float: right;font-family: 'pt serif', times, serif;color:#ff5000; text-decoration: underline; font-style: italic;">Learn more</a></p><?php ;
 
  endforeach; 

}




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
    
    $result_title .= " for “<span style='color:#FF5A34;'>" . wp_specialchars($wp_query->query_vars['s'], 1) . "</span>”";
    
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
   wp_enqueue_style('fontawesome', 'http:////netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css', '', '4.2.0', 'all');
}

add_action('admin_init', 'fontawesome_dashboard');

function fontawesome_icon_dashboard() {

   echo '
<style type="text/css" media="screen">
		icon16.icon-media:before, #adminmenu .menu-icon-the-market div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f07a";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-collections div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f1b3";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-attendees div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0c0";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-exhibitors div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0d1";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-press div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f1ea";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-hotel_travel div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0fd";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-press-release div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f1ea";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-spon-opp div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f0d6";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-events div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f073";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-featured div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f135";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-home div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f015";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-lifestyle div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f06c";
     		}
		icon16.icon-media:before, #adminmenu .menu-icon-handmade div.wp-menu-image:before {
   			font-family: Fontawesome !important;
   			content: "\f1fd";
     		}
     	</style>';
 }
add_action('admin_head', 'fontawesome_icon_dashboard');

add_filter('gf_salesforce_implode_glue', 'change_salesforce_implode_glue');

/**
 * Change the way the data is submitted to salesforce to force submission as multi picklist values.
 * @param  string $glue  ',' or ';'
 * @param  array $field The field to modify the glue for
 * @return string        ',' or ';'
 */
function change_salesforce_implode_glue($glue, $field) {
    
    // Change this to the Salesforce API Name of the field that's not being passed properly.
    $name_of_sf_field = 'Product_Interest__c';

    // If the field being checked is the Salesforce field that is being truncated, return ';'
    if($field['inputName'] === $name_of_sf_field || $field['adminLabel'] === $name_of_sf_field) {
        return ';';
    }

    // Otherwise, return default.
    return $glue;
}
?>