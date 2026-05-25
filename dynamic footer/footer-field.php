<?php

/**
 * ACF Fields: Footer
 *
 * @package Roda
 */

if (! defined('ABSPATH')) {
    exit;
}

if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group([
        'key'    => 'group_footer',
        'title'  => 'Footer Settings',
        'fields' => [

            // Logo
            [
                'key'           => 'field_footer_logo',
                'label'         => 'Footer Logo',
                'name'          => 'footer_logo',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'thumbnail',
            ],

            // Description
            [
                'key'          => 'field_footer_description',
                'label'        => 'Footer Description',
                'name'         => 'footer_description',
                'type'         => 'wysiwyg',
                'toolbar'      => 'basic',
                'media_upload' => 0,
            ],

            // Social Links
            [
                'key'          => 'field_footer_social_links',
                'label'        => 'Social Links',
                'name'         => 'footer_social_links',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Social Link',
                'sub_fields'   => [
                    [
                        'key'   => 'field_footer_social_label',
                        'label' => 'Label',
                        'name'  => 'label',
                        'type'  => 'text',
                    ],
                    [
                        'key'   => 'field_footer_social_url',
                        'label' => 'URL',
                        'name'  => 'url',
                        'type'  => 'url',
                    ],
                ],
            ],

            // Privacy Policy Links
            [
                'key'          => 'field_footer_privacy_links',
                'label'        => 'Privacy Policy Links',
                'name'         => 'footer_privacy_links',
                'type'         => 'repeater',
                'layout'       => 'table',
                'button_label' => 'Add Link',
                'sub_fields'   => [
                    [
                        'key'   => 'field_footer_privacy_label',
                        'label' => 'Label',
                        'name'  => 'label',
                        'type'  => 'text',
                    ],
                    [
                        'key'   => 'field_footer_privacy_url',
                        'label' => 'URL',
                        'name'  => 'url',
                        'type'  => 'url',
                    ],
                ],
            ],

            // Copyright
            [
                'key'   => 'field_footer_copyright',
                'label' => 'Copyright Text',
                'name'  => 'footer_copyright',
                'type'  => 'text',
            ],

            // Fixed Contact Button
            [
                'key'          => 'field_footer_contact_btn_content',
                'label'        => 'Contact Button Content',
                'name'         => 'footer_contact_btn_content',
                'type'         => 'wysiwyg',
                'toolbar'      => 'basic',
                'media_upload' => 0,
            ],
            [
                'key'   => 'field_footer_contact_btn_url',
                'label' => 'Contact Button URL',
                'name'  => 'footer_contact_btn_url',
                'type'  => 'url',
            ],
        ],
        'location' => [
            [
                [
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'theme-footer-settings',
                ],
            ],
        ],
        'active' => true,
    ]);
}
