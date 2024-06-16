<?php

/*---------------------------First highlight color-------------------*/

	$vw_storefront_first_color = get_theme_mod('vw_storefront_first_color');

	$vw_storefront_custom_css= "";

	if($vw_storefront_first_color != false){
		$vw_storefront_custom_css .='span.cart-value, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, .woocommerce span.onsale, #preloader,.bradcrumbs a,.bradcrumbs span,.post-categories li a{';
			$vw_storefront_custom_css .='background: '.esc_attr($vw_storefront_first_color).';';
		$vw_storefront_custom_css .='}';
	}

	if($vw_storefront_first_color != false){
		$vw_storefront_custom_css .='a, .phone_no i, .main-navigation a:hover, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a, .main-navigation ul.sub-menu a:hover, .heading-txt p, #footer .textwidget a, #footer li a:hover, #sidebar ul li a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .post-navigation a:hover, .post-navigation a:focus, .main-navigation a:hover, .post-main-box:hover span a, .post-main-box:hover h2 a, .post-info:hover span a, .phone_no a:hover, .logo .site-title a:hover, .account a:hover, .cart_no a:hover, #slider .inner_carousel h1 a:hover, #comments p a, #content-vw a{';
			$vw_storefront_custom_css .='color: '.esc_attr($vw_storefront_first_color).';';
		$vw_storefront_custom_css .='}';
	}	
	if($vw_storefront_first_color != false){
		$vw_storefront_custom_css .='.main-navigation ul ul, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover{';
			$vw_storefront_custom_css .='border-color: '.esc_attr($vw_storefront_first_color).';';
		$vw_storefront_custom_css .='}';
	}

	/*--------------------Second highlight color-------------------*/

	$vw_storefront_second_color = get_theme_mod('vw_storefront_second_color');

	if($vw_storefront_first_color != false || $vw_storefront_second_color != false){
		$vw_storefront_custom_css .='input[type="submit"], .top-bar, .more-btn a, #footer-2, .scrollup i, #comments input[type="submit"], #comments a.comment-reply-link, #sidebar .custom-social-icons i, #footer .custom-social-icons i, #sidebar h3, .pagination span, .pagination a, #footer a.custom_read_more, #sidebar a.custom_read_more, .widget_product_search button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .toggle-nav i, .wp-block-button__link, #footer .tagcloud a:hover, #sidebar .wp-block-search .wp-block-search__label, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, .wp-block-tag-cloud a:hover, #sidebar .wp-block-heading,.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wc-block-components-order-summary-item__quantity{
		background: linear-gradient(to right, '.esc_attr($vw_storefront_first_color).', '.esc_attr($vw_storefront_second_color).')!important;
		}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_storefront_theme_lay = get_theme_mod( 'vw_storefront_width_option','Full Width');
    if($vw_storefront_theme_lay == 'Boxed'){
		$vw_storefront_custom_css .='body{';
			$vw_storefront_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='#slider{';
			$vw_storefront_custom_css .='right: 1%;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='right: 100px;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='.scrollup.left i{';
			$vw_storefront_custom_css .='left: 100px;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_theme_lay == 'Wide Width'){
		$vw_storefront_custom_css .='body{';
			$vw_storefront_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='right: 30px;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='.scrollup.left i{';
			$vw_storefront_custom_css .='left: 30px;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_theme_lay == 'Full Width'){
		$vw_storefront_custom_css .='body{';
			$vw_storefront_custom_css .='max-width: 100%;';
		$vw_storefront_custom_css .='}';
	}

	/*----------------Slider Content Layout -------------------*/

	$vw_storefront_theme_lay = get_theme_mod( 'vw_storefront_slider_content_option','Left');
    if($vw_storefront_theme_lay == 'Left'){
		$vw_storefront_custom_css .='#slider .carousel-caption{';
			$vw_storefront_custom_css .='text-align:left;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_theme_lay == 'Center'){
		$vw_storefront_custom_css .='#slider .carousel-caption{';
			$vw_storefront_custom_css .='text-align:center; right: 25%; left: 25%;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_theme_lay == 'Right'){
		$vw_storefront_custom_css .='#slider .carousel-caption{';
			$vw_storefront_custom_css .='text-align:right; right: 10%; left: 45%;';
		$vw_storefront_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_storefront_slider_content_padding_top_bottom = get_theme_mod('vw_storefront_slider_content_padding_top_bottom');
	$vw_storefront_slider_content_padding_left_right = get_theme_mod('vw_storefront_slider_content_padding_left_right');
	if($vw_storefront_slider_content_padding_top_bottom != false || $vw_storefront_slider_content_padding_left_right != false){
		$vw_storefront_custom_css .='#slider .carousel-caption{';
			$vw_storefront_custom_css .='top: '.esc_attr($vw_storefront_slider_content_padding_top_bottom).'; bottom: '.esc_attr($vw_storefront_slider_content_padding_top_bottom).';left: '.esc_attr($vw_storefront_slider_content_padding_left_right).';right: '.esc_attr($vw_storefront_slider_content_padding_left_right).';';
		$vw_storefront_custom_css .='}';
	}

		/*------------------ Slider Opacity -------------------*/

	$vw_storefront_theme_lay = get_theme_mod( 'vw_storefront_slider_opacity_color','0.5');
	if($vw_storefront_theme_lay == '0'){
		$vw_storefront_custom_css .='#slider img{';
			$vw_storefront_custom_css .='opacity:0';
		$vw_storefront_custom_css .='}';
		}else if($vw_storefront_theme_lay == '0.1'){
		$vw_storefront_custom_css .='#slider img{';
			$vw_storefront_custom_css .='opacity:0.1';
		$vw_storefront_custom_css .='}';
		}else if($vw_storefront_theme_lay == '0.2'){
		$vw_storefront_custom_css .='#slider img{';
			$vw_storefront_custom_css .='opacity:0.2';
		$vw_storefront_custom_css .='}';
		}else if($vw_storefront_theme_lay == '0.3'){
		$vw_storefront_custom_css .='#slider img{';
			$vw_storefront_custom_css .='opacity:0.3';
		$vw_storefront_custom_css .='}';
		}else if($vw_storefront_theme_lay == '0.4'){
		$vw_storefront_custom_css .='#slider img{';
			$vw_storefront_custom_css .='opacity:0.4';
		$vw_storefront_custom_css .='}';
		}else if($vw_storefront_theme_lay == '0.5'){
		$vw_storefront_custom_css .='#slider img{';
			$vw_storefront_custom_css .='opacity:0.5';
		$vw_storefront_custom_css .='}';
		}else if($vw_storefront_theme_lay == '0.6'){
		$vw_storefront_custom_css .='#slider img{';
			$vw_storefront_custom_css .='opacity:0.6';
		$vw_storefront_custom_css .='}';
		}else if($vw_storefront_theme_lay == '0.7'){
		$vw_storefront_custom_css .='#slider img{';
			$vw_storefront_custom_css .='opacity:0.7';
		$vw_storefront_custom_css .='}';
		}else if($vw_storefront_theme_lay == '0.8'){
		$vw_storefront_custom_css .='#slider img{';
			$vw_storefront_custom_css .='opacity:0.8';
		$vw_storefront_custom_css .='}';
		}else if($vw_storefront_theme_lay == '0.9'){
		$vw_storefront_custom_css .='#slider img{';
			$vw_storefront_custom_css .='opacity:0.9';
		$vw_storefront_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$vw_storefront_slider_image_overlay = get_theme_mod('vw_storefront_slider_image_overlay', true);
	if($vw_storefront_slider_image_overlay == false){
		$vw_storefront_custom_css .='#slider img{';
			$vw_storefront_custom_css .='opacity:1;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_slider_image_overlay_color = get_theme_mod('vw_storefront_slider_image_overlay_color', true);
	if($vw_storefront_slider_image_overlay_color != false){
		$vw_storefront_custom_css .='#slider{';
			$vw_storefront_custom_css .='background-color: '.esc_attr($vw_storefront_slider_image_overlay_color).';';
		$vw_storefront_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_storefront_theme_lay = get_theme_mod( 'vw_storefront_blog_layout_option','Default');
    if($vw_storefront_theme_lay == 'Default'){
		$vw_storefront_custom_css .='.post-main-box{';
			$vw_storefront_custom_css .='';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_theme_lay == 'Center'){
		$vw_storefront_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p{';
			$vw_storefront_custom_css .='text-align:center;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='.post-info{';
			$vw_storefront_custom_css .='margin-top:10px;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_theme_lay == 'Left'){
		$vw_storefront_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, #our-services p{';
			$vw_storefront_custom_css .='text-align:Left;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='.post-main-box h2{';
			$vw_storefront_custom_css .='margin-top:10px;';
		$vw_storefront_custom_css .='}';
	}

	// featured image dimention
	$vw_storefront_blog_post_featured_image_dimension = get_theme_mod('vw_storefront_blog_post_featured_image_dimension', 'default');
	$vw_storefront_blog_post_featured_image_custom_width = get_theme_mod('vw_storefront_blog_post_featured_image_custom_width',250);
	$vw_storefront_blog_post_featured_image_custom_height = get_theme_mod('vw_storefront_blog_post_featured_image_custom_height',250);
	if($vw_storefront_blog_post_featured_image_dimension == 'custom'){
		$vw_storefront_custom_css .='.post-main-box img{';
			$vw_storefront_custom_css .='width: '.esc_attr($vw_storefront_blog_post_featured_image_custom_width).'; height: '.esc_attr($vw_storefront_blog_post_featured_image_custom_height).';';
		$vw_storefront_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$vw_storefront_blog_page_posts_settings = get_theme_mod( 'vw_storefront_blog_page_posts_settings','Into Blocks');
    if($vw_storefront_blog_page_posts_settings == 'Without Blocks'){
		$vw_storefront_custom_css .='.post-main-box{';
			$vw_storefront_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_storefront_custom_css .='}';
	} 

	/*--------------------- Grid Posts -------------------*/

	$vw_storefront_display_grid_posts_settings = get_theme_mod( 'vw_storefront_display_grid_posts_settings','Into Blocks');
    if($vw_storefront_display_grid_posts_settings == 'Without Blocks'){
		$vw_storefront_custom_css .='.grid-post-main-box{';
			$vw_storefront_custom_css .='box-shadow: none; border: none; margin:30px 0; background: none;';
		$vw_storefront_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$vw_storefront_resp_slider = get_theme_mod( 'vw_storefront_resp_slider_hide_show',true);
	if($vw_storefront_resp_slider == true && get_theme_mod( 'vw_storefront_slider_arrows', false) == false){
    	$vw_storefront_custom_css .='#slider{';
			$vw_storefront_custom_css .='display:none;';
		$vw_storefront_custom_css .='} ';
	}
    if($vw_storefront_resp_slider == true){
    	$vw_storefront_custom_css .='@media screen and (max-width:575px) {';
		$vw_storefront_custom_css .='#slider{';
			$vw_storefront_custom_css .='display:block;';
		$vw_storefront_custom_css .='} }';
	}else if($vw_storefront_resp_slider == false){
		$vw_storefront_custom_css .='@media screen and (max-width:575px) {';
		$vw_storefront_custom_css .='#slider{';
			$vw_storefront_custom_css .='display:none;';
		$vw_storefront_custom_css .='} }';
	}

	$vw_storefront_resp_sidebar = get_theme_mod( 'vw_storefront_sidebar_hide_show',true);
    if($vw_storefront_resp_sidebar == true){
    	$vw_storefront_custom_css .='@media screen and (max-width:575px) {';
		$vw_storefront_custom_css .='#sidebar{';
			$vw_storefront_custom_css .='display:block;';
		$vw_storefront_custom_css .='} }';
	}else if($vw_storefront_resp_sidebar == false){
		$vw_storefront_custom_css .='@media screen and (max-width:575px) {';
		$vw_storefront_custom_css .='#sidebar{';
			$vw_storefront_custom_css .='display:none;';
		$vw_storefront_custom_css .='} }';
	}

	$vw_storefront_resp_scroll_top = get_theme_mod( 'vw_storefront_resp_scroll_top_hide_show',true);
	if($vw_storefront_resp_scroll_top == true && get_theme_mod( 'vw_storefront_footer_scroll',true) != true){
    	$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='visibility:hidden !important;';
		$vw_storefront_custom_css .='} ';
	}
    if($vw_storefront_resp_scroll_top == true){
    	$vw_storefront_custom_css .='@media screen and (max-width:575px) {';
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='visibility:visible !important;';
		$vw_storefront_custom_css .='} }';
	}else if($vw_storefront_resp_scroll_top == false){
		$vw_storefront_custom_css .='@media screen and (max-width:575px){';
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='visibility:hidden !important;';
		$vw_storefront_custom_css .='} }';
	}

	$vw_storefront_resp_menu_toggle_btn_bg_color = get_theme_mod('vw_storefront_resp_menu_toggle_btn_bg_color');
	if($vw_storefront_resp_menu_toggle_btn_bg_color != false){
		$vw_storefront_custom_css .='.toggle-nav i{';
			$vw_storefront_custom_css .='background: '.esc_attr($vw_storefront_resp_menu_toggle_btn_bg_color).';';
		$vw_storefront_custom_css .='}';
	}

	/*---------------- Blog Page ------------------*/

	$vw_storefront_featured_image_border_radius = get_theme_mod('vw_storefront_featured_image_border_radius', 0);
	if($vw_storefront_featured_image_border_radius != false){
		$vw_storefront_custom_css .='.box-image img, .feature-box img{';
			$vw_storefront_custom_css .='border-radius: '.esc_attr($vw_storefront_featured_image_border_radius).'px;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_featured_image_box_shadow = get_theme_mod('vw_storefront_featured_image_box_shadow',0);
	if($vw_storefront_featured_image_box_shadow != false){
		$vw_storefront_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$vw_storefront_custom_css .='box-shadow: '.esc_attr($vw_storefront_featured_image_box_shadow).'px '.esc_attr($vw_storefront_featured_image_box_shadow).'px '.esc_attr($vw_storefront_featured_image_box_shadow).'px #cccccc;';
		$vw_storefront_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_storefront_button_padding_top_bottom = get_theme_mod('vw_storefront_button_padding_top_bottom');
	$vw_storefront_button_padding_left_right = get_theme_mod('vw_storefront_button_padding_left_right');
	if($vw_storefront_button_padding_top_bottom != false || $vw_storefront_button_padding_left_right != false){
		$vw_storefront_custom_css .='.post-main-box .more-btn a{';
			$vw_storefront_custom_css .='padding-top: '.esc_attr($vw_storefront_button_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_storefront_button_padding_top_bottom).';padding-left: '.esc_attr($vw_storefront_button_padding_left_right).';padding-right: '.esc_attr($vw_storefront_button_padding_left_right).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_button_border_radius = get_theme_mod('vw_storefront_button_border_radius');
	if($vw_storefront_button_border_radius != false){
		$vw_storefront_custom_css .='.post-main-box .more-btn a{';
			$vw_storefront_custom_css .='border-radius: '.esc_attr($vw_storefront_button_border_radius).'px;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_button_font_size = get_theme_mod('vw_storefront_button_font_size',14);
	$vw_storefront_custom_css .='.post-main-box .more-btn a{';
		$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_button_font_size).';';
	$vw_storefront_custom_css .='}';

	$vw_storefront_theme_lay = get_theme_mod( 'vw_storefront_button_text_transform','Uppercase');
	if($vw_storefront_theme_lay == 'Capitalize'){
		$vw_storefront_custom_css .='.post-main-box .more-btn a{';
			$vw_storefront_custom_css .='text-transform:Capitalize;';
		$vw_storefront_custom_css .='}';
	}
	if($vw_storefront_theme_lay == 'Lowercase'){
		$vw_storefront_custom_css .='.post-main-box .more-btn a{';
			$vw_storefront_custom_css .='text-transform:Lowercase;';
		$vw_storefront_custom_css .='}';
	}
	if($vw_storefront_theme_lay == 'Uppercase'){
		$vw_storefront_custom_css .='.post-main-box .more-btn a{';
			$vw_storefront_custom_css .='text-transform:Uppercase;';
		$vw_storefront_custom_css .='}';
	} 

	$vw_storefront_button_letter_spacing = get_theme_mod('vw_storefront_button_letter_spacing',14);
	$vw_storefront_custom_css .='.post-main-box .more-btn a{';
		$vw_storefront_custom_css .='letter-spacing: '.esc_attr($vw_storefront_button_letter_spacing).';';
	$vw_storefront_custom_css .='}';

	/*------------- Single Blog Page------------------*/

	$vw_storefront_single_blog_comment_title = get_theme_mod('vw_storefront_single_blog_comment_title', 'Leave a Reply');
	if($vw_storefront_single_blog_comment_title == ''){
		$vw_storefront_custom_css .='#comments h2#reply-title {';
			$vw_storefront_custom_css .='display: none;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_single_blog_comment_button_text = get_theme_mod('vw_storefront_single_blog_comment_button_text', 'Post Comment');
	if($vw_storefront_single_blog_comment_button_text == ''){
		$vw_storefront_custom_css .='#comments p.form-submit {';
			$vw_storefront_custom_css .='display: none;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_comment_width = get_theme_mod('vw_storefront_single_blog_comment_width');
	if($vw_storefront_comment_width != false){
		$vw_storefront_custom_css .='#comments textarea{';
			$vw_storefront_custom_css .='width: '.esc_attr($vw_storefront_comment_width).';';
		$vw_storefront_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_storefront_copyright_first_color = get_theme_mod('vw_storefront_copyright_first_color');

	$vw_storefront_copyright_second_color = get_theme_mod('vw_storefront_copyright_second_color');

	if($vw_storefront_copyright_first_color != false || $vw_storefront_copyright_second_color != false){
		$vw_storefront_custom_css .='#footer-2{
		background: linear-gradient(to right, '.esc_attr($vw_storefront_copyright_first_color).', '.esc_attr($vw_storefront_copyright_second_color).');
		}';
	}

	$vw_storefront_footer_background_color = get_theme_mod('vw_storefront_footer_background_color');
	if($vw_storefront_footer_background_color != false){
		$vw_storefront_custom_css .='#footer{';
			$vw_storefront_custom_css .='background-color: '.esc_attr($vw_storefront_footer_background_color).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_copyright_alingment = get_theme_mod('vw_storefront_copyright_alingment');
	if($vw_storefront_copyright_alingment != false){
		$vw_storefront_custom_css .='.copyright p{';
			$vw_storefront_custom_css .='text-align: '.esc_attr($vw_storefront_copyright_alingment).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_copyright_padding_top_bottom = get_theme_mod('vw_storefront_copyright_padding_top_bottom');
	if($vw_storefront_copyright_padding_top_bottom != false){
		$vw_storefront_custom_css .='#footer-2{';
			$vw_storefront_custom_css .='padding-top: '.esc_attr($vw_storefront_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_storefront_copyright_padding_top_bottom).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_footer_widgets_heading = get_theme_mod( 'vw_storefront_footer_widgets_heading','Left');
    if($vw_storefront_footer_widgets_heading == 'Left'){
		$vw_storefront_custom_css .='#footer h3, #footer h3 .wp-block-search .wp-block-search__label{';
		$vw_storefront_custom_css .='text-align: left;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_footer_widgets_heading == 'Center'){
		$vw_storefront_custom_css .='#footer h3, #footer h3 .wp-block-search .wp-block-search__label{';
			$vw_storefront_custom_css .='text-align: center;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_footer_widgets_heading == 'Right'){
		$vw_storefront_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_storefront_custom_css .='text-align: right;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_footer_widgets_content = get_theme_mod( 'vw_storefront_footer_widgets_content','Left');
    if($vw_storefront_footer_widgets_content == 'Left'){
		$vw_storefront_custom_css .='#footer li{';
		$vw_storefront_custom_css .='text-align: left;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_footer_widgets_content == 'Center'){
		$vw_storefront_custom_css .='#footer li{';
			$vw_storefront_custom_css .='text-align: center;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_footer_widgets_content == 'Right'){
		$vw_storefront_custom_css .='#footer li{';
			$vw_storefront_custom_css .='text-align: right;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_footer_padding = get_theme_mod('vw_storefront_footer_padding');
	if($vw_storefront_footer_padding != false){
		$vw_storefront_custom_css .='#footer{';
			$vw_storefront_custom_css .='padding: '.esc_attr($vw_storefront_footer_padding).' 0;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_footer_icon = get_theme_mod('vw_storefront_footer_icon');
	if($vw_storefront_footer_icon == false){
		$vw_storefront_custom_css .='.copyright p{';
			$vw_storefront_custom_css .='width:100%; text-align:center; float:none;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_footer_background_image = get_theme_mod('vw_storefront_footer_background_image');
	if($vw_storefront_footer_background_image != false){
		$vw_storefront_custom_css .='#footer{';
			$vw_storefront_custom_css .='background: url('.esc_attr($vw_storefront_footer_background_image).'); background-size: cover;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_theme_lay = get_theme_mod( 'vw_storefront_img_footer','scroll');
	if($vw_storefront_theme_lay == 'fixed'){
		$vw_storefront_custom_css .='#footer{';
			$vw_storefront_custom_css .='background-attachment: fixed !important;';
		$vw_storefront_custom_css .='}';
	}elseif ($vw_storefront_theme_lay == 'scroll'){
		$vw_storefront_custom_css .='#footer{';
			$vw_storefront_custom_css .='background-attachment: scroll !important;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_footer_img_position = get_theme_mod('vw_storefront_footer_img_position','center center');
	if($vw_storefront_footer_img_position != false){
		$vw_storefront_custom_css .='#footer{';
			$vw_storefront_custom_css .='background-position: '.esc_attr($vw_storefront_footer_img_position).'!important;';
		$vw_storefront_custom_css .='}';
	} 
	/*----------------Sroll to top Settings ------------------*/

	$vw_storefront_scroll_to_top_font_size = get_theme_mod('vw_storefront_scroll_to_top_font_size');
	if($vw_storefront_scroll_to_top_font_size != false){
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_scroll_to_top_font_size).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_scroll_to_top_padding = get_theme_mod('vw_storefront_scroll_to_top_padding');
	$vw_storefront_scroll_to_top_padding = get_theme_mod('vw_storefront_scroll_to_top_padding');
	if($vw_storefront_scroll_to_top_padding != false){
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='padding-top: '.esc_attr($vw_storefront_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_storefront_scroll_to_top_padding).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_scroll_to_top_width = get_theme_mod('vw_storefront_scroll_to_top_width');
	if($vw_storefront_scroll_to_top_width != false){
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='width: '.esc_attr($vw_storefront_scroll_to_top_width).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_scroll_to_top_height = get_theme_mod('vw_storefront_scroll_to_top_height');
	if($vw_storefront_scroll_to_top_height != false){
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='height: '.esc_attr($vw_storefront_scroll_to_top_height).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_scroll_to_top_border_radius = get_theme_mod('vw_storefront_scroll_to_top_border_radius');
	if($vw_storefront_scroll_to_top_border_radius != false){
		$vw_storefront_custom_css .='.scrollup i{';
			$vw_storefront_custom_css .='border-radius: '.esc_html($vw_storefront_scroll_to_top_border_radius).'px;';
		$vw_storefront_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_storefront_social_icon_font_size = get_theme_mod('vw_storefront_social_icon_font_size');
	if($vw_storefront_social_icon_font_size != false){
		$vw_storefront_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_social_icon_font_size).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_social_icon_padding = get_theme_mod('vw_storefront_social_icon_padding');
	if($vw_storefront_social_icon_padding != false){
		$vw_storefront_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_storefront_custom_css .='padding: '.esc_attr($vw_storefront_social_icon_padding).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_social_icon_width = get_theme_mod('vw_storefront_social_icon_width');
	if($vw_storefront_social_icon_width != false){
		$vw_storefront_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_storefront_custom_css .='width: '.esc_attr($vw_storefront_social_icon_width).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_social_icon_height = get_theme_mod('vw_storefront_social_icon_height');
	if($vw_storefront_social_icon_height != false){
		$vw_storefront_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_storefront_custom_css .='height: '.esc_attr($vw_storefront_social_icon_height).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_social_icon_border_radius = get_theme_mod('vw_storefront_social_icon_border_radius');
	if($vw_storefront_social_icon_border_radius != false){
		$vw_storefront_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_storefront_custom_css .='border-radius: '.esc_attr($vw_storefront_social_icon_border_radius).'px;';
		$vw_storefront_custom_css .='}';
	}

	/*---------------- Woocommerce Settings ------------------*/

	$vw_storefront_related_product_show_hide = get_theme_mod('vw_storefront_related_product_show_hide',true);
	if($vw_storefront_related_product_show_hide != true){
		$vw_storefront_custom_css .='.related.products{';
			$vw_storefront_custom_css .='display: none;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_woocommerce_sale_position = get_theme_mod( 'vw_storefront_woocommerce_sale_position','left');
    if($vw_storefront_woocommerce_sale_position == 'left'){
		$vw_storefront_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_storefront_custom_css .='left: -10px; right: auto;';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_woocommerce_sale_position == 'right'){
		$vw_storefront_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_storefront_custom_css .='left: auto !important; right: 20px !important;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_woocommerce_sale_font_size = get_theme_mod('vw_storefront_woocommerce_sale_font_size');
	if($vw_storefront_woocommerce_sale_font_size != false){
		$vw_storefront_custom_css .='.woocommerce span.onsale{';
			$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_woocommerce_sale_font_size).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_woocommerce_sale_padding_top_bottom = get_theme_mod('vw_storefront_woocommerce_sale_padding_top_bottom');
	if($vw_storefront_woocommerce_sale_padding_top_bottom != false){
		$vw_storefront_custom_css .='.woocommerce span.onsale{';
			$vw_storefront_custom_css .='padding-top: '.esc_attr($vw_storefront_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_storefront_woocommerce_sale_padding_top_bottom).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_woocommerce_sale_padding_left_right = get_theme_mod('vw_storefront_woocommerce_sale_padding_left_right');
	if($vw_storefront_woocommerce_sale_padding_left_right != false){
		$vw_storefront_custom_css .='.woocommerce span.onsale{';
			$vw_storefront_custom_css .='padding-left: '.esc_attr($vw_storefront_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($vw_storefront_woocommerce_sale_padding_left_right).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_woocommerce_sale_border_radius = get_theme_mod('vw_storefront_woocommerce_sale_border_radius', 100);
	if($vw_storefront_woocommerce_sale_border_radius != false){
		$vw_storefront_custom_css .='.woocommerce span.onsale{';
			$vw_storefront_custom_css .='border-radius: '.esc_attr($vw_storefront_woocommerce_sale_border_radius).'px;';
		$vw_storefront_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$vw_storefront_logo_padding = get_theme_mod('vw_storefront_logo_padding');
	if($vw_storefront_logo_padding != false){
		$vw_storefront_custom_css .='.logo{';
			$vw_storefront_custom_css .='padding: '.esc_attr($vw_storefront_logo_padding).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_logo_margin = get_theme_mod('vw_storefront_logo_margin');
	if($vw_storefront_logo_margin != false){
		$vw_storefront_custom_css .='.logo{';
			$vw_storefront_custom_css .='margin: '.esc_attr($vw_storefront_logo_margin).';';
		$vw_storefront_custom_css .='}';
	}

	// Site title Font Size
	$vw_storefront_site_title_font_size = get_theme_mod('vw_storefront_site_title_font_size');
	if($vw_storefront_site_title_font_size != false){
		$vw_storefront_custom_css .='.logo p.site-title, .logo h1{';
			$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_site_title_font_size).';';
		$vw_storefront_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_storefront_site_tagline_font_size = get_theme_mod('vw_storefront_site_tagline_font_size');
	if($vw_storefront_site_tagline_font_size != false){
		$vw_storefront_custom_css .='.logo p.site-description{';
			$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_site_tagline_font_size).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_site_title_color = get_theme_mod('vw_storefront_site_title_color');
	if($vw_storefront_site_title_color != false){
		$vw_storefront_custom_css .='p.site-title a{';
			$vw_storefront_custom_css .='color: '.esc_attr($vw_storefront_site_title_color).'!important;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_site_tagline_color = get_theme_mod('vw_storefront_site_tagline_color');
	if($vw_storefront_site_tagline_color != false){
		$vw_storefront_custom_css .='.logo p.site-description{';
			$vw_storefront_custom_css .='color: '.esc_attr($vw_storefront_site_tagline_color).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_logo_width = get_theme_mod('vw_storefront_logo_width');
	if($vw_storefront_logo_width != false){
		$vw_storefront_custom_css .='.logo img{';
			$vw_storefront_custom_css .='width: '.esc_attr($vw_storefront_logo_width).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_logo_height = get_theme_mod('vw_storefront_logo_height');
	if($vw_storefront_logo_height != false){
		$vw_storefront_custom_css .='.logo img{';
			$vw_storefront_custom_css .='height: '.esc_attr($vw_storefront_logo_height).';';
		$vw_storefront_custom_css .='}';
	}

	// Woocommerce img

	$vw_storefront_shop_featured_image_border_radius = get_theme_mod('vw_storefront_shop_featured_image_border_radius', 0);
	if($vw_storefront_shop_featured_image_border_radius != false){
		$vw_storefront_custom_css .='.woocommerce ul.products li.product a img{';
			$vw_storefront_custom_css .='border-radius: '.esc_attr($vw_storefront_shop_featured_image_border_radius).'px;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_shop_featured_image_box_shadow = get_theme_mod('vw_storefront_shop_featured_image_box_shadow');
	if($vw_storefront_shop_featured_image_box_shadow != false){
		$vw_storefront_custom_css .='.woocommerce ul.products li.product a img{';
				$vw_storefront_custom_css .='box-shadow: '.esc_attr($vw_storefront_shop_featured_image_box_shadow).'px '.esc_attr($vw_storefront_shop_featured_image_box_shadow).'px '.esc_attr($vw_storefront_shop_featured_image_box_shadow).'px #ddd;';
		$vw_storefront_custom_css .='}';
	}

	/*---------------- Menus  ------------------*/

	$vw_storefront_navigation_menu_font_size = get_theme_mod('vw_storefront_navigation_menu_font_size');
	if($vw_storefront_navigation_menu_font_size != false){
		$vw_storefront_custom_css .='.main-navigation a{';
			$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_navigation_menu_font_size).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_navigation_menu_font_weight = get_theme_mod('vw_storefront_navigation_menu_font_weight','600');
	if($vw_storefront_navigation_menu_font_weight != false){
		$vw_storefront_custom_css .='.main-navigation a{';
			$vw_storefront_custom_css .='font-weight: '.esc_attr($vw_storefront_navigation_menu_font_weight).';';
		$vw_storefront_custom_css .='}';
	}
	
	$vw_storefront_theme_lay = get_theme_mod( 'vw_storefront_menu_text_transform','Capitalize');
	if($vw_storefront_theme_lay == 'Capitalize'){
		$vw_storefront_custom_css .='.main-navigation a{';
			$vw_storefront_custom_css .='text-transform:Capitalize;';
		$vw_storefront_custom_css .='}';
	}
	if($vw_storefront_theme_lay == 'Lowercase'){
		$vw_storefront_custom_css .='.main-navigation a{';
			$vw_storefront_custom_css .='text-transform:Lowercase;';
		$vw_storefront_custom_css .='}';
	}
	if($vw_storefront_theme_lay == 'Uppercase'){
		$vw_storefront_custom_css .='.main-navigation a{';
			$vw_storefront_custom_css .='text-transform:Uppercase;';
		$vw_storefront_custom_css .='}';
	}


	$vw_storefront_header_menus_color = get_theme_mod('vw_storefront_header_menus_color');
	if($vw_storefront_header_menus_color != false){
		$vw_storefront_custom_css .='.main-navigation a{';
			$vw_storefront_custom_css .='color: '.esc_attr($vw_storefront_header_menus_color).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_header_menus_hover_color = get_theme_mod('vw_storefront_header_menus_hover_color');
	if($vw_storefront_header_menus_hover_color != false){
		$vw_storefront_custom_css .='.main-navigation a:hover, .main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a{';
			$vw_storefront_custom_css .='color: '.esc_attr($vw_storefront_header_menus_hover_color).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_header_submenus_color = get_theme_mod('vw_storefront_header_submenus_color');
	if($vw_storefront_header_submenus_color != false){
		$vw_storefront_custom_css .='.main-navigation ul ul a{';
			$vw_storefront_custom_css .='color: '.esc_attr($vw_storefront_header_submenus_color).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_header_submenus_hover_color = get_theme_mod('vw_storefront_header_submenus_hover_color');
	if($vw_storefront_header_submenus_hover_color != false){
		$vw_storefront_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$vw_storefront_custom_css .='color: '.esc_attr($vw_storefront_header_submenus_hover_color).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_menus_item = get_theme_mod( 'vw_storefront_menus_item_style','None');
    if($vw_storefront_menus_item == 'None'){
		$vw_storefront_custom_css .='.main-navigation a{';
			$vw_storefront_custom_css .='';
		$vw_storefront_custom_css .='}';
	}else if($vw_storefront_menus_item == 'Zoom In'){
		$vw_storefront_custom_css .='.main-navigation a:hover{';
			$vw_storefront_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #e5333d;';
		$vw_storefront_custom_css .='}';
	}

	/*---------------- Preloader Background Color  ------------------*/

	$vw_storefront_preloader_bg_color = get_theme_mod('vw_storefront_preloader_bg_color');
	if($vw_storefront_preloader_bg_color != false){
		$vw_storefront_custom_css .='#preloader{';
			$vw_storefront_custom_css .='background-color: '.esc_attr($vw_storefront_preloader_bg_color).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_preloader_border_color = get_theme_mod('vw_storefront_preloader_border_color');
	if($vw_storefront_preloader_border_color != false){
		$vw_storefront_custom_css .='.loader-line{';
			$vw_storefront_custom_css .='border-color: '.esc_attr($vw_storefront_preloader_border_color).'!important;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_preloader_bg_img = get_theme_mod('vw_storefront_preloader_bg_img');
	if($vw_storefront_preloader_bg_img != false){
		$vw_storefront_custom_css .='#preloader{';
			$vw_storefront_custom_css .='background: url('.esc_attr($vw_storefront_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$vw_storefront_custom_css .='}';
	}

	// Header Background Color
	$vw_storefront_header_background_color = get_theme_mod('vw_storefront_header_background_color');
	if($vw_storefront_header_background_color != false){
		$vw_storefront_custom_css .='.home-page-header{';
			$vw_storefront_custom_css .='background-color: '.esc_attr($vw_storefront_header_background_color).';';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_header_img_position = get_theme_mod('vw_storefront_header_img_position','center top');
	if($vw_storefront_header_img_position != false){
		$vw_storefront_custom_css .='#header{';
			$vw_storefront_custom_css .='background-position: '.esc_attr($vw_storefront_header_img_position).'!important;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_single_blog_post_navigation_show_hide = get_theme_mod('vw_storefront_single_blog_post_navigation_show_hide',true);
	if($vw_storefront_single_blog_post_navigation_show_hide != true){
		$vw_storefront_custom_css .='.post-navigation{';
			$vw_storefront_custom_css .='display: none;';
		$vw_storefront_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$vw_storefront_button_footer_heading_letter_spacing = get_theme_mod('vw_storefront_button_footer_heading_letter_spacing',1);
	$vw_storefront_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
		$vw_storefront_custom_css .='letter-spacing: '.esc_attr($vw_storefront_button_footer_heading_letter_spacing).'px;';
	$vw_storefront_custom_css .='}';

	$vw_storefront_button_footer_font_size = get_theme_mod('vw_storefront_button_footer_font_size','30');
	$vw_storefront_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
		$vw_storefront_custom_css .='font-size: '.esc_attr($vw_storefront_button_footer_font_size).'px;';
	$vw_storefront_custom_css .='}';

	$vw_storefront_theme_lay = get_theme_mod( 'vw_storefront_button_footer_text_transform','Capitalize');
	if($vw_storefront_theme_lay == 'Capitalize'){
		$vw_storefront_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_storefront_custom_css .='text-transform:Capitalize;';
		$vw_storefront_custom_css .='}';
	}
	if($vw_storefront_theme_lay == 'Lowercase'){
		$vw_storefront_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
			$vw_storefront_custom_css .='text-transform:Lowercase;';
		$vw_storefront_custom_css .='}';
	}
	if($vw_storefront_theme_lay == 'Uppercase'){
		$vw_storefront_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
			$vw_storefront_custom_css .='text-transform:Uppercase;';
		$vw_storefront_custom_css .='}';
	}

	$vw_storefront_footer_heading_weight = get_theme_mod('vw_storefront_footer_heading_weight','400');
	if($vw_storefront_footer_heading_weight != false){
		$vw_storefront_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label, a.rsswidget.rss-widget-title{';
			$vw_storefront_custom_css .='font-weight: '.esc_attr($vw_storefront_footer_heading_weight).';';
		$vw_storefront_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$vw_storefront_theme_lay = get_theme_mod( 'vw_storefront_footer_template','vw-storefront-footer-one');
    if($vw_storefront_theme_lay == 'vw-storefront-footer-one'){
		$vw_storefront_custom_css .='#footer{';
			$vw_storefront_custom_css .='';
		$vw_storefront_custom_css .='}';

	}else if($vw_storefront_theme_lay == 'vw-storefront-footer-two'){
		$vw_storefront_custom_css .='#footer{';
			$vw_storefront_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_storefront_custom_css .='color:#000;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='#footer ul li::before{';
			$vw_storefront_custom_css .='background:#000;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vw_storefront_custom_css .='border: 1px solid #000;';
		$vw_storefront_custom_css .='}';

	}else if($vw_storefront_theme_lay == 'vw-storefront-footer-three'){
		$vw_storefront_custom_css .='#footer{';
			$vw_storefront_custom_css .='background: #232524;';
		$vw_storefront_custom_css .='}';
	}
	else if($vw_storefront_theme_lay == 'vw-storefront-footer-four'){
		$vw_storefront_custom_css .='#footer{';
			$vw_storefront_custom_css .='background: #f7f7f7;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_storefront_custom_css .='color:#000;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='#footer ul li::before{';
			$vw_storefront_custom_css .='background:#000;';
		$vw_storefront_custom_css .='}';
		$vw_storefront_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vw_storefront_custom_css .='border: 1px solid #000;';
		$vw_storefront_custom_css .='}';
	}
	else if($vw_storefront_theme_lay == 'vw-storefront-footer-five'){
		$vw_storefront_custom_css .='#footer{';
			$vw_storefront_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$vw_storefront_custom_css .='}';
	}