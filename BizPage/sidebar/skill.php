<?php
//add  customize text and logo-----------------------

function my_skill_customizer($wp_customize)
{
    // Theme Options Panel
    $wp_customize->add_panel(
        'my_theme_options_skill',
        array(
            'title'            => __('skill', 'my_theme'),
            'description'      => __('Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'my_theme'),
        )
    );

    $wp_customize->add_section(
        'text_options4',
        array(
            'title'         => __('Edit skill', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options_skill'
        )
    );
    // Setting for Copyright text.
    $wp_customize->add_setting(
        'add_title_of_skill',
        array(
            'default'           => __('skill ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_title_of_skill',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'text_options4',
            'label'       => 'skill title ',
            'description' => 'Text put here will be outputted in the front page',
        )
    );
    $wp_customize->add_setting(
        'add_about_of_skill',
        array(
            'default'           => __('skill ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_about_of_skill',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'text_options4',
            'label'       => 'Type about you skill',
            'description' => 'Text put here will be outputted in the front page',
        )
    );
    // $wp_customize->add_setting('skill_image', array(
    //     'capability'        => 'edit_theme_options',
    //     'default'           => '',
    //     'sanitize_callback' => 'ic_sanitize_image',
    // ));
    // $wp_customize->add_control(new WP_Customize_Image_Control(
    //     $wp_customize,
    //     'skill_image',
    //     array(
    //         'label'    => __('skill_image', 'text-domain'),
    //         'section'  => 'text_options3',
    //         'settings' => 'skill_image',
    //     )
    // ));
}

add_action('customize_register', 'my_skill_customizer');





// add customize team post---------------
function wpdocs_register_skill_cpt() {

    $labels = array(
 
       'name'                     => __( 'skills', 'TEXTDOMAINHERE' ),
       'singular_name'            => __( 'skill', 'TEXTDOMAINHERE' ),
       'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
       'add_new_item'             => __( 'Add New skill', 'TEXTDOMAINHERE' ),
       'edit_item'                => __( 'Edit skill', 'TEXTDOMAINHERE' ),
       'new_item'                 => __( 'New skill', 'TEXTDOMAINHERE' ),
       'view_item'                => __( 'View skill', 'TEXTDOMAINHERE' ),
       'view_items'               => __( 'View skills', 'TEXTDOMAINHERE' ),
       'search_items'             => __( 'Search skills', 'TEXTDOMAINHERE' ),
       'not_found'                => __( 'No skills found.', 'TEXTDOMAINHERE' ),
       'not_found_in_trash'       => __( 'No skills found in Trash.', 'TEXTDOMAINHERE' ),
       'parent_item_colon'        => __( 'Parent skills:', 'TEXTDOMAINHERE' ),
       'all_items'                => __( 'All skills', 'TEXTDOMAINHERE' ),
       'archives'                 => __( 'skill Archives', 'TEXTDOMAINHERE' ),
       'attributes'               => __( 'skill Attributes', 'TEXTDOMAINHERE' ),
       'insert_into_item'         => __( 'Insert into skill', 'TEXTDOMAINHERE' ),
       'uploaded_to_this_item'    => __( 'Uploaded to this skill', 'TEXTDOMAINHERE' ),
       'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
       'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
       'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
       'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
       'menu_name'                => __( 'skills', 'TEXTDOMAINHERE' ),
       'filter_items_list'        => __( 'Filter skill list', 'TEXTDOMAINHERE' ),
       'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
       'items_list_navigation'    => __( 'skills list navigation', 'TEXTDOMAINHERE' ),
       'items_list'               => __( 'skills list', 'TEXTDOMAINHERE' ),
       'item_published'           => __( 'skill published.', 'TEXTDOMAINHERE' ),
       'item_published_privately' => __( 'skill published privately.', 'TEXTDOMAINHERE' ),
       'item_reverted_to_draft'   => __( 'skill reverted to draft.', 'TEXTDOMAINHERE' ),
       'item_scheduled'           => __( 'skill scheduled.', 'TEXTDOMAINHERE' ),
       'item_updated'             => __( 'skill updated.', 'TEXTDOMAINHERE' ),
       'item_link'                => __( 'skill Link', 'TEXTDOMAINHERE' ),
       'item_link_description'    => __( 'A link to an skill.', 'TEXTDOMAINHERE' ),
 
    );
 
    $args = array(
 
       'labels'                => $labels,
       'description'           => __( 'organize and manage company Sliders', 'TEXTDOMAINHERE' ),
       'public'                => true,
       'menu_icon'             => 'dashicons-info',
       'capability_type'       => 'post',
       'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
    );
 
    register_post_type( 'skill', $args );
 
 }
 add_action( 'init', 'wpdocs_register_skill_cpt' );
?>