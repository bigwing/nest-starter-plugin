<?php
/*
Plugin Name: Nest Custom Plugin
Plugin URI: https://bigwing.com
Description: Post Types, Taxonomies, Custom Fields
Author: BigWingAgency
Version: 1.0.0
Requires at least: 4.3
Author URI: https://bigwing.com
*/
class Nest_Custom_Plugin {
    public function __construct() {
        
    }
    
    /**
	 * Run plugin init actions
	 * 
	 * Called after class has been instantiated
	 *
	 * @since 1.0
	 *
	 */
    public function run() {
        add_action( 'init', array( $this, 'create_post_types' ), 11 );
        add_action( 'init', array( $this, 'create_taxonomies' ), 12 );
        add_action( 'cmb2_init', array( $this, 'create_custom_fields' ), 10 );
        add_action( 'init', array( $this, 'create_shortcodes' ), 14 );
    }
    
    /**
	 * Create custom post types here
	 * 
	 * Create custom post types here
	 *
	 * @since 1.0
	 *
	 */
    public function create_post_types() {
        
    }
    
    /**
	 * Create custom taxonomies here
	 * 
	 * Create custom taxonomies here
	 *
	 * @since 1.0
	 *
	 */
    public function create_taxonomies() {
        
    }
    
    /**
	 * Create custom post types here
	 * 
	 * Create custom post types here
	 *
	 * @since 1.0
	 *
	 */
    public function create_custom_fields() {
        /* Create Custom H1 */
        $custom_h1 = new_cmb2_box( array(
            'id' => 'custom_h1',
            'title' => 'Custom Headline',
            'object_types' => get_post_types( '', 'names' ),
            'context' => 'normal',
            'priority' => 'high',
            'show_names' => true
            ) );
        $custom_h1->add_field( array(
            'name' => 'Custom H1',
            'desc' => 'Enter your Custom H1 text here.',
            'id' => 'custom_h1',
            'type' => 'text'
            ) );   
    }
    
    /**
	 * Create shortcodes here
	 * 
	 * Create shortcodes here
	 *
	 * @since 1.0
	 *
	 */
    public function create_shortcodes() {
        
    }
    
    
} //end Nest_Custom_Plugin
add_action( 'plugins_loaded', function() {
    $custom_plugin = new Nest_Custom_Plugin();
    $custom_plugin->run();
} ); 



 
?>