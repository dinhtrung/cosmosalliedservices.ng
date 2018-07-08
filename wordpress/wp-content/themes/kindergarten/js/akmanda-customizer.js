/*
*
*	Live Customiser Script
*	------------------------------------------------
	*	Akmanda Framework
	* 	Copyright Themes Awesome 2013 - http://www.themesawesome.com
*
*/
( function( $ ){		
	
	// HEADER STYLING

	wp.customize('menu_list',function( value ) {
		value.bind(function(to) {
			$('ul.menus li a').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_list_hovtext',function( value ) {
		value.bind(function(to) {
			$('ul.menus li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_list_hov',function( value ) {
		value.bind(function(to) {
			$('ul.menus li a:hover').css('background-color', to ? to : '' );
			$('ul.menus li.page_item_has_children a:hover:after, ul.menus li.menu-item-has-children a:hover:after, ul.menus li.open a:after').css('border-top-color', to ? to : '' );
		});
	});

	wp.customize('bg_menu',function( value ) {
		value.bind(function(to) {
			$('.site-header, .sb-search-input').css('background-color', to ? to : '' );
		});
	});

	wp.customize('bg_submenu',function( value ) {
		value.bind(function(to) {
			$('ul.menus li.menu-item-has-children ul.sub-menu').css('background-color', to ? to : '' );
		});
	});

	wp.customize('submenu_list',function( value ) {
		value.bind(function(to) {
			$('ul.sub-menu li a').css('color', to ? to : '' );
		});
	});

	wp.customize('submenu_list_hov',function( value ) {
		value.bind(function(to) {
			$('ul.menus li.menu-item-has-children ul.sub-menu li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('bg_serch_icon',function( value ) {
		value.bind(function(to) {
			$('.sb-icon-search i').css('background-color', to ? to : '' );
		});
	});

	wp.customize('serch_icon',function( value ) {
		value.bind(function(to) {
			$('.sb-icon-search i').css('color', to ? to : '' );
		});
	});

	wp.customize('bord_head',function( value ) {
		value.bind(function(to) {
			$('.site-header').css('border-color', to ? to : '' );
		});
	});

	// CONTENT STYLING

	wp.customize('slider_text',function( value ) {
		value.bind(function(to) {
			$('.flexslider-wrap .caption h1, .flexslider-wrap .caption h2, .flexslider-wrap .caption h4, .flexslider-wrap .caption h3, .flexslider-wrap .caption h5, .flexslider-wrap .caption h6, .flexslider-wrap .caption p').css('color', to ? to : '' );
		});
	});

	wp.customize('title_color',function( value ) {
		value.bind(function(to) {
			$('.heading-block, .contact-content h3, .contact-icon').css('color', to ? to : '' );
		});
	});

	wp.customize('sub_title_color',function( value ) {
		value.bind(function(to) {
			$('.heading-block h4.tagline').css('color', to ? to : '' );
		});
	});

	wp.customize('border_title_color',function( value ) {
		value.bind(function(to) {
			$('.heading-block:after, .heading-block.page-title:after').css('border-color', to ? to : '' );
		});
	});

	wp.customize('feat_title_color',function( value ) {
		value.bind(function(to) {
			$('.feature-desc h4').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_1',function( value ) {
		value.bind(function(to) {
			$('.button-normal.white a').css('background-color', to ? to : '' );
			$('.button-normal.white a').css('border-color', to ? to : '' );
		});
	});

	wp.customize('btn_1text',function( value ) {
		value.bind(function(to) {
			$('.button-normal.white a').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_2',function( value ) {
		value.bind(function(to) {
			$('.button-normal.green a, input[type="submit"].green').css('background-color', to ? to : '' );
			$('.button-normal.green a, input[type="submit"].green').css('border-color', to ? to : '' );
		});
	});

	wp.customize('btn_2text',function( value ) {
		value.bind(function(to) {
			$('.button-normal.green a, input[type="submit"].green').css('color', to ? to : '' );
		});
	});

	wp.customize('banner_text',function( value ) {
		value.bind(function(to) {
			$('.banner h3').css('color', to ? to : '' );
		});
	});


	wp.customize('title_recent',function( value ) {
		value.bind(function(to) {
			$('.post-content a, .sidebar-widget ul li:last-child a, .cat-item cat-item-320 a, .sidebar-widget ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('title_recent_hov',function( value ) {
		value.bind(function(to) {
			$('.post-content a:hover, .sidebar-widget ul li:last-child a:hover, .cat-item cat-item-320 a:hover, .sidebar-widget ul li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('archives_bg',function( value ) {
		value.bind(function(to) {
			$('.sidebar-widget .tagcloud a').css('background-color', to ? to : '' );
			$('.sidebar-widget .tagcloud a').css('border-color', to ? to : '' );
		});
	});

	wp.customize('archives_hover',function( value ) {
		value.bind(function(to) {
			$('.sidebar-widget .tagcloud a:hover').css('background-color', to ? to : '' );
			$('.sidebar-widget .tagcloud a:hover').css('border-color', to ? to : '' );
		});
	});

	wp.customize('archives_text',function( value ) {
		value.bind(function(to) {
			$('.sidebar-widget .tagcloud a').css('color', to ? to : '' );
		});
	});

	wp.customize('archives_text_hov',function( value ) {
		value.bind(function(to) {
			$('.sidebar-widget .tagcloud a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('link_sosmed',function( value ) {
		value.bind(function(to) {
			$('#copyright .social-links ul li a, .no-padding a').css('color', to ? to : '' );
		});
	});

	wp.customize('link_sosmed',function( value ) {
		value.bind(function(to) {
			$('#copyright .social-links ul li a:hover, .no-padding a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('prev_next',function( value ) {
		value.bind(function(to) {
			$('.owl-carousel .owl-controls .owl-nav .owl-prev, .owl-carousel .owl-controls .owl-nav .owl-next').css('background-color', to ? to : '' );
		});
	});

	wp.customize('prev_next_icon',function( value ) {
		value.bind(function(to) {
			$('.owl-carousel .owl-controls .owl-nav .owl-prev, .owl-carousel .owl-controls .owl-nav .owl-next').css('color', to ? to : '' );
		});
	});

	wp.customize('my_schedule',function( value ) {
		value.bind(function(to) {
			$('.table th.header').css('background-color', to ? to : '' );
			$('.table td.time').css('color', to ? to : '' );
		});
	});


	// FOOTER STYLING

	wp.customize('bg_footer',function( value ) {
		value.bind(function(to) {
			$('#footer').css('background-color', to ? to : '' );
		});
	});

	wp.customize('bg_footer_2',function( value ) {
		value.bind(function(to) {
			$('#copyright').css('background-color', to ? to : '' );
		});
	});

	wp.customize('copy_right',function( value ) {
		value.bind(function(to) {
			$('.copyright-text').css('color', to ? to : '' );
		});
	});

	wp.customize('copy_right_link',function( value ) {
		value.bind(function(to) {
			$('.copyright-text a').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_text',function( value ) {
		value.bind(function(to) {
			$('.widget-footer p').css('color', to ? to : '' );
		});
	});

	wp.customize('widget_title',function( value ) {
		value.bind(function(to) {
			$('#footer .widget-footer h4.title, #footer .recent-post .post-item .post-content h4, .footer-content h4, .widget-footer .recent-post .post-item .post-content span.date').css('color', to ? to : '' );
			$('#footer .widget-footer h4.title:after').css('border-top-color', to ? to : '' );
		});
	});


} )( jQuery );