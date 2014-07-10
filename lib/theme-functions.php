<?php
/**
 * _mbbasetheme theme functions definted in /lib/init.php
 *
 * @package _mbbasetheme
 */


/**
 * Register Widget Areas
 */
function mb_widgets_init() {
	// Main Sidebar
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_mbbasetheme' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	// Footer Sidebar
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', '_mbbasetheme' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s item">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );}

/**
 * Remove Dashboard Meta Boxes
 */
function mb_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	// unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

/**
 * Change Admin Menu Order
 */
function mb_custom_menu_order( $menu_ord ) {
	if ( !$menu_ord ) return true;
	return array(
		// 'index.php', // Dashboard
		// 'separator1', // First separator
		// 'edit.php?post_type=page', // Pages
		// 'edit.php', // Posts
		// 'upload.php', // Media
		// 'gf_edit_forms', // Gravity Forms
		// 'genesis', // Genesis
		// 'edit-comments.php', // Comments
		// 'separator2', // Second separator
		// 'themes.php', // Appearance
		// 'plugins.php', // Plugins
		// 'users.php', // Users
		// 'tools.php', // Tools
		// 'options-general.php', // Settings
		// 'separator-last', // Last separator
	);
}

/**
 * Hide Admin Areas that are not used
 */
function mb_remove_menu_pages() {
	// remove_menu_page( 'link-manager.php' );
}

/**
 * Remove default link for images
 */
function mb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ( $image_set !== 'none' ) {
		update_option( 'image_default_link_type', 'none' );
	}
}

/**
 * Show Kitchen Sink in WYSIWYG Editor
 */
function mb_unhide_kitchensink( $args ) {
	$args['wordpress_adv_hidden'] = false;
	return $args;
}

/**
 * Enqueue scripts
 */
function mbdmaster324_scripts() {
	
	global $wp_styles;

	// Load the main stylesheet
	wp_enqueue_style( 'mbdmaster324-style', get_stylesheet_directory_uri() . '/style.css' );

	// Add conditional IE stylesheet
	wp_enqueue_style( 'mbdmaster324-style-ie', get_stylesheet_directory_uri() . "/ie.css", array( 'mbdmaster324' )  );
    $wp_styles->add_data( 'mbdmaster324-style--ie', 'conditional', '(lt IE 9) & (!IEMobile)' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( !is_admin() ) {
		
		wp_enqueue_script( 'jquery' );

		// Typekit script 
		// wp_enqueue_script( 'mbdmaster324-style-typekit', '//use.typekit.net/xxxxxxx.js');

		// Enqueue javascript plugins
		/** 
		 * Ensure all plugins you want to enqueue are listed in Gruntfile.js!
		 */
		wp_enqueue_script( 'mbdmaster324-customplugins', get_stylesheet_directory_uri() . '/assets/js/plugins.min.js', array());
		
		// Custom scripts
		wp_enqueue_script( 'mbdmaster324_customscripts', get_stylesheet_directory_uri() . '/assets/js/main.min.js', array() );

	}
}

/**
 * Add Typekit Webfonts Inline Script
 */	
function mbdmaster324_typekit_inline() {
	
	/* Conditionally loads the Typekit script inline if fonts are enqueued */
	
	if ( wp_script_is( 'mbdmaster324-typekit', 'done' ) ) { 
		echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>'; 
	}
}


/**
 * Remove Query Strings From Static Resources
 */
function mb_remove_script_version( $src ){
	$parts = explode( '?ver', $src );
	return $parts[0];
}

/**
 * Remove Read More Jump
 */
function mb_remove_more_jump_link( $link ) {
	$offset = strpos( $link, '#more-' );
	if ($offset) {
		$end = strpos( $link, '"',$offset );
	}
	if ($end) {
		$link = substr_replace( $link, '', $offset, $end-$offset );
	}
	return $link;
}

/**
 * Custom body classes
 */
function mbdmaster_body_classes( $classes ) {

	/*
	 * Since we used 'option' in add_setting arguments array
	 * we retrieve the value by using get_option function
	 */
	$mbdmaster_settings = get_option( 'mbdmaster_settings' );	
	
	$classes[] = $mbdmaster_settings['layout_setting'];
	
	return $classes;

}	
