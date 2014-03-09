<?php
/**
Plugin Name: PluginTemplate
Plugin URI: https://github.com/xtephan/PluginTemplate
Description: Wordpress Basic PluginTemplate
Version: 0.9
Author: Stefan Fodor
Author URI: http://unserialized.dk
License: GPLv3

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

//call the worker class
require_once( sprintf( '%s/lib/%s', dirname( __FILE__ ), basename(__FILE__) ) );

//determine the class name and ask for a singleton
$className=basename(__FILE__, '.php');
$className::instance();
