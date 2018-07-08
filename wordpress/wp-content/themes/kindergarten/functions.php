<?php

define('KINDERGARTEN_DIR', get_template_directory_uri());
define('KINDERGARTEN_TEMPLATE_DIR', get_template_directory());
define('KINDERGARTEN_FRAMEWORK_DIR', KINDERGARTEN_TEMPLATE_DIR . '/inc/option/core' );

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

//Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 1170; /* pixels */

/*-----------------------------------------------------------------------------------*/
/*  SETUP THEME
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'kindergarten_setup' ) ) :

	function kindergarten_setup() {
		// several theme support
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );	
		add_theme_support( 'html5', array( 'gallery', 'caption' ) );
		load_theme_textdomain( 'kindergarten', KINDERGARTEN_TEMPLATE_DIR .'/languages' );
		add_theme_support( "title-tag" );

}
endif;
add_action( 'after_setup_theme', 'kindergarten_setup' );

/*-----------------------------------------------------------------------------------*/
/*  ACF
/*-----------------------------------------------------------------------------------*/

add_filter('acf/settings/show_admin', '__return_false');

/*-----------------------------------------------------------------------------------*/
/*  SCRIPTS & STYLES
/*-----------------------------------------------------------------------------------*/

function kindergarten_scripts() {

//All necessary CSS
wp_enqueue_style( 'kindergarten-bootstrap', KINDERGARTEN_DIR .'/css/bootstrap.min.css', array(), null );
wp_enqueue_style( 'kindergarten-plugin-css', KINDERGARTEN_DIR .'/css/plugin.css', array(), null );
wp_enqueue_style( 'kindergarten-responsive-css', KINDERGARTEN_DIR .'/css/responsive.css', array(), null );
wp_enqueue_style( 'kindergarten-style', get_stylesheet_uri(), array( 'kindergarten-bootstrap','kindergarten-plugin-css' ) );
wp_enqueue_style( 'kindergarten-font', KINDERGARTEN_DIR .'/css/font.css', array(), null );

//All Necessary Script
wp_enqueue_script( 'kindergarten-plugins', KINDERGARTEN_DIR. '/js/plugin.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'kindergarten-main-js', KINDERGARTEN_DIR. '/js/main.js', array( 'jquery' ), '', true );
}

add_action( 'wp_enqueue_scripts', 'kindergarten_scripts' );


/*-----------------------------------------------------------------------------------*/
/*  CALL FRAMEWORK
/*-----------------------------------------------------------------------------------*/


require_once( KINDERGARTEN_TEMPLATE_DIR . '/inc/option/panel/config.php' );


/*-----------------------------------------------------------------------------------*/
/*  MENU
/*-----------------------------------------------------------------------------------*/

//Register Menus
register_nav_menu( 'header-menu', 'Header Menu' ); 

//TOP MENU
function kindergarten_top_nav_menu(){
  wp_nav_menu( array(
	'theme_location' => 'header-menu',
	'container'       => 'ul',
   'menu_class'      => 'sm menus',
	'fallback_cb'  => 'kindergarten_header_menu_cb'
  ));
}

function kindergarten_top_mobile_menu(){
  wp_nav_menu( array(
	'theme_location' => 'header-menu',
	'container'       => 'ul',
   'menu_class'      => 'menus-mobile',
	'fallback_cb'  => 'kindergarten_header_menu_mobile_cb'
  ));
}

// FALLBACK IF PRIMARY MENU HAVEN'T SET YET
function kindergarten_header_menu_cb() {
  echo '<ul id="menu-top-menu" class="menus">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

function kindergarten_header_menu_mobile_cb() {
  echo '<ul id="menu-top-mobile" class="menus-mobile">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

/*-----------------------------------------------------------------------------------*/
/*  HEADER
/*-----------------------------------------------------------------------------------*/

// logo text or image huh?
function kindergarten_logo_type(){

$options = get_option('kindergarten_framework');
$logo = '';
if (isset($options['logo_upload'])) {
$logo = $options['logo_upload'];
$upload_logo = $logo['url'];
}


if ( ! empty( $upload_logo ) ) { ?>

	<div class="logo-image">
	<a href="<?php bloginfo( 'siteurl' ); ?>"><img src="<?php echo esc_url( $upload_logo ); ?>" class="image-logo" alt="logo" /></a>
	</div>
	
	<?php } else { ?> 
	
	<div class="logo-title">
		<h2 class="site-title">
			<a href="<?php echo esc_url( home_url() ); ?>/" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h2>
	</div>

<?php }
} 


/*-----------------------------------------------------------------------------------*/
/*  WIDGET
/*-----------------------------------------------------------------------------------*/


// SETUP DEFAULT SIDEBAR
function kindergarten_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'kindergarten' ),
		'id'            => 'primary-sidebar',
		'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="heading-block"><h4>',
		'after_title'   => '</h4></div>',
	) );
}
add_action( 'widgets_init', 'kindergarten_widgets_init' );



require_once( KINDERGARTEN_TEMPLATE_DIR . '/inc/widget/latestpost-widget.php' );

/*-----------------------------------------------------------------------------------*/
/*  PAGINATION
/*-----------------------------------------------------------------------------------*/

function kindergarten_pagination($pages = '', $range = 2)
{  
		 $showitems = ($range * 2)+1;  

		 global $paged;
		 if(empty($paged)) $paged = 1;

		 if($pages == '')
		 {
				 global $wp_query;
				 $pages = $wp_query->max_num_pages;
				 if(!$pages)
				 {
						 $pages = 1;
				 }
		 }   

		 if(1 != $pages)
		 {
				 echo "<div class='pagination col-md-12 text-center'>";
				 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>First</a>";
				 if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

				 for ($i=1; $i <= $pages; $i++)
				 {
						 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
						 {
								 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
						 }
				 }

				 if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
				 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last</a>";
				 echo "</div>\n";
		 }
}




/*-----------------------------------------------------------------------------------*/
/*  CUSTOM FUNCTIONS
/*-----------------------------------------------------------------------------------*/
require_once( KINDERGARTEN_TEMPLATE_DIR . '/inc/function/custom.php' );
require_once( KINDERGARTEN_TEMPLATE_DIR . '/inc/function/navigation.php' );
require_once( KINDERGARTEN_TEMPLATE_DIR . '/inc/function/aq_resizer.php' );
require_once( KINDERGARTEN_TEMPLATE_DIR . '/inc/function/comment.php' );
require_once( KINDERGARTEN_TEMPLATE_DIR . '/inc/function/thefooter.php' );
require_once( KINDERGARTEN_TEMPLATE_DIR . '/inc/function/akmanda-customizer.php' );
require_once( KINDERGARTEN_TEMPLATE_DIR . '/inc/function/meta-box.php' );

// INSTALL NECESSARY PLUGINS
require_once( KINDERGARTEN_TEMPLATE_DIR . '/class-tgm.php' ); /*activate plugin function*/
