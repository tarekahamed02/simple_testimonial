<?php

define('ATTACHMENTS_SETTINGS_SCREEN', false); // disable the Settings screen

add_filter('attachments_default_instance', '__return_false'); // disable the default instance 


function testimonial_attachments($attachments)
{
    $fields         = array(

        array(
            'name'      => 'name',                         // unique field name
            'type'      => 'text',                          // registered field type
            'label'     => __('Name', 'testimonial'),    // label to display
        ),

        array(
            'name'      => 'position',                         // unique field name
            'type'      => 'text',                          // registered field type
            'label'     => __('Position', 'testimonial'),    // label to display
        ),
        array(
            'name'      => 'company',                         // unique field name
            'type'      => 'text',                          // registered field type
            'label'     => __('Company', 'testimonial'),    // label to display
        ),
        array(
            'name'      => 'testimonial',                         // unique field name
            'type'      => 'textarea',                          // registered field type
            'label'     => __('Testimonial', 'testimonial'),    // label to display
        )
    );

    $args = array(

        'label'         => 'Feature Slider',
        'post_type'     => array('page'),
        'filetype'      => null,
        'note'          => 'Add Slider Images',
        'button_text'   => __('Attach Files', 'testimonial'),
        'fields'        => $fields,
    );

    $attachments->register('my_attachments', $args); // unique instance name
}

add_action('attachments_register', 'testimonial_attachments');
