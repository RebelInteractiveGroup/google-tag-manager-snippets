<?php
namespace MWD\GTMSnippets;

// Set up plugin class
class Init
{
    public function __construct()
    {
        /**
         * Check whether ACF is installed, produce a notice if not, and return
         */

        add_action('admin_notices', function () {
            if (!class_exists('ACF')) {
                echo '<div class="notice notice-warning">
                <p><strong>Google Tag Manager Snippets</strong> requires <a href="http://advancedcustomfields.com/">Advanced Custom Fields</a>. Please install Advanced Custom Fields to use this plugin.</p>
              </div>';

                return;
            }
        });

        /**
         * Create ACF options page(s)
         */
        add_action('admin_menu', function () {
            if (!class_exists('ACF')) {
                return;
            }
            \acf_add_options_sub_page([
              'page_title' 	=> 'Google Tag Manager Snippets',
              'menu_title'	=> 'Google Tag Manager',
              'parent_slug'	=> 'options-general.php',
            ]);
        });

        /**
         * Add scripts to new options page(s)
         */
        add_action('admin_enqueue_scripts', function ($hook) {

            // Check if we're on our options page, return if not
            if ('settings_page_acf-options-google-tag-manager' != $hook) {
                return;
            }

            // Otherwise include our Javascript bundle
            wp_enqueue_code_editor(array( 'type' => 'text/html' ));
            wp_enqueue_script('acf-google-tag-manager-snippets-scripts', GTMSNIPPETS_PLUGIN_URL . 'dist/app.bundle.js', 'jQuery');
        });

        /**
         * Enqueue scripts on the front-end
         */
        // Add script to the document head
        add_action('wp_head', function () {
            echo get_field('mwd-google-tag-manager-snippets-head_snippet', 'option');
        }, 10);

        // Add script after opening body tag
        add_action('get_header', function () {
            echo get_field('mwd-google-tag-manager-snippets-body_snippet', 'option');
        }, 10);
    }
}
