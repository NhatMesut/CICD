<?php
/**
 * Theme functions and definitions
 *
 * @package T-Shirt Clothing
 */

// enque files
if ( ! function_exists( 't_shirt_clothing_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function t_shirt_clothing_enqueue_styles() {
		wp_enqueue_style( 'clothing-store-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 't-shirt-clothing-style', get_stylesheet_directory_uri() . '/style.css', array( 'clothing-store-style-parent' ), '1.0.0' );

		// Theme Customize CSS.
		require get_parent_theme_file_path( 'inc/extra_customization.php' );
		wp_add_inline_style( 't-shirt-clothing-style',$clothing_store_custom_style );

		require get_theme_file_path( 'inc/extra_customization.php' );
		wp_add_inline_style( 't-shirt-clothing-style',$clothing_store_custom_style );

		// blocks css
        wp_enqueue_style( 't-shirt-clothing-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 't-shirt-clothing-style' ), '1.0' );
	}
endif;
add_action( 'wp_enqueue_scripts', 't_shirt_clothing_enqueue_styles', 99 );

//theme setup
function t_shirt_clothing_setup() {
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( "wp-block-styles" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support('custom-background',array(
		'default-color' => 'ffffff',
	));
	add_image_size( 't-shirt-clothing-featured-image', 2000, 1200, true );
	add_image_size( 't-shirt-clothing-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 't-shirt-clothing' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height'  => true,
	) );

	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, and column width.
	*/
	add_editor_style( array( 'assets/css/editor-style.css', clothing_store_fonts_url() ) );
}
add_action( 'after_setup_theme', 't_shirt_clothing_setup' );

// widgets
function t_shirt_clothing_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 't-shirt-clothing' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 't-shirt-clothing' ),
		'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 't-shirt-clothing' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 't-shirt-clothing' ),
		'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 't-shirt-clothing' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 't-shirt-clothing' ),
		'before_widget' => '<section id="%1$s" class="widget wow zoomIn %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 't-shirt-clothing' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 't-shirt-clothing' ),
		'before_widget' => '<section id="%1$s" class="widget wow slideInLeft %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 't-shirt-clothing' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 't-shirt-clothing' ),
		'before_widget' => '<section id="%1$s" class="widget wow slideInLeft %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 't-shirt-clothing' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 't-shirt-clothing' ),
		'before_widget' => '<section id="%1$s" class="widget wow slideInRight %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 't-shirt-clothing' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 't-shirt-clothing' ),
		'before_widget' => '<section id="%1$s" class="widget wow slideInRight %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 't_shirt_clothing_widgets_init' );

// remove sections
function t_shirt_clothing_customize_register() {
  	global $wp_customize;

  	$wp_customize->remove_section( 'clothing_store_pro' );

  	$wp_customize->remove_setting( 'clothing_store_product_discount_text' );
  	$wp_customize->remove_control( 'clothing_store_product_discount_text' );

  	$wp_customize->remove_setting( 'clothing_store_product_discount_number' );
  	$wp_customize->remove_control( 'clothing_store_product_discount_number' );

  	$wp_customize->remove_setting( 'clothing_store_footer_text' );
  	$wp_customize->remove_control( 'clothing_store_footer_text' );

  	$wp_customize->remove_setting( 'clothing_store_slider_read_more' );
  	$wp_customize->remove_control( 'clothing_store_slider_read_more' );

  	$wp_customize->remove_setting( 'clothing_store_slider_content_alignment' );
  	$wp_customize->remove_control( 'clothing_store_slider_content_alignment' );

}
add_action( 'customize_register', 't_shirt_clothing_customize_register', 11 );

// dropdown sanitization
function t_shirt_clothing_sanitize_dropdown_pages( $page_id, $setting ) {
	$page_id = absint( $page_id );
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}
// product cat dropdown
function t_shirt_clothing_product_cat_dropdown(){
	if(get_option('t_shirt_clothing_product_cat_enable') == true ) {
		return true;
	}
	return false;
}

function t_shirt_clothing_customize( $wp_customize ) {

wp_enqueue_style('customizercustom_css', esc_url( get_stylesheet_directory_uri() ). '/assets/css/customizer.css');

	require get_theme_file_path( 'inc/custom-control.php' );

	// pro section
	$wp_customize->add_section('t_shirt_clothing_pro', array(
		'title'    => __('UPGRADE CLOTHING PREMIUM', 't-shirt-clothing'),
		'priority' => 1,
	));
	$wp_customize->add_setting('t_shirt_clothing_pro', array(
		'default'           => null,
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control(new T_Shirt_Clothing_Pro_Control($wp_customize, 't_shirt_clothing_pro', array(
		'label'    => __('T-SHIRT CLOTHING PREMIUM', 't-shirt-clothing'),
		'section'  => 't_shirt_clothing_pro',
		'settings' => 't_shirt_clothing_pro',
		'priority' => 1,
	)));

	//slider
	$wp_customize->add_setting('t_shirt_clothing_slider_read_more',array(
		'default' => 'Shop Now',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('t_shirt_clothing_slider_read_more',array(
		'label' => esc_html__('Button Text','t-shirt-clothing'),
		'section' => 'clothing_store_slider_section',
		'setting' => 't_shirt_clothing_slider_read_more',
		'type'    => 'text',
		'active_callback' => 'clothing_store_slider_dropdown',
	));

	$wp_customize->add_setting( 't_shirt_clothing_slider_content_alignment',
		array(
			'default' => 'RIGHT-ALIGN',
			'transport' => 'refresh',
			'sanitize_callback' => 'clothing_store_sanitize_choices'
		)
	);
	$wp_customize->add_control( new T_Shirt_Clothing_Text_Radio_Button_Custom_Control( $wp_customize, 't_shirt_clothing_slider_content_alignment',
		array(
			'type' => 'select',
			'label' => esc_html__( 'Slider Content Alignment', 't-shirt-clothing' ),
			'section' => 'clothing_store_slider_section',
			'choices' => array(
				'LEFT-ALIGN' => __('LEFT','t-shirt-clothing'),
	            'CENTER-ALIGN' => __('CENTER','t-shirt-clothing'),
	            'RIGHT-ALIGN' => __('RIGHT','t-shirt-clothing'),
			),
			'active_callback' => 'clothing_store_slider_dropdown',
		)
	) );
	
	// Product Category
	$wp_customize->add_section('t_shirt_clothing_product_category',array(
		'title' => esc_html__('Product Category Settings','t-shirt-clothing'),
		'priority' => 6,
		'panel' => 'clothing_store_custompage_panel',
	));
	$wp_customize->add_setting( 't_shirt_clothing_product_cat_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new T_Shirt_Clothing_Customizer_Customcontrol_Section_Heading( $wp_customize, 't_shirt_clothing_product_cat_heading', array(
			'label'       => esc_html__( 'Product Category Settings', 't-shirt-clothing' ),	
			'section'     => 't_shirt_clothing_product_category',
			'settings'    => 't_shirt_clothing_product_cat_heading',
	) ) );
	$wp_customize->add_setting(
		't_shirt_clothing_product_cat_enable',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'clothing_store_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new T_Shirt_Clothing_Customizer_Customcontrol_Switch(
			$wp_customize,
			't_shirt_clothing_product_cat_enable',
			array(
				'settings'        => 't_shirt_clothing_product_cat_enable',
				'section'         => 't_shirt_clothing_product_category',
				'label'           => __( 'Check To show Section', 't-shirt-clothing' ),				
				'choices'		  => array(
					'1'      => __( 'On', 't-shirt-clothing' ),
					'off'    => __( 'Off', 't-shirt-clothing' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting('t_shirt_clothing_product_category_title',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('t_shirt_clothing_product_category_title',array(
		'label' => esc_html__('Section First Title','t-shirt-clothing'),
		'section' => 't_shirt_clothing_product_category',
		'setting' => 't_shirt_clothing_product_category_title',
		'type'    => 'text',
		'active_callback' => 't_shirt_clothing_product_cat_dropdown',
	));
	$wp_customize->add_setting('t_shirt_clothing_product_category_subtitle',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('t_shirt_clothing_product_category_subtitle',array(
		'label' => esc_html__('Section Second Title','t-shirt-clothing'),
		'section' => 't_shirt_clothing_product_category',
		'setting' => 't_shirt_clothing_product_category_subtitle',
		'type'    => 'text',
		'active_callback' => 't_shirt_clothing_product_cat_dropdown',
	));

	$t_shirt_clothing_categories = get_categories();
	$t_shirt_clothing_cats = array();
	$i = 0;
	$t_shirt_clothing_cat_post[]= 'select';
	foreach($t_shirt_clothing_categories as $t_shirt_clothing_category){
	if($i==0){
	  $default = $t_shirt_clothing_category->slug;
	  $i++;
	}
	$t_shirt_clothing_cat_post[$t_shirt_clothing_category->slug] = $t_shirt_clothing_category->name;
	}

	$wp_customize->add_setting('t_shirt_clothing_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'clothing_store_sanitize_select',
	));
	$wp_customize->add_control('t_shirt_clothing_category_setting',array(
		'type'    => 'select',
		'choices' => $t_shirt_clothing_cat_post,
		'label' => esc_html__('Select Category to display Post','t-shirt-clothing'),
		'section' => 't_shirt_clothing_product_category',
		'active_callback' => 't_shirt_clothing_product_cat_dropdown',
	));

	$wp_customize->add_setting('t_shirt_clothing_footer_text',array(
		'default'	=> 'T-Shirt Clothing WordPress Theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('t_shirt_clothing_footer_text',array(
		'label'	=> esc_html__('Copyright Text','t-shirt-clothing'),
		'section'	=> 'clothing_store_footer_copyright',
		'type'		=> 'textarea'
	));
	$wp_customize->selective_refresh->add_partial( 't_shirt_clothing_footer_text', array(
		'selector' => '.site-info a',
		'render_callback' => 'clothing_store_customize_partial_t_shirt_clothing_footer_text',
	) );
}
add_action( 'customize_register', 't_shirt_clothing_customize' );

// comments
function t_shirt_clothing_enqueue_comments_reply() {
  if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
    // Load comment-reply.js (into footer)
    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
  }
}
add_action(  'wp_enqueue_scripts', 't_shirt_clothing_enqueue_comments_reply' );

// Footer Text
function t_shirt_clothing_copyright_link() {
    $t_shirt_clothing_footer_text = get_theme_mod('t_shirt_clothing_footer_text', esc_html__('T-Shirt Clothing WordPress Theme', 't-shirt-clothing'));
    $t_shirt_clothing_credit_link = esc_url('https://www.ovationthemes.com/products/free-t-shirt-wordpress-theme/');

    echo '<a href="' . $t_shirt_clothing_credit_link . '" target="_blank">' . esc_html($t_shirt_clothing_footer_text) . '<span class="footer-copyright">' . esc_html__(' By Ovation Themes', 't-shirt-clothing') . '</span></a>';
}

define('T_SHIRT_CLOTHING_PRO_LINK',__('https://www.ovationthemes.com/products/t-shirt-clothing-wordpress-theme/','t-shirt-clothing'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('T_Shirt_Clothing_Pro_Control')):
    class T_Shirt_Clothing_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
            <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( T_SHIRT_CLOTHING_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE T-SHIRT CLOTHING PREMIUM','t-shirt-clothing');?> </a>
            </div>
            <div class="col-md">
                <img class="t_shirt_clothing_img_responsive " src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png">
            </div>
            <div class="col-md">
                <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('CLOTHING PREMIUM - Features', 't-shirt-clothing'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 't-shirt-clothing');?> </li>
                    <li class="upsell-t_shirt_clothing"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 't-shirt-clothing');?> </li>
                </ul>
            </div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( T_SHIRT_CLOTHING_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE CLOTHING PREMIUM','t-shirt-clothing');?> </a>
            </div>
        </label>
    <?php } }
endif;

if ( ! defined( 'CLOTHING_STORE_SUPPORT' ) ) {
	define('CLOTHING_STORE_SUPPORT',__('https://wordpress.org/support/theme/t-shirt-clothing','t-shirt-clothing'));
}
if ( ! defined( 'CLOTHING_STORE_REVIEW' ) ) {
	define('CLOTHING_STORE_REVIEW',__('https://wordpress.org/support/theme/t-shirt-clothing/reviews/#new-post','t-shirt-clothing'));
}
if ( ! defined( 'CLOTHING_STORE_LIVE_DEMO' ) ) {
define('CLOTHING_STORE_LIVE_DEMO',__('https://trial.ovationthemes.com/t-shirt-clothing/','t-shirt-clothing'));
}
if ( ! defined( 'CLOTHING_STORE_BUY_PRO' ) ) {
define('CLOTHING_STORE_BUY_PRO',__('https://www.ovationthemes.com/products/t-shirt-clothing-wordpress-theme/','t-shirt-clothing'));
}
if ( ! defined( 'CLOTHING_STORE_PRO_DOC' ) ) {
define('CLOTHING_STORE_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-t-shirt-clothing-pro-doc/','t-shirt-clothing'));
}
if ( ! defined( 'CLOTHING_STORE_FREE_DOC' ) ) {
define('CLOTHING_STORE_FREE_DOC',__('https://trial.ovationthemes.com/docs/ot-t-shirt-clothing-free-doc','t-shirt-clothing'));
}
if ( ! defined( 'CLOTHING_STORE_THEME_NAME' ) ) {
define('CLOTHING_STORE_THEME_NAME',__('Premium T-Shirt Clothing Theme','t-shirt-clothing'));
}