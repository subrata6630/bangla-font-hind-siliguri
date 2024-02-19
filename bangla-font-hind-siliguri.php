<?php
/*
Plugin Name: Bangla font Hind Siliguri
Plugin URI: http://www.sbtechbd.xyz
Description: Bangla font Hind Siliguri is an awesome WordPress plugin. Enhance the aesthetic appeal of your website's Bangla text with the "Bangla Font Hind Siliguri" plugin. Experience a visually pleasing display of Bangla content, utilizing fonts commonly found in textbooks, ensuring a consistent and beautiful appearance across all devices and browsers.
Author: Subrata Debnath
Version: 1.0.1
Author URI: http://subrata6630.github.io
Text Domain: bangla-font-hind-siliguri
Domain Path: /languages
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Stable tag: 1.0.1
*/




defined('ABSPATH') or die('Stop! You can not do this!');

class BanglaFontEmbedder {

    public function __construct() {
        add_action('wp_head', array($this, 'embedBanglaFont'));
    }

    public function embedBanglaFont() {
        $this->enqueueFontStylesheet();
        $this->addFontStyles();
    }

    private function enqueueFontStylesheet() {
        wp_enqueue_style('bangla-font-styles', plugins_url('fonts/font.css', __FILE__), array(), '1.0.0');
    }
    
    private function addFontStyles() {
        ?>
        <style>
            body, article, h1, h2, h3, h4, h5, h6, textarea, input, select, .topbar, .main-menu, .breadcrumb, .copyrights-area, form span.required {
                font-family: 'Hind Siliguri', Arial, sans-serif !important;
            }
        </style>
        <?php
    }

  


}

// Instantiate the class to initiate the actions
$banglaFontEmbedder = new BanglaFontEmbedder();
