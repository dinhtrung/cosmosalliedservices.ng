<?php 

	/*
	*
	*	Theme Customizer Options
	*	------------------------------------------------
	*	Themes Awesome Framework
	* 	Copyright Themes Awesome 2013 - http://www.themesawesome.com
	*
	*	kindergarten_customize_register()
	*	kindergarten_customize_preview()
	*
	*/
	
	if (!function_exists('kindergarten_customize_register')) {
		function kindergarten_customize_register($wp_customize) {
		
			$wp_customize->get_setting('blogname')->transport='postMessage';
			$wp_customize->get_setting('blogdescription')->transport='postMessage';
			$wp_customize->get_setting('header_textcolor')->transport='postMessage';

			/* HEADER STYLING
			================================================== */
			
			$wp_customize->add_section( 'header_styling', array(
				'title'		=>	__( 'Header', 'kindergarten' ),
				'priority'	=>	200,
			) );
			
			//SECTION

			$wp_customize->add_setting( 'menu_list', array(
				'default'		=> 	'#000000',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'menu_list_hovtext', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'menu_list_hov', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bg_menu', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bg_submenu', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'submenu_list', array(
				'default'		=> 	'#000000',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'submenu_list_hov', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bg_serch_icon', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'serch_icon', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bord_head', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			
			//CONTROL
			
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_list', array(
				'label'		=>	__( 'Menu List Color', 'kindergarten' ),
				'section'	=>	'header_styling',
				'settings'	=>	'menu_list',
				'priority'	=>	1,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_list_hovtext', array(
				'label'		=>	__( 'Menu List Text Hover Color', 'kindergarten' ),
				'section'	=>	'header_styling',
				'settings'	=>	'menu_list_hovtext',
				'priority'	=>	2,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_list_hov', array(
				'label'		=>	__( 'Menu List Background Hover Color', 'kindergarten' ),
				'section'	=>	'header_styling',
				'settings'	=>	'menu_list_hov',
				'priority'	=>	3,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_menu', array(
				'label'		=>	__( 'Background Menu Color', 'kindergarten' ),
				'section'	=>	'header_styling',
				'settings'	=>	'bg_menu',
				'priority'	=>	4,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_submenu', array(
				'label'		=>	__( 'Background Submenu Color', 'kindergarten' ),
				'section'	=>	'header_styling',
				'settings'	=>	'bg_submenu',
				'priority'	=>	4,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_lis', array(
				'label'		=>	__( 'Submenu List Color', 'kindergarten' ),
				'section'	=>	'header_styling',
				'settings'	=>	'submenu_list',
				'priority'	=>	6,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_list_hov', array(
				'label'		=>	__( 'Submenu List Hover Color', 'kindergarten' ),
				'section'	=>	'header_styling',
				'settings'	=>	'submenu_list_hov',
				'priority'	=>	7,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_serch_icon', array(
				'label'		=>	__( 'Background Search Icon Color', 'kindergarten' ),
				'section'	=>	'header_styling',
				'settings'	=>	'bg_serch_icon',
				'priority'	=>	8,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'serch_icon', array(
				'label'		=>	__( 'Search Icon Color', 'kindergarten' ),
				'section'	=>	'header_styling',
				'settings'	=>	'serch_icon',
				'priority'	=>	9,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bord_head', array(
				'label'		=>	__( 'Border Header Color', 'kindergarten' ),
				'section'	=>	'header_styling',
				'settings'	=>	'bord_head',
				'priority'	=>	10,
			) ) );


			/* CONTENT STYLING
			================================================== */
			
			$wp_customize->add_section( 'content_styling', array(
				'title'		=>	__( 'Content', 'kindergarten' ),
				'priority'	=>	200,
			) );
			
			//SECTION

			$wp_customize->add_setting( 'slider_text', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'title_color', array(
				'default'		=> 	'#333333',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'sub_title_color', array(
				'default'		=> 	'#999999',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'border_title_color', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'feat_title_color', array(
				'default'		=> 	'#333333',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'btn_1', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'btn_1text', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'btn_2', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'btn_2text', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'banner_text', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'title_recent', array(
				'default'		=> 	'#000000',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'title_recent_hov', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'archives_bg', array(
				'default'		=> 	'#dddddd',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'archives_hover', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'archives_text', array(
				'default'		=> 	'#000000',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'archives_text_hov', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'link_sosmed', array(
				'default'		=> 	'#000000',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'link_sosmed_hov', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'prev_next', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'prev_next_icon', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'my_schedule', array(
				'default'		=> 	'#43b6cc',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );


			//CONTROL
			
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_text', array(
				'label'		=>	__( 'Slider Text Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'slider_text',
				'priority'	=>	1,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_color', array(
				'label'		=>	__( 'Title Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'title_color',
				'priority'	=>	2,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sub_title_color', array(
				'label'		=>	__( 'Subtitle Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'sub_title_color',
				'priority'	=>	3,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_title_color', array(
				'label'		=>	__( 'Title Border Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'border_title_color',
				'priority'	=>	4,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'feat_title_color', array(
				'label'		=>	__( 'Feature Title Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'feat_title_color',
				'priority'	=>	5,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_1', array(
				'label'		=>	__( 'Button White Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'btn_1',
				'priority'	=>	6,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_1text', array(
				'label'		=>	__( 'Button White Text Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'btn_1text',
				'priority'	=>	7,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_2', array(
				'label'		=>	__( 'Button Blue Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'btn_2',
				'priority'	=>	8,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_2text', array(
				'label'		=>	__( 'Button Blue Text Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'btn_2text',
				'priority'	=>	9,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'banner_text', array(
				'label'		=>	__( 'Banner Text Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'banner_text',
				'priority'	=>	10,
			) ) );


			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_recent', array(
				'label'		=>	__( 'Title Blog and Text Link Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'title_recent',
				'priority'	=>	11,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_recent_hov', array(
				'label'		=>	__( 'Title Blog and Text Link Hover Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'title_recent_hov',
				'priority'	=>	12,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'archives_bg', array(
				'label'		=>	__( 'Sidebar Archives Background Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'archives_bg',
				'priority'	=>	13,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'archives_hover', array(
				'label'		=>	__( 'Sidebar Archives Background Hover Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'archives_hover',
				'priority'	=>	14,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'archives_text', array(
				'label'		=>	__( 'Sidebar Archives text Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'archives_text',
				'priority'	=>	15,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'archives_text_hov', array(
				'label'		=>	__( 'Sidebar Archives text Hover Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'archives_text_hov',
				'priority'	=>	16,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_sosmed', array(
				'label'		=>	__( 'Social Media Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'link_sosmed',
				'priority'	=>	17,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_sosmed_hov', array(
				'label'		=>	__( 'Social Media Hover Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'link_sosmed_hov',
				'priority'	=>	18,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_next', array(
				'label'		=>	__( 'Arrow Preview and Next Button Background Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'prev_next',
				'priority'	=>	19,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'prev_next_icon', array(
				'label'		=>	__( 'Arrow Preview and Next Button Icon Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'prev_next_icon',
				'priority'	=>	20,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'my_schedule', array(
				'label'		=>	__( 'My Schedule Background Color', 'kindergarten' ),
				'section'	=>	'content_styling',
				'settings'	=>	'my_schedule',
				'priority'	=>	21,
			) ) );



			/* FOOTER STYLING
			================================================== */
			
			$wp_customize->add_section( 'footer_styling', array(
				'title'		=>	__( 'Footer', 'kindergarten' ),
				'priority'	=>	200,
			) );

			//SECTION

			$wp_customize->add_setting( 'bg_footer', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'bg_footer_2', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'copy_right', array(
				'default'		=> 	'#333333',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'copy_right_link', array(
				'default'		=> 	'#333333',
				'type'			=> 	'option',
				'transport'		=> 	'postMessage',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'cr_link_hov', array(
				'default'		=> 	'#0097a7',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'footer_text', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_setting( 'widget_title', array(
				'default'		=> 	'#ffffff',
				'type'			=> 	'option',
				'capability'	=>	'edit_theme_options',
				'sanitize_callback' => 'sanitize_hex_color',
			) );
			

			//CONTROL
			
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_footer', array(
				'label'		=>	__( 'Background Top Footer Color', 'kindergarten' ),
				'section'	=>	'footer_styling',
				'settings'	=>	'bg_footer',
				'priority'	=>	1,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_footer_2', array(
				'label'		=>	__( 'Background Bottom Footer Color', 'kindergarten' ),
				'section'	=>	'footer_styling',
				'settings'	=>	'bg_footer_2',
				'priority'	=>	2,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copy_right', array(
				'label'		=>	__( 'Copyright Color', 'kindergarten' ),
				'section'	=>	'footer_styling',
				'settings'	=>	'copy_right',
				'priority'	=>	3,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copy_right_link', array(
				'label'		=>	__( 'Copyright Link Text Color', 'kindergarten' ),
				'section'	=>	'footer_styling',
				'settings'	=>	'copy_right_link',
				'priority'	=>	4,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cr_link_hov', array(
				'label'		=>	__( 'Copyright Link Text Hover Color', 'kindergarten' ),
				'section'	=>	'footer_styling',
				'settings'	=>	'cr_link_hov',
				'priority'	=>	5,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text', array(
				'label'		=>	__( 'Footer Text Color', 'kindergarten' ),
				'section'	=>	'footer_styling',
				'settings'	=>	'footer_text',
				'priority'	=>	5,
			) ) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'widget_title', array(
				'label'		=>	__( 'Footer Widget Title Color', 'kindergarten' ),
				'section'	=>	'footer_styling',
				'settings'	=>	'widget_title',
				'priority'	=>	5,
			) ) );

		}
		add_action( 'customize_register', 'kindergarten_customize_register' );

	}
	
	
	function kindergarten_customizer_live_preview() {
		wp_enqueue_script( 'akmanda-customizer',	get_template_directory_uri().'/js/akmanda-customizer.js', array( 'jquery','customize-preview' ), NULL, true);
	}
	add_action( 'customize_preview_init', 'kindergarten_customizer_live_preview' );
	


	function kindergarten_customizer_header_output() {	

	//header styling
	$menu_list					=	get_option('menu_list', '#000000');
	$bg_menu					=	get_option('bg_menu', '#ffffff');
	$bg_submenu					=	get_option('bg_submenu', '#ffffff');
	$menu_list_hovtext			=	get_option('menu_list_hovtext', '#ffffff');
	$menu_list_hov		   		=	get_option('menu_list_hov', '#0097a7');
	$submenu_list				=	get_option('submenu_list', '#000000');
	$submenu_list_hov			=	get_option('submenu_list_hov', '#0097a7');
	$bg_serch_icon				=	get_option('bg_serch_icon', '#0097a7');
	$serch_icon					=	get_option('serch_icon', '#ffffff');
	$bord_head					=	get_option('bord_head', '#0097a7');

	//content styling
	$slider_text				=	get_option('slider_text', '#ffffff');
	$title_color				=	get_option('title_color', '#333333');
	$sub_title_color			=	get_option('sub_title_color', '#999999');
	$border_title_color			=	get_option('border_title_color', '#0097a7');
	$feat_title_color			=	get_option('feat_title_color', '#333333');
	$btn_1						=	get_option('btn_1', '#ffffff');
	$btn_1text					=	get_option('btn_1text', '#0097a7');
	$btn_2						=	get_option('btn_2', '#0097a7');
	$btn_2text					=	get_option('btn_2text', '#ffffff');
	$banner_text				=	get_option('banner_text', '#ffffff');
	$title_recent				=	get_option('title_recent', '#000000');
	$title_recent_hov			=	get_option('title_recent_hov', '#0097a7');
	$archives_bg				=	get_option('archives_bg', '#dddddd');
	$archives_hover				=	get_option('archives_hover', '#0097a7');
	$archives_text				=	get_option('archives_text', '#000000');
	$archives_text_hov			=	get_option('archives_text_hov', '#ffffff');
	$link_sosmed				=	get_option('link_sosmed', '#000000');
	$link_sosmed_hov			=	get_option('link_sosmed_hov', '#0097a7');
	$prev_next					=	get_option('prev_next', '#0097a7');
	$prev_next_icon				=	get_option('prev_next_icon', '#ffffff');
	$my_schedule				=	get_option('my_schedule', '#43b6cc');


	//footer styling
	$bg_footer		   			=	get_option('bg_footer', '#0097a7');
	$bg_footer_2		   		=	get_option('bg_footer_2', '#ffffff');
	$copy_right		   			=	get_option('copy_right', '#333333');
	$copy_right_link		   	=	get_option('copy_right_link', '#333333');
	$cr_link_hov			   	=	get_option('cr_link_hov', '#0097a7');
	$footer_text			   	=	get_option('footer_text', '#ffffff');
	$widget_title			   	=	get_option('widget_title', '#ffffff');
	

	echo '<style type="text/css">';

	//=========HEADER STYLING======//

	echo 'ul.menus li a{color:'.$menu_list.'}' ;
	echo '.site-header, .sb-search-input{background-color:'.$bg_menu.'}' ;
	echo 'ul.menus li.menu-item-has-children ul.sub-menu{background-color:'.$bg_submenu.'}' ;
	echo 'ul.menus li a:hover{color:'.$menu_list_hovtext.'}' ;
	echo 'ul.menus li a:hover{background-color:'.$menu_list_hov.'}' ;
	echo 'ul.menus li.page_item_has_children a:hover:after, ul.menus li.menu-item-has-children a:hover:after, ul.menus li.open a:after{border-top-color:'.$menu_list_hov.'}' ;
	echo 'ul.sub-menu li a{color:'.$submenu_list.'}' ;
	echo 'ul.menus li.menu-item-has-children ul.sub-menu li a:hover{color:'.$submenu_list_hov.'}' ;
	echo '.sb-icon-search i{color:'.$serch_icon.'}' ;
	echo '.site-header{border-color:'.$bord_head.'}' ;

	//=========CONTENT STYLING======//
	echo '.flexslider-wrap .caption h1, .flexslider-wrap .caption h2, .flexslider-wrap .caption h4, .flexslider-wrap .caption h3, .flexslider-wrap .caption h5, .flexslider-wrap .caption h6, .flexslider-wrap .caption p{color:'.$slider_text.'}' ;
	echo '.heading-block, .contact-content h3, .contact-icon{color:'.$title_color.'}' ;
	echo '.heading-block h4.tagline{color:'.$sub_title_color.'}' ;
	echo '.heading-block:after, .heading-block.page-title:after{border-color:'.$border_title_color.'}' ;
	echo '.feature-desc h4{color:'.$feat_title_color.'}' ;
	echo '.button-normal.white a{background-color:'.$btn_1.'}' ;
	echo '.button-normal.white a{border-color:'.$btn_1.'}' ;
	echo '.button-normal.white a{color:'.$btn_1text.'}' ;
	echo '.button-normal.green a, input[type="submit"].green{backgroud-color:'.$btn_2.'}' ;
	echo '.button-normal.green a, input[type="submit"].green{border-color:'.$btn_2.'}' ;
	echo '.button-normal.green a, input[type="submit"].green{color:'.$btn_2text.'}' ;
	echo '.banner h3{color:'.$banner_text.'}' ;
	echo '.post-content a, .sidebar-widget ul li:last-child a, .cat-item cat-item-320 a, .sidebar-widget ul li a{color:'.$title_recent.'}' ;
	echo '.post-content a:hover, .sidebar-widget ul li:last-child a:hover, .cat-item cat-item-320 a:hover, .sidebar-widget ul li a:hover{color:'.$title_recent_hov.'}' ;
	echo '.sidebar-widget .tagcloud a{background-color:'.$archives_bg.'}' ;
	echo '.sidebar-widget .tagcloud a{border-color:'.$archives_bg.'}' ;
	echo '.sidebar-widget .tagcloud a:hover{background-color:'.$archives_hover.'}' ;
	echo '.sidebar-widget .tagcloud a:hover{border-color:'.$archives_hover.'}' ;
	echo '.sidebar-widget .tagcloud a{color:'.$archives_text.'}' ;
	echo '.sidebar-widget .tagcloud a:hover{color:'.$archives_text_hov.'}' ;
	echo '#copyright .social-links ul li a, .no-padding a{color:'.$link_sosmed.'}' ;
	echo '#copyright .social-links ul li a:hover, .no-padding a:hover{color:'.$link_sosmed_hov.'}' ;
	echo '.owl-carousel .owl-controls .owl-nav .owl-prev, .owl-carousel .owl-controls .owl-nav .owl-next{background-color:'.$prev_next.'}' ;
	echo '.owl-carousel .owl-controls .owl-nav .owl-prev, .owl-carousel .owl-controls .owl-nav .owl-next{color:'.$prev_next_icon.'}' ;
	echo '.table th.header{background-color:'.$my_schedule.'}' ;
	echo '.table td.time{color:'.$my_schedule.'}' ;

	//=========FOOTER STYLING======//
	echo '#footer{background-color:'.$bg_footer.'}' ;
	echo '#copyright{background-color:'.$bg_footer_2.'}' ;
	echo '.copyright-text{color:'.$copy_right.'}' ;
	echo '.copyright-text a{color:'.$copy_right_link.'}' ;
	echo '.copyright-text a:hover{color:'.$cr_link_hov.'}' ;
	echo '.widget-footer p{color:'.$footer_text.'}' ;
	echo '#footer .widget-footer h4.title, #footer .recent-post .post-item .post-content h4, .footer-content h4, .widget-footer .recent-post .post-item .post-content span.date{color:'.$widget_title.'}' ;
	echo '#footer .widget-footer h4.title:after{border-top-color:'.$widget_title.'}' ;


	
	echo '</style> ';

	}

	add_action( 'wp_head', 'kindergarten_customizer_header_output');