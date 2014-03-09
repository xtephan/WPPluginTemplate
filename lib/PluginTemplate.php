<?php
/*
* @package PluginTemplate
* @author Stefan Fodor (stefan@unserialized.dk)
 * Brain is here. a controller more of less
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

//require the basic plugin class that contains the convinience functions
require_once 'BasicPlugin.php';

/**
 * Class PluginTemplate
 * Main brains of the operation
 */
class PluginTemplate extends BasicPlugin {

    /*
     * Class variables
     */
    protected $prefix='plgt_';  //!< class prefix, used when saving options and dashboard styles

    /**
     * Get Singleton singleton
     * Do NOT delete this class
     *
     * @return object|void
     */
    public static function instance( $className = '' ) {
        return parent::instance( __CLASS__ );
    }

    /**
     * Constuctor
     *
     * Hook up actions and filters to class methods
     * and define menu pages
     */
    public function __construct() {

        //add hooks
        //$this->addHook( 'hook_name', 'method_name' );

        //add filter
        //$this->addFilter( 'filter_name', array( 'method_name', priority, expected_parameters_number ) );

        //add menu pages
        //$this->addMenuPage( "page_title", "menu_title", "menu_tag", "viewer_filename" );
    }

    /**
     * Method called automatically on plugin activation or first time run
     */
    public function install() { }

    /**
     * Ok, start coding now :)
     */
    public function foo() {
        return "bar";
    }

}