<?php

if (function_exists('acf_add_local_field_group')):

acf_add_local_field_group(array(
    'key' => 'group_5c6ecb88910e4',
    'title' => 'Google Tag Manager Snippets',
    'fields' => array(
        array(
            'key' => 'field_5c6ecb8f7835b',
            'label' => 'Head Snippet',
            'name' => 'mwd-google-tag-manager-snippets-head_snippet',
            'type' => 'textarea',
            'instructions' => 'Google Tag Manager snippet to be inserted in the site\'s <head> tag.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => 'acf-code',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => '',
        ),
        array(
            'key' => 'field_5c6ecbb27835c',
            'label' => 'Body Snippet',
            'name' => 'mwd-google-tag-manager-snippets-body_snippet',
            'type' => 'textarea',
            'instructions' => 'Google Tag Manager snippet to be inserted in after the site\'s opening <body> tag.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => 'acf-code',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => '',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'acf-options-google-tag-manager',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

endif;
