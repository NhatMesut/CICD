<?php 

// sticky header
	$clothing_store_custom_style= "";

	if (false === get_option('clothing_store_sticky_header')) {
	    add_option('clothing_store_sticky_header', 'off');
	}

	// Define the custom CSS based on the 'clothing_store_sticky_header' option

	if (get_option('clothing_store_sticky_header', 'off') !== 'on') {
	    $clothing_store_custom_style .= '.menu_header_box.fixed {';
	    $clothing_store_custom_style .= 'position: static;';
	    $clothing_store_custom_style .= '}';
	}

	if (get_option('clothing_store_sticky_header', 'off') !== 'off') {
	    $clothing_store_custom_style .= '.menu_header_box.fixed {';
	    $clothing_store_custom_style .= 'position: fixed; background: #e6e1d8; box-shadow: none';
	    $clothing_store_custom_style .= '}';

	    $clothing_store_custom_style .= '.admin-bar .fixed {';
	    $clothing_store_custom_style .= ' margin-top: 32px;';
	    $clothing_store_custom_style .= '}';
	}

//theme width

$clothing_store_theme_width = get_theme_mod( 'clothing_store_width_options','full_width');

if($clothing_store_theme_width == 'full_width'){

$clothing_store_custom_style .='body{';

	$clothing_store_custom_style .='max-width: 100%;';

$clothing_store_custom_style .='}';

}else if($clothing_store_theme_width == 'container'){

$clothing_store_custom_style .='body{';

	$clothing_store_custom_style .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='.carousel-control-prev, .carousel-control-next{';

	$clothing_store_custom_style .='top:0';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='.discount-box {';

	$clothing_store_custom_style .='right: 9px';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='@media screen and (max-width:600px){';

$clothing_store_custom_style .='body{';

    $clothing_store_custom_style .='max-width: 100%; padding-right:0px; padding-left: 0px';
    
$clothing_store_custom_style .='} }';

}else if($clothing_store_theme_width == 'container_fluid'){

$clothing_store_custom_style .='body{';

	$clothing_store_custom_style .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='@media screen and (max-width:600px){';

$clothing_store_custom_style .='body{';

    $clothing_store_custom_style .='max-width: 100%; padding-right:0px; padding-left: 0px';
    
$clothing_store_custom_style .='} }';
}

//Slider-content-alignment

$t_shirt_clothing_slider_content_alignment = get_theme_mod( 't_shirt_clothing_slider_content_alignment','RIGHT-ALIGN');

if($t_shirt_clothing_slider_content_alignment == 'LEFT-ALIGN'){

$clothing_store_custom_style .='#slider .carousel-caption{';

	$clothing_store_custom_style .='text-align:left; left: 15%; right: 50%;';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='@media screen and (max-width:1199px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='left: 15%; right: 30%;';
    
$clothing_store_custom_style .='} }';

$clothing_store_custom_style .='@media screen and (max-width:991px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='left: 15%; right: 20%;';
    
$clothing_store_custom_style .='} }';

$clothing_store_custom_style .='@media screen and (max-width:936px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='left: 15%; right: 15%;';
    
$clothing_store_custom_style .='} }';


}else if($t_shirt_clothing_slider_content_alignment == 'CENTER-ALIGN'){

$clothing_store_custom_style .='#slider .carousel-caption{';

	$clothing_store_custom_style .='text-align:center; right: 20%; left: 20%;';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='@media screen and (max-width:1199px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='right: 20%; left: 20%;';
    
$clothing_store_custom_style .='} }';

$clothing_store_custom_style .='@media screen and (max-width:991px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='right: 15%; left: 15%;';
    
$clothing_store_custom_style .='} }';

$clothing_store_custom_style .='@media screen and (max-width:936px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='right: 15%; left: 15%;';
    
$clothing_store_custom_style .='} }';


}else if($t_shirt_clothing_slider_content_alignment == 'RIGHT-ALIGN'){

$clothing_store_custom_style .='#slider .carousel-caption{';

	$clothing_store_custom_style .='text-align:right; right: 15%; left: 50%;';

$clothing_store_custom_style .='}';

$clothing_store_custom_style .='@media screen and (max-width:1199px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='right: 15%; left: 30%;';
    
$clothing_store_custom_style .='} }';

$clothing_store_custom_style .='@media screen and (max-width:991px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='right: 15%; left: 20%;';
    
$clothing_store_custom_style .='} }';

$clothing_store_custom_style .='@media screen and (max-width:936px){';

$clothing_store_custom_style .='#slider .carousel-caption{';

    $clothing_store_custom_style .='right: 15%; left: 15%;';
    
$clothing_store_custom_style .='} }';

}