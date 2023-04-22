<?php/*Plugin Name: Page builder & Shortcodes - PremiumCodingPlugin URI: http://premiumcoding.comDescription: Easily create custom page templates with intuitive drag-and-drop interface. Version: 1.3.5Author: PremiumCodingAuthor URI: http://premiumcoding.com*/ //definitionsif(!defined('AQPB_PATH')) define( 'AQPB_PATH', plugin_dir_path(__FILE__) );if(!defined('AQPB_DIR')) define( 'AQPB_DIR', plugin_dir_url(__FILE__) );//required functions & classesload_theme_textdomain( 'pmc-themes', AQPB_PATH .'lang/' );include_once( ABSPATH . 'wp-admin/includes/plugin.php' );require_once(AQPB_PATH . 'pmc-import.php');require_once(AQPB_PATH . 'functions/aqpb_config.php');require_once(AQPB_PATH . 'classes/class-aq-page-builder.php');require_once(AQPB_PATH . 'classes/class-aq-block.php');require_once(AQPB_PATH . 'functions/aqpb_functions.php');require_once(AQPB_PATH . 'shortcodes.php');if (pmc_woo() && PMC_SHOP){	global $woocommerce;	$root = dirname(dirname(dirname(dirname(__FILE__))));	if ( !class_exists( 'WC_Widget' ) ) 		include_once($root.'/wp-content/plugins/woocommerce/includes/abstracts/abstract-wc-widget.php');	if ( !class_exists( 'WC_Widget_Layered_Nav_Filters' ) ) 		include_once($root.'/wp-content/plugins/woocommerce/includes/widgets/class-wc-widget-layered-nav-filters.php');	if ( !class_exists( 'WC_Widget_Price_Filter' ) ) 		include_once($root.'/wp-content/plugins/woocommerce/includes/widgets/class-wc-widget-price-filter.php');		if ( !class_exists( 'WC_Widget_Layered_Nav' ) ) 		include_once($root.'/wp-content/plugins/woocommerce/includes/widgets/class-wc-widget-layered-nav.php');		add_action( 'widgets_init', 'override_woocommerce_widgets', 15 );	 	function override_woocommerce_widgets() {	  // Ensure our parent class exists to avoid fatal error (thanks Wilgert!)	 	  if ( class_exists( 'WC_Widget_Layered_Nav_Filters' ) ) {		unregister_widget( 'WC_Widget_Layered_Nav_Filterss' );		include_once (AQPB_PATH . 'assets/widgets/pmc-woo-widget-layered-nav-filters.php');	 		register_widget( 'PMC_Widget_Layered_Nav_Filters' );			}	  if ( class_exists( 'WC_Widget_Price_Filter' ) ) {		unregister_widget( 'WC_Widget_Price_Filter' );		include_once (AQPB_PATH . 'assets/widgets/pmc-woo-widget-price-filter.php');	 	 		register_widget( 'PMC_Widget_Price_Filter' );			  }	  	  if ( class_exists( 'WC_Widget_Layered_Nav' ) ) {		unregister_widget( 'WC_Widget_Layered_Nav' );		include_once (AQPB_PATH . 'assets/widgets/pmc-woo-widget-layered-nav.php');	 	 		register_widget( 'PMC_Widget_Layered_Nav' );			  }	  	 	}	}require_once(AQPB_PATH . 'blocks/aq-title-block.php');require_once(AQPB_PATH . 'blocks/aq-column-block.php');require_once(AQPB_PATH . 'blocks/aq-clear-block.php');require_once(AQPB_PATH . 'blocks/aq-widgets-block.php');require_once(AQPB_PATH . 'blocks/aq-richtext-block.php'); require_once(AQPB_PATH . 'blocks/aq-team-block.php');require_once(AQPB_PATH . 'blocks/aq-advertise-block.php');require_once(AQPB_PATH . 'blocks/aq-port-block.php');require_once(AQPB_PATH . 'blocks/aq-title-border-block.php');require_once(AQPB_PATH . 'blocks/aq-title-border-block-end.php');require_once(AQPB_PATH . 'blocks/pmc_wp_breadcrumb_block.php');require_once(AQPB_PATH . 'blocks/aq-end-content-block.php');require_once(AQPB_PATH . 'blocks/aq-start-content-block.php');require_once(AQPB_PATH . 'blocks/aq-testimonial-block.php');require_once(AQPB_PATH . 'blocks/aq-contact-block.php');require_once(AQPB_PATH . 'blocks/aq-twitter-block.php');require_once(AQPB_PATH . 'blocks/aq-features-block.php');require_once(AQPB_PATH . 'blocks/aq-featured-block.php');require_once(AQPB_PATH . 'blocks/aq-quote-title-block.php');require_once(AQPB_PATH . 'blocks/aq-slider-RevSlider-block.php');require_once(AQPB_PATH . 'blocks/aq-posts-full-width-block.php');require_once(AQPB_PATH . 'blocks/aq-portfolio-block.php');require_once(AQPB_PATH . 'blocks/aq-menu-logo-block.php');require_once(AQPB_PATH . 'blocks/aq-logo-block.php');require_once(AQPB_PATH . 'blocks/aq-social-block.php');require_once(AQPB_PATH . 'blocks/aq-article-block.php');require_once(AQPB_PATH . 'blocks/aq-notification-menu-block.php');/*prebuild*/require_once(AQPB_PATH . 'blocks/aq-prebuild-contact.php');require_once(AQPB_PATH . 'blocks/aq-prebuild-team.php');require_once(AQPB_PATH . 'blocks/aq-prebuild-header.php');require_once(AQPB_PATH . 'blocks/aq-prebuild-testimonials.php');require_once(AQPB_PATH . 'blocks/aq-prebuild-news.php');require_once(AQPB_PATH . 'blocks/aq-prebuild-portfolio.php');require_once(AQPB_PATH . 'blocks/aq-prebuild-footer.php');require_once(AQPB_PATH . 'blocks/aq-prebuild-start-end-title-small.php');require_once(AQPB_PATH . 'blocks/aq-prebuild-start-end-title-full.php');require_once(AQPB_PATH . 'blocks/aq-prebuild-start-end-small.php');/*blogs*/require_once(AQPB_PATH . 'blocks/pmc_blog_full_width.php');require_once(AQPB_PATH . 'blocks/pmc_mini_blog.php');/*portfolio*/require_once(AQPB_PATH . 'blocks/aq-portfolio-page-block.php');/*blog*/require_once(AQPB_PATH . 'blocks/aq-blog-page-block.php');/*shop*/if (pmc_woo() && PMC_SHOP){	require_once(AQPB_PATH . 'blocks/aq-productR-block.php');	require_once(AQPB_PATH . 'blocks/aq-productF-block.php');	require_once(AQPB_PATH . 'blocks/aq-product-category-block.php');	require_once(AQPB_PATH . 'blocks/aq-category-block.php');	require_once(AQPB_PATH . 'blocks/pmc_woo_cart_block.php');	}//register default blocksaq_register_block('AQ_Start_Content_Block');aq_register_block('AQ_End_Content_Block');aq_register_block('AQ_Title_Border_Block');aq_register_block('AQ_Title_Border_Block_end');aq_register_block('AQ_Title_Block');aq_register_block('AQ_Column_Block');aq_register_block('AQ_Clear_Block');aq_register_block('AQ_Menu_Block');aq_register_block('AQ_Notification_Menu_Block');aq_register_block('AQ_Logo_Block');aq_register_block('AQ_Slider_Block_revolutionSlider');aq_register_block('AQ_Quote_Title_Block');aq_register_block('AQ_Features_Block');aq_register_block('AQ_Featured_Block');aq_register_block('AQ_Contact_Block');aq_register_block('AQ_Widgets_Block');aq_register_block('AQ_Port_Block_Feed');aq_register_block('AQ_Portfolio_Block');aq_register_block('AQ_Advertise_Block');aq_register_block('AQ_Posts_Full_Width_Block');aq_register_block('AQ_Testimonial_Block');aq_register_block('PMC_Wp_Breadcrumb_Block');aq_register_block('AQ_Richtext_Block');aq_register_block('AQ_Article_Block');	aq_register_block('AQ_Social_Block');aq_register_block('AQ_Twitter_Block');aq_register_block('AQ_Team_Block');/*prebuild*/aq_register_block('PMC_Prebuild_Start_Small');aq_register_block('PMC_Prebuild_Start_Title_Small');aq_register_block('PMC_Prebuild_Start_Title_Full');aq_register_block('PMC_Prebuild_Header');aq_register_block('PMC_Prebuild_Footer');aq_register_block('PMC_Prebuild_News');aq_register_block('PMC_Prebuild_Portfolio');aq_register_block('PMC_Prebuild_Contact');aq_register_block('PMC_Prebuild_Team');aq_register_block('PMC_Prebuild_Testimonials');/*blogs*/aq_register_block('PMC_Full_Width_Blog');aq_register_block('PMC_Mini_Blog');/*portfolio*/aq_register_block('AQ_Portfolio_Page_Block');/*blog*/aq_register_block('AQ_Blog_Page_Block');//shopif (pmc_woo() && PMC_SHOP){	aq_register_block('PMC_Woo_Cart_Block');		aq_register_block('AQ_Product_Block_Feed');	aq_register_block('AQ_ProductF_Block_Feed');	aq_register_block('AQ_Category_Block');	aq_register_block('AQ_Product_Category_Block');	}//fire up page builder$aqpb_config = aq_page_builder_config();$aq_page_builder = new AQ_Page_Builder($aqpb_config);if(!is_network_admin()) $aq_page_builder->init();/*PremiumCoding Shortcodes*/if(!defined('PMC_PATH')) define( 'PMC_PATH', plugin_dir_path(__FILE__) );if(!defined('PMC_DIR')) define( 'PMC_DIR', plugin_dir_url(__FILE__) );register_nav_menus(array(					'pagebuildermenu' => 'Page builder menu',));	