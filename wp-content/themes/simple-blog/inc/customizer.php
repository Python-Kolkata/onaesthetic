<?php
/**
 * simple blog Theme Customizer
 *
 * @package simple_blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function simple_blog_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'simple_blog_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'simple_blog_customize_partial_blogdescription',
			)
		);
	}
	 // -------- Contact details section ----------
	 $wp_customize->add_section('simple_blog_contact_handle', array(
        'title'         => __('Contact Details', 'simple_blog'),
        'description'   => '',
        'priority'      => 70,
    ));
   // Contact Phone
    $wp_customize->add_setting('contact_phone', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'type'          => 'theme_mod'

    ));
    $wp_customize->add_control('simple_blog_contact_phone', array(
        'label'      => __('Phone', 'simple-blog'),
        'section'    => 'simple_blog_contact_handle',
        'settings'   => 'contact_phone',
    ));
   // Email
    $wp_customize->add_setting('contact_email', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'type'          => 'theme_mod'

    ));
    $wp_customize->add_control('simple_blog_contact_email', array(
        'label'      => __('Contact Email', 'simple_blog'),
        'section'    => 'simple_blog_contact_handle',
        'settings'   => 'contact_email',
    ));
	// Address 
	$wp_customize->add_setting('contact_address', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'type'          => 'theme_mod'

    ));
    $wp_customize->add_control('simple_blog_contact_address', array(
        'label'      => __('Contact Address', 'simple_blog'),
        'section'    => 'simple_blog_contact_handle',
        'settings'   => 'contact_address',
    ));
    // -------- Contact details section ----------

    // -------- Social media section ----------
    // facebook
    $wp_customize->add_section('simple_blog_socialmedia_handle', array(
        'title'         => __('Social media Details', 'simple_blog'),
        'description'   => '',
        'priority'      => 70,
    ));
    $wp_customize->add_setting('simple_blog_facebook_ads', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'type'          => 'theme_mod'

    ));
    $wp_customize->add_control('simple_blog_facebook', array(
        'label'      => __('Facebook Ads', 'simple_blog'),
        'section'    => 'simple_blog_socialmedia_handle',
        'settings'   => 'simple_blog_facebook_ads',
    ));
    // Instagram
    $wp_customize->add_setting('simple_blog_instagram_ads', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'type'          => 'theme_mod'

    ));
    $wp_customize->add_control('simple_blog_instagram', array(
        'label'      => __('Instagram Ads', 'simple_blog'),
        'section'    => 'simple_blog_socialmedia_handle',
        'settings'   => 'simple_blog_instagram_ads',
    ));
	// twiiter
    $wp_customize->add_setting('simple_blog_twitter_ads', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'type'          => 'theme_mod'

    ));
    $wp_customize->add_control('simple_blog_twitter', array(
        'label'      => __('Twitter Ads', 'simple_blog'),
        'section'    => 'simple_blog_socialmedia_handle',
        'settings'   => 'simple_blog_twitter_ads',
    ));
	// twiiter
    $wp_customize->add_setting('simple_blog_youtube_ads', array(
        'default'       => '',
        'capability'    => 'edit_theme_options',
        'type'          => 'theme_mod'

    ));
    $wp_customize->add_control('simple_blog_youtube', array(
        'label'      => __('You Tube Ads', 'simple_blog'),
        'section'    => 'simple_blog_socialmedia_handle',
        'settings'   => 'simple_blog_youtube_ads',
    ));
	// -------- Social media section ----------
}
add_action( 'customize_register', 'simple_blog_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function simple_blog_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function simple_blog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function simple_blog_customize_preview_js() {
	wp_enqueue_script( 'simple-blog-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'simple_blog_customize_preview_js' );
