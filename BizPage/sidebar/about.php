<?php
// about customizition-----------
function my_about_customizer($wp_customize)
{
    // Theme Options Panel
    $wp_customize->add_panel(
        'my_theme_options_about',
        array(
            'title'            => __('about', 'my_theme'),
            'description'      => __('Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'my_theme'),
        )
    );

    $wp_customize->add_section(
        'text_options5',
        array(
            'title'         => __('Edit about', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options_about'
        )
    );
    // Setting for Copyright text.
    $wp_customize->add_setting(
        'add_title_of_about',
        array(
            'default'           => __('about ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_title_of_about',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'text_options5',
            'label'       => 'about title ',
            'description' => 'Text put here will be outputted in the front page',
        )
    );
    $wp_customize->add_setting(
        'add_about_of_about',
        array(
            'default'           => __('about ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_about_of_about',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'text_options5',
            'label'       => 'Type about you about',
            'description' => 'Text put here will be outputted in the front page',
        )
    );
    
}

add_action('customize_register', 'my_about_customizer');


// About post---------------------------------------
function wpdocs_register_about_cpt() {

$labels = array(

   'name'                     => __( 'abouts', 'TEXTDOMAINHERE' ),
   'singular_name'            => __( 'about', 'TEXTDOMAINHERE' ),
   'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
   'add_new_item'             => __( 'Add New about', 'TEXTDOMAINHERE' ),
   'edit_item'                => __( 'Edit about', 'TEXTDOMAINHERE' ),
   'new_item'                 => __( 'New about', 'TEXTDOMAINHERE' ),
   'view_item'                => __( 'View about', 'TEXTDOMAINHERE' ),
   'view_items'               => __( 'View abouts', 'TEXTDOMAINHERE' ),
   'search_items'             => __( 'Search abouts', 'TEXTDOMAINHERE' ),
   'not_found'                => __( 'No abouts found.', 'TEXTDOMAINHERE' ),
   'not_found_in_trash'       => __( 'No abouts found in Trash.', 'TEXTDOMAINHERE' ),
   'parent_item_colon'        => __( 'Parent abouts:', 'TEXTDOMAINHERE' ),
   'all_items'                => __( 'All abouts', 'TEXTDOMAINHERE' ),
   'archives'                 => __( 'about Archives', 'TEXTDOMAINHERE' ),
   'attributes'               => __( 'about Attributes', 'TEXTDOMAINHERE' ),
   'insert_into_item'         => __( 'Insert into about', 'TEXTDOMAINHERE' ),
   'uploaded_to_this_item'    => __( 'Uploaded to this about', 'TEXTDOMAINHERE' ),
   'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
   'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
   'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
   'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
   'menu_name'                => __( 'abouts', 'TEXTDOMAINHERE' ),
   'filter_items_list'        => __( 'Filter about list', 'TEXTDOMAINHERE' ),
   'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
   'items_list_navigation'    => __( 'abouts list navigation', 'TEXTDOMAINHERE' ),
   'items_list'               => __( 'abouts list', 'TEXTDOMAINHERE' ),
   'item_published'           => __( 'about published.', 'TEXTDOMAINHERE' ),
   'item_published_privately' => __( 'about published privately.', 'TEXTDOMAINHERE' ),
   'item_reverted_to_draft'   => __( 'about reverted to draft.', 'TEXTDOMAINHERE' ),
   'item_scheduled'           => __( 'about scheduled.', 'TEXTDOMAINHERE' ),
   'item_updated'             => __( 'about updated.', 'TEXTDOMAINHERE' ),
   'item_link'                => __( 'about Link', 'TEXTDOMAINHERE' ),
   'item_link_description'    => __( 'A link to an about.', 'TEXTDOMAINHERE' ),

);

$args = array(

   'labels'                => $labels,
   'description'           => __( 'organize and manage company Sliders', 'TEXTDOMAINHERE' ),
   'public'                => true,
   'menu_icon'             => 'dashicons-info',
   'capability_type'       => 'post',
   'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
);

register_post_type( 'about', $args );

}
add_action( 'init', 'wpdocs_register_about_cpt' );