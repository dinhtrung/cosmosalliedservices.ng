<?php
	/*
	Plugin Name: Kindergarten Extra
	Plugin URI: http://www.themesawesome.com
	Description: A plugin to add functionality to Premium Theme Kindergarten from Themes Awesome
	Version: 1.0
	Author: Themes Awesome
	Author URI: http://www.themesawesome.com
	License: GPL2
	*/



define( 'KINDERGARTEN_EXTRA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'KINDERGARTEN_EXTRA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );



// Flush rewrite rules on activation
function kindergarten_extra_activation() {
    flush_rewrite_rules(true);
}

/*-----------------------------------------------------------------------------------*/
/* The Class custom post type
/*-----------------------------------------------------------------------------------*/
    add_action('init', 'kindergarten_class_register'); 
    function kindergarten_class_register() { 


        $labels = array(
            'name'               => _x('Class', 'Class General Name', 'kindergarten'),
            'singular_name'      => _x('Class', 'Class Singular Name', 'kindergarten'),
            'add_new'            => _x('Add New', 'Add New Class Name', 'kindergarten'),
            'add_new_item'       => __('Add New Class', 'kindergarten'),
            'edit_item'          => __('Edit Class', 'kindergarten'),
            'new_item'           => __('New Class', 'kindergarten'),
            'view_item'          => __('View Class', 'kindergarten'),
            'search_items'       => __('Search Class', 'kindergarten'),
            'not_found'          => __('Nothing found', 'kindergarten'),
            'not_found_in_trash' => __('Nothing found in Trash', 'kindergarten'),
            'parent_item_colon'  => ''
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'query_var'          => 'class',
            'capability_type'    => 'post',
            'hierarchical'       => false,
            'rewrite'            => false,
            'supports'           => array('title','editor','thumbnail'),
            'menu_position'       => 4,

        ); 

        register_post_type('kindergarten-class' , $args);
            
        register_taxonomy(
                "class-category", array("kindergarten-class"), array(
                "hierarchical"   => true,
                "label"          => "Categories", 
                "singular_label" => "Categories", 
                "rewrite"        => true));

        register_taxonomy(
                "class-tag", array("kindergarten-class"), array(
                "hierarchical"   => false,
                "label"          => "Tags", 
                "singular_label" => "Tags", 
                "rewrite"        => true));
        
        register_taxonomy_for_object_type('class-category', 'kindergarten-class'); 
        register_taxonomy_for_object_type('class-tag', 'kindergarten-class');

    }
            
    function kindergarten_class_edit_columns($columns) {  
        $columns = array(  
            "cb"          => "<input type=\"checkbox\" />",  
            "title"       => __('Project', 'kindergarten'),  
            "type"        => __('Categories', 'kindergarten'),  
        );    
        return $columns;  
    }    

    add_filter("manage_edit-class_columns", "kindergarten_class_edit_columns"); 


       
    function kindergarten_class_custom_columns($column) {  
        global $post;  
        switch ($column) {  

            case "type":  
                echo get_the_term_list($post->ID, 'class-category', '', ', ','');  
                break;         
        }  
    }    

    add_action("manage_posts_custom_column",  "kindergarten_class_custom_columns");


/*-----------------------------------------------------------------------------------*/
/* The Teacher custom post type
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists('kindergarten_teacher_register') ) {

// Register Custom Post Type
function kindergarten_teacher_register() {

    $labels = array(
        'name'                => _x( 'Teacher', 'Post Type General Name', 'kindergarten' ),
        'singular_name'       => _x( 'Teacher', 'Post Type Singular Name', 'kindergarten' ),
        'menu_name'           => __( 'Teacher', 'kindergarten' ),
        'parent_item_colon'   => __( 'Parent Teacher:', 'kindergarten' ),
        'all_items'           => __( 'All Teacher', 'kindergarten' ),
        'view_item'           => __( 'View Teacher', 'kindergarten' ),
        'add_new_item'        => __( 'Add New Teacher', 'kindergarten' ),
        'add_new'             => __( 'Add New', 'kindergarten' ),
        'edit_item'           => __( 'Edit Teacher', 'kindergarten' ),
        'update_item'         => __( 'Update Teacher', 'kindergarten' ),
        'search_items'        => __( 'Search Teacher', 'kindergarten' ),
        'not_found'           => __( 'Not found', 'kindergarten' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'kindergarten' ),
    );
    $args = array(
        'label'               => __( 'kindergarten_teacher', 'kindergarten' ),
        'description'         => __( 'Teacher post', 'kindergarten' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'kindergarten_teacher', $args );

}

// Hook into the 'init' action
add_action( 'init', 'kindergarten_teacher_register', 0 );

}

/*-----------------------------------------------------------------------------------*/
/* The Testimonial custom post type
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists('kindergarten_testi_register') ) {

// Register Custom Post Type
function kindergarten_testi_register() {

    $labels = array(
        'name'                => _x( 'Testimonial', 'Post Type General Name', 'kindergarten' ),
        'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'kindergarten' ),
        'menu_name'           => __( 'Testimonial', 'kindergarten' ),
        'parent_item_colon'   => __( 'Parent Testimonial:', 'kindergarten' ),
        'all_items'           => __( 'All Testimonial', 'kindergarten' ),
        'view_item'           => __( 'View Testimonial', 'kindergarten' ),
        'add_new_item'        => __( 'Add New Testimonial', 'kindergarten' ),
        'add_new'             => __( 'Add New', 'kindergarten' ),
        'edit_item'           => __( 'Edit Testimonial', 'kindergarten' ),
        'update_item'         => __( 'Update Testimonial', 'kindergarten' ),
        'search_items'        => __( 'Search Testimonial', 'kindergarten' ),
        'not_found'           => __( 'Not found', 'kindergarten' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'kindergarten' ),
    );
    $args = array(
        'label'               => __( 'kindergarten_testi', 'kindergarten' ),
        'description'         => __( 'Testimonial post', 'kindergarten' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'kindergarten_testi', $args );

}

// Hook into the 'init' action
add_action( 'init', 'kindergarten_testi_register', 0 );

}



if(!function_exists('redux_register_custom_extension_loader')) :
    function redux_register_custom_extension_loader($ReduxFramework) {
        $path    = dirname( __FILE__ ) . '/extensions/';
            $folders = scandir( $path, 1 );
            foreach ( $folders as $folder ) {
                if ( $folder === '.' or $folder === '..' or ! is_dir( $path . $folder ) ) {
                    continue;
                }
                $extension_class = 'ReduxFramework_Extension_' . $folder;
                if ( ! class_exists( $extension_class ) ) {
                    // In case you wanted override your override, hah.
                    $class_file = $path . $folder . '/extension_' . $folder . '.php';
                    $class_file = apply_filters( 'redux/extension/' . $ReduxFramework->args['opt_name'] . '/' . $folder, $class_file );
                    if ( $class_file ) {
                        require_once( $class_file );
                    }
                }
                if ( ! isset( $ReduxFramework->extensions[ $folder ] ) ) {
                    $ReduxFramework->extensions[ $folder ] = new $extension_class( $ReduxFramework );
                }
            }
    }
    // Modify {$redux_opt_name} to match your opt_name
    add_action("redux/extensions/kindergarten_framework/before", 'redux_register_custom_extension_loader', 0);
endif;


    include_once dirname( __FILE__ ) . '/kindergarten-importer.php';
