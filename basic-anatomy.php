<?php
/*
Plugin Name: Anatomy [Basic]
Plugin URI: https://www.humananatomyillustrations.com/interactive-human-basic-anatomy.html
Description: Customize each part of the Basic Anatomy (link, hover info., etc) through the dashboard and use the shortcode in your page(s).
Version: 2.6
Author: Interactive Anatomy Plugins
Author URI: https://www.humanAnatomyIllustrations.com/
Text Domain: basic-anatomy
Domain Path: /languages
*/

declare(strict_types=1);

namespace BASIC;

use BASIC\BASIC;

if (!defined('BASIC_VERSION')) {
    define('BASIC_VERSION', '2.6');
}

if (!defined('BASIC_DIR')) {
    define('BASIC_DIR', plugin_dir_path(__FILE__));
}

if (!defined('BASIC_URL')) {
    define('BASIC_URL', plugin_dir_url(__FILE__));
}

(new BASIC())->init();

class BASIC {

    const PLUGIN_NAME = 'Anatomy [Basic]';

    private $options = null;

    public function init() {
        $this->initActions();
        $this->initShortcodes();
        $this->initOptions();
    }

    private function initActions() {
    	if( !function_exists('wp_get_current_user') ) {
            include(ABSPATH . "wp-includes/pluggable.php");
        }
        add_action( 'admin_menu', array($this, 'addOptionsPage') );
        add_action( 'admin_footer', array($this, 'addJsConfigInFooter') );
        add_action( 'wp_footer', array($this, 'addSpanTag') );
        add_action( 'admin_enqueue_scripts', array($this, 'initAdminScript') );
        add_action( 'init', array($this, 'loadTextdomain') );
    }

    private function initShortcodes() {
        add_shortcode('basic_anatomy', array($this, 'BASICShortcode'));
    }

    private function initOptions() {
        $defaultOptions = $this->getDefaultOptions();
        $this->options  = get_option('basic_anatomy');

        if (current_user_can( 'manage_options' )){
            $this->updateOptions($defaultOptions);
        }

        if (!is_array($this->options)) {
            $this->options = $defaultOptions;
        }

        $this->prepareOptionsListForTpl();
    }

    public function addJsConfigInFooter() {
        echo wp_kses_post('<span id="tip-basic" style="margin-top:-32px"></span>');
        include __DIR__ . "/includes/anatomy-config.php";
    }

    public function addOptionsPage() {
        add_menu_page(
            BASIC::PLUGIN_NAME,
            BASIC::PLUGIN_NAME,
            'manage_options',
            'basic-anatomy',
            array($this, 'optionsScreen'),
            BASIC_URL . 'public/images/anatomy-icon.png'
        );
    }

    /**
     * @return array
     */
    private function getDefaultOptions() {
        $areas = array(
            'HEAD', 'NECK', 'CHEST', 'ABDOMEN', 'PELVIS', 'ARM [RT]', 'ARM [LT]', 'LEG [RT]', 'LEG [LT]'
        );

        foreach ($areas as $k => $area) {
            $default['url_' . ($k + 1)]    = '';
            $default['turl_' . ($k + 1)]   = '_self';
            $default['info_' . ($k + 1)]   = $area;
            $default['enbl_' . ($k + 1)]   = 1;
        }

        return $default;
    }

    private function updateOptions(array $defaultOptions) {

        if (isset($_POST['basic_anatomy']) && !isset($_POST['preview_map'])) {
            update_option('basic_anatomy',$_POST);

            $this->options = $_POST;
        }

        if (isset($_POST['basic_anatomy']) && isset($_POST['restore_default'])) {
            update_option('basic_anatomy', $defaultOptions);

            $this->options = $defaultOptions;
        }
    }

    private function prepareOptionsListForTpl() {
        $this->options['prepared_list'] = array();
        $i                              = 1;
        while (isset($this->options['url_' . $i])) {
            $this->options['prepared_list'][] = array(
                'index'  => $i,
                'info_'  => $this->options['info_' . $i],
                'url'    => $this->options['url_' . $i],
                'turl'   => $this->options['turl_' . $i],
                'enbl'   => isset($this->options['enbl_' . $i]),
            );

            $i++;
        }
    }

    public function BASICShortcode() {
        wp_enqueue_style('basic-anatomy-style-frontend', BASIC_URL . 'public/css/anatomy-style.css', false, '1.0', 'all');
        wp_enqueue_script('basic-anatomy-interact', BASIC_URL . 'public/js/anatomy-script.js?t=' . time(), array('jquery'), 10, '1.0', true);

        ob_start();

        include __DIR__ . "/includes/anatomy.php";
        include __DIR__ . "/includes/anatomy-config.php";

        return ob_get_clean();
    }

    public function optionsScreen() {
        include __DIR__ . "/includes/anatomy-admin.php";
    }

    public function initAdminScript() {
        if ( current_user_can( 'manage_options') && ( esc_attr(isset($_GET['page'])) && esc_attr($_GET['page']) == 'basic-anatomy') ):
            wp_enqueue_style('thickbox');
            wp_enqueue_script('thickbox');
            wp_enqueue_script('media-upload');

            wp_enqueue_style('basic-anatomy-dashboard', BASIC_URL . 'public/css/anatomy-dashboard.css', false, '1.0', 'all');
            wp_enqueue_style('basic-anatomy-style', BASIC_URL . 'public/css/anatomy-style.css', false, '1.0', 'all');
            wp_enqueue_style('wp-tinyeditor', BASIC_URL . 'public/css/tinyeditor.css', false, '1.0', 'all');

            wp_enqueue_script('basic-anatomy-interact', BASIC_URL . 'public/js/anatomy-script.js?t=' . time(), array('jquery'), 10, '1.0', true);
            wp_enqueue_script('basic-anatomy-tiny.editor', BASIC_URL . 'public/js/editor/tinymce.min.js', 10, '1.0', true);
            wp_enqueue_script('basic-anatomy-script', BASIC_URL . 'public/js/editor/scripts.js', array('wp-color-picker'), false, true);
        endif;
    }

    public function addSpanTag()
    {
        echo wp_kses_post('<span id="tip-basic"></span>');
    }
    
    public function loadTextdomain() {
        load_plugin_textdomain( 'basic-anatomy', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    }
}
