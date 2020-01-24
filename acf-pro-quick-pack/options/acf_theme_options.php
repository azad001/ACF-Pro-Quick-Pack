<?php 

if ( function_exists( 'acf_add_options_page' ) && function_exists( 'acf_add_options_sub_page' ) ) {
		
	acf_add_options_page(array(
		'page_title' => esc_html__( 'Norebro Theme Settings', 'norebro' ),
		'menu_title' => esc_html__( 'Theme Settings', 'norebro' ),
		'menu_slug' => 'theme-general',
		'capability' => 'edit_posts',
		'icon_url' => get_template_directory_uri().'/inc/tgmpa/theme_settings.png'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Pages Settings', 'norebro' ),
		'menu_title' => '<i class="ion-wand"></i> ' . esc_html__( 'Branding', 'norebro' ),
		'menu_slug' => 'theme-general-branding',
		'parent_slug' => 'theme-general'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Pages Settings', 'norebro' ),
		'menu_title' => '<i class="ion-paintbucket"></i> ' . esc_html__( 'Theme Styling', 'norebro' ),
		'menu_slug' => 'theme-general-styling',
		'parent_slug' => 'theme-general'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Pages Settings', 'norebro' ),
		'menu_title' => '<i class="ion-earth"></i> ' . esc_html__( 'Typography', 'norebro' ),
		'menu_slug' => 'theme-general-typography',
		'parent_slug' => 'theme-general'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Header Settings', 'norebro' ),
		'menu_title' => '<i class="ion-navicon-round"></i> ' . esc_html__( 'Header & Menu', 'norebro' ),
		'menu_slug' => 'theme-general-header',
		'parent_slug' => 'theme-general'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Pages Settings', 'norebro' ),
		'menu_title' => '<i class="ion-android-expand"></i> ' . esc_html__( 'Page Settings', 'norebro' ),
		'menu_slug' => 'theme-general-pages',
		'parent_slug' => 'theme-general'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Blog Settings', 'norebro' ),
		'menu_title' => '<i class="ion-compose"></i> ' . esc_html__( 'Blog Settings', 'norebro' ),
		'menu_slug' => 'theme-general-blog',
		'parent_slug' => 'theme-general'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Portfolio Settings', 'norebro' ),
		'menu_title' => '<i class="ion-image"></i> ' . esc_html__( 'Portfolio Settings', 'norebro' ),
		'menu_slug' => 'theme-general-portfolio',
		'parent_slug' => 'theme-general'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme WooCommerce Settings', 'norebro' ),
		'menu_title' => '<i class="ion-bag"></i> ' . esc_html__( 'Shop Settings', 'norebro' ),
		'menu_slug' => 'theme-general-woocommerce',
		'parent_slug' => 'theme-general'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Panels Settings', 'norebro' ),
		'menu_title' => '<i class="ion-arrow-return-right"></i> ' . esc_html__( 'Panels', 'norebro' ),
		'menu_slug' => 'theme-general-panels',
		'parent_slug' => 'theme-general'
	));
	
	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Footer Settings', 'norebro' ),
		'menu_title' => '<i class="ion-social-buffer"></i> ' . esc_html__( 'Footer', 'norebro' ),
		'menu_slug' => 'theme-general-footer',
		'parent_slug' => 'theme-general'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Blog Settings', 'norebro' ),
		'menu_title' => '<i class="ion-merge"></i> ' . esc_html__( 'Custom CSS', 'norebro' ),
		'menu_slug' => 'theme-general-custom',
		'parent_slug' => 'theme-general'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Plugins Settings', 'norebro' ),
		'menu_title' => '<i class="ion-gear-a"></i> ' . esc_html__( 'Other Settings', 'norebro' ),
		'menu_slug' => 'theme-general-other',
		'parent_slug' => 'theme-general'
	));

	acf_add_options_sub_page(array(
		'page_title' => '',
		'menu_title' => '<i class="ion-help-circled"></i> ' . esc_html__( 'Support', 'norebro' ),
		'menu_slug' => 'theme-general-support',
		'parent_slug' => 'theme-general'
	));
	
}