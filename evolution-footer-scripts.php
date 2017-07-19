<?php
/*
Plugin Name: AH Footer Scripts
Plugin URI: https://andreas-hecht.com/ah-footer-scripts/
Description: This small plugin moves all scripts (including jQuery) to the footer to help speed up page load times, while keep stylesheets in the header. Note that this only works if you have plugins and a theme that utilizes wp_enqueue_scripts correctly.
Version: 1.0.1
Author:      Andreas Hecht
Author URI:  https://andreas-hecht.com
License:     GPL2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html


    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE, aka AS-IS.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * @uses wp_head() and wp_enqueue_scripts()
 * 
 */
if ( !function_exists( 'evolution_footer_scripts' ) ) {
    
    function evolution_footer_scripts() { 

	   remove_action('wp_head', 'wp_print_scripts'); 
	   remove_action('wp_head', 'wp_print_head_scripts', 9); 
	   remove_action('wp_head', 'wp_enqueue_scripts', 1); 
    } 
}
add_action( 'wp_enqueue_scripts', 'evolution_footer_scripts' );