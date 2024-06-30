<?php
/*
Plugin Name: Bangla Font Hind Siliguri
Plugin URI: http://www.sbtechbd.xyz
Description: Bangla font Hind Siliguri is an awesome WordPress plugin. Enhance the aesthetic appeal of your website's Bangla text with the "Bangla Font Hind Siliguri" plugin. Experience a visually pleasing display of Bangla content, utilizing fonts commonly found in textbooks, ensuring a consistent and beautiful appearance across all devices and browsers.
Author: Subrata Debnath
Version: 1.0.2
Author URI: http://subrata6630.github.io
Text Domain: bangla-font-hind-siliguri
License: GPLv2 
License URI: http://www.gnu.org/licenses/gpl-2.0.html 
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class Bangla_Font_Hind_Siliguri
{
    public function __construct()
    {
        // Only enqueue styles on the frontend
        if (!is_admin() && !wp_doing_ajax()) {
            add_action('wp_enqueue_scripts', array($this, 'enqueue_Bangla_Font_Stylesheet'));
        }
    }

    public function enqueue_Bangla_Font_Stylesheet()
    {
        wp_register_style('bangla-font-styles', plugins_url('fonts/font.css', __FILE__), array(), '1.0.0');
        wp_enqueue_style('bangla-font-styles');
    }
}

// Instantiate the class to initiate the actions
$Bangla_Font_Hind_Siliguri = new Bangla_Font_Hind_Siliguri();
