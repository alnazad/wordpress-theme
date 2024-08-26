<?php
//add  customize text and logo-----------------------

function my_fact_customizer($wp_customize)
{
    // Theme Options Panel
    $wp_customize->add_panel(
        'my_theme_options_fact',
        array(
            'title'            => __('fact', 'my_theme'),
            'description'      => __('Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'my_theme'),
        )
    );

    $wp_customize->add_section(
        'text_options3',
        array(
            'title'         => __('Edit fact', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options_fact'
        )
    );
    // Setting for Copyright text.
    $wp_customize->add_setting(
        'add_title_of_fact',
        array(
            'default'           => __('fact ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_title_of_fact',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'text_options3',
            'label'       => 'fact title ',
            'description' => 'Text put here will be outputted in the front page',
        )
    );
    $wp_customize->add_setting(
        'add_about_of_fact',
        array(
            'default'           => __('fact ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_about_of_fact',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'text_options3',
            'label'       => 'Type about you fact',
            'description' => 'Text put here will be outputted in the front page',
        )
    );
    $wp_customize->add_setting('fact_image', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'fact_image',
        array(
            'label'    => __('fact_image', 'text-domain'),
            'section'  => 'text_options3',
            'settings' => 'fact_image',
        )
    ));
}

add_action('customize_register', 'my_fact_customizer');





// add customize team post---------------
function wpdocs_register_fact_cpt() {

    $labels = array(
 
       'name'                     => __( 'facts', 'TEXTDOMAINHERE' ),
       'singular_name'            => __( 'fact', 'TEXTDOMAINHERE' ),
       'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
       'add_new_item'             => __( 'Add New fact', 'TEXTDOMAINHERE' ),
       'edit_item'                => __( 'Edit fact', 'TEXTDOMAINHERE' ),
       'new_item'                 => __( 'New fact', 'TEXTDOMAINHERE' ),
       'view_item'                => __( 'View fact', 'TEXTDOMAINHERE' ),
       'view_items'               => __( 'View facts', 'TEXTDOMAINHERE' ),
       'search_items'             => __( 'Search facts', 'TEXTDOMAINHERE' ),
       'not_found'                => __( 'No facts found.', 'TEXTDOMAINHERE' ),
       'not_found_in_trash'       => __( 'No facts found in Trash.', 'TEXTDOMAINHERE' ),
       'parent_item_colon'        => __( 'Parent facts:', 'TEXTDOMAINHERE' ),
       'all_items'                => __( 'All facts', 'TEXTDOMAINHERE' ),
       'archives'                 => __( 'fact Archives', 'TEXTDOMAINHERE' ),
       'attributes'               => __( 'fact Attributes', 'TEXTDOMAINHERE' ),
       'insert_into_item'         => __( 'Insert into fact', 'TEXTDOMAINHERE' ),
       'uploaded_to_this_item'    => __( 'Uploaded to this fact', 'TEXTDOMAINHERE' ),
       'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
       'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
       'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
       'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
       'menu_name'                => __( 'facts', 'TEXTDOMAINHERE' ),
       'filter_items_list'        => __( 'Filter fact list', 'TEXTDOMAINHERE' ),
       'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
       'items_list_navigation'    => __( 'facts list navigation', 'TEXTDOMAINHERE' ),
       'items_list'               => __( 'facts list', 'TEXTDOMAINHERE' ),
       'item_published'           => __( 'fact published.', 'TEXTDOMAINHERE' ),
       'item_published_privately' => __( 'fact published privately.', 'TEXTDOMAINHERE' ),
       'item_reverted_to_draft'   => __( 'fact reverted to draft.', 'TEXTDOMAINHERE' ),
       'item_scheduled'           => __( 'fact scheduled.', 'TEXTDOMAINHERE' ),
       'item_updated'             => __( 'fact updated.', 'TEXTDOMAINHERE' ),
       'item_link'                => __( 'fact Link', 'TEXTDOMAINHERE' ),
       'item_link_description'    => __( 'A link to an fact.', 'TEXTDOMAINHERE' ),
 
    );
 
    $args = array(
 
       'labels'                => $labels,
       'description'           => __( 'organize and manage company Sliders', 'TEXTDOMAINHERE' ),
       'public'                => true,
       'menu_icon'             => 'dashicons-info',
       'capability_type'       => 'post',
       'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
    );
 
    register_post_type( 'fact', $args );
 
 }
 add_action( 'init', 'wpdocs_register_fact_cpt' );
?>