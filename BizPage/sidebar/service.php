<?php
// about customizition-----------
function my_service_customizer($wp_customize)
{
    // Theme Options Panel
    $wp_customize->add_panel(
        'my_theme_options_service',
        array(
            'title'            => __('service', 'my_theme'),
            'description'      => __('Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'my_theme'),
        )
    );

    $wp_customize->add_section(
        'text_options6',
        array(
            'title'         => __('Edit service', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options_service'
        )
    );
    // Setting for Copyright text.
    $wp_customize->add_setting(
        'add_title_of_service',
        array(
            'default'           => __('service ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_title_of_service',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'text_options6',
            'label'       => 'service title ',
            'description' => 'Text put here will be outputted in the front page',
        )
    );
    $wp_customize->add_setting(
        'add_about_of_service',
        array(
            'default'           => __('service ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_about_of_service',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'text_options6',
            'label'       => 'Type about you service',
            'description' => 'Text put here will be outputted in the front page',
        )
    );
    
}

add_action('customize_register', 'my_service_customizer');


// About post---------------------------------------
function wpdocs_register_service_cpt() {

$labels = array(

   'name'                     => __( 'services', 'TEXTDOMAINHERE' ),
   'singular_name'            => __( 'service', 'TEXTDOMAINHERE' ),
   'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
   'add_new_item'             => __( 'Add New service', 'TEXTDOMAINHERE' ),
   'edit_item'                => __( 'Edit service', 'TEXTDOMAINHERE' ),
   'new_item'                 => __( 'New service', 'TEXTDOMAINHERE' ),
   'view_item'                => __( 'View service', 'TEXTDOMAINHERE' ),
   'view_items'               => __( 'View services', 'TEXTDOMAINHERE' ),
   'search_items'             => __( 'Search services', 'TEXTDOMAINHERE' ),
   'not_found'                => __( 'No services found.', 'TEXTDOMAINHERE' ),
   'not_found_in_trash'       => __( 'No services found in Trash.', 'TEXTDOMAINHERE' ),
   'parent_item_colon'        => __( 'Parent services:', 'TEXTDOMAINHERE' ),
   'all_items'                => __( 'All services', 'TEXTDOMAINHERE' ),
   'archives'                 => __( 'service Archives', 'TEXTDOMAINHERE' ),
   'attributes'               => __( 'service Attributes', 'TEXTDOMAINHERE' ),
   'insert_into_item'         => __( 'Insert into service', 'TEXTDOMAINHERE' ),
   'uploaded_to_this_item'    => __( 'Uploaded to this service', 'TEXTDOMAINHERE' ),
   'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
   'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
   'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
   'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
   'menu_name'                => __( 'services', 'TEXTDOMAINHERE' ),
   'filter_items_list'        => __( 'Filter service list', 'TEXTDOMAINHERE' ),
   'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
   'items_list_navigation'    => __( 'services list navigation', 'TEXTDOMAINHERE' ),
   'items_list'               => __( 'services list', 'TEXTDOMAINHERE' ),
   'item_published'           => __( 'service published.', 'TEXTDOMAINHERE' ),
   'item_published_privately' => __( 'service published privately.', 'TEXTDOMAINHERE' ),
   'item_reverted_to_draft'   => __( 'service reverted to draft.', 'TEXTDOMAINHERE' ),
   'item_scheduled'           => __( 'service scheduled.', 'TEXTDOMAINHERE' ),
   'item_updated'             => __( 'service updated.', 'TEXTDOMAINHERE' ),
   'item_link'                => __( 'service Link', 'TEXTDOMAINHERE' ),
   'item_link_description'    => __( 'A link to an service.', 'TEXTDOMAINHERE' ),

);

$args = array(

   'labels'                => $labels,
   'description'           => __( 'organize and manage company Sliders', 'TEXTDOMAINHERE' ),
   'public'                => true,
   'menu_icon'             => 'dashicons-info',
   'capability_type'       => 'post',
   'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
);

register_post_type( 'service', $args );

}
add_action( 'init', 'wpdocs_register_service_cpt' );