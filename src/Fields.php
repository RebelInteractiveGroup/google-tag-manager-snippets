<?php
namespace MWD\GTMSnippets;

class Fields
{
    public function __construct()
    {

    // Create fields with ACF JSON
        add_action('acf/init', function () {
            foreach (glob(GTMSNIPPETS_PLUGIN_DIR . '/src/fields/*.php') as $field) {
                include($field);
            }
        }, 0);
    }
}
