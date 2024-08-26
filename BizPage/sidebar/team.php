<?php
//add  customize text and logo-----------------------

function my_team_customizer($wp_customize)
{
    // Theme Options Panel
    $wp_customize->add_panel(
        'my_theme_options_team',
        array(
            'title'            => __('Our team', 'my_theme'),
            'description'      => __('Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'my_theme'),
        )
    );

    $wp_customize->add_section(
        'text_options2',
        array(
            'title'         => __('Edit team', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options_team'
        )
    );
    // Setting for Copyright text.
    $wp_customize->add_setting(
        'add_title_of_Team',
        array(
            'default'           => __('Team ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_title_of_Team',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'text_options2',
            'label'       => 'Team title ',
            'description' => 'Text put here will be outputted in the front page',
        )
    );
    $wp_customize->add_setting(
        'add_about_of_Team',
        array(
            'default'           => __('Team ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_about_of_Team',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'text_options2',
            'label'       => 'Type about you team',
            'description' => 'Text put here will be outputted in the front page',
        )
    );
   //  $wp_customize->add_setting('logo', array(
   //      'capability'        => 'edit_theme_options',
   //      'default'           => '',
   //      'sanitize_callback' => 'ic_sanitize_image',
   //  ));
   //  $wp_customize->add_control(new WP_Customize_Image_Control(
   //      $wp_customize,
   //      'logo',
   //      array(
   //          'label'    => __('Logo', 'text-domain'),
   //          'section'  => 'text_options',
   //          'settings' => 'logo',
   //      )
   //  ));
}

add_action('customize_register', 'my_team_customizer');





// add customize team post---------------
function wpdocs_register_team_cpt() {

    $labels = array(
 
       'name'                     => __( 'teams', 'TEXTDOMAINHERE' ),
       'singular_name'            => __( 'team', 'TEXTDOMAINHERE' ),
       'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
       'add_new_item'             => __( 'Add New team', 'TEXTDOMAINHERE' ),
       'edit_item'                => __( 'Edit team', 'TEXTDOMAINHERE' ),
       'new_item'                 => __( 'New team', 'TEXTDOMAINHERE' ),
       'view_item'                => __( 'View team', 'TEXTDOMAINHERE' ),
       'view_items'               => __( 'View teams', 'TEXTDOMAINHERE' ),
       'search_items'             => __( 'Search teams', 'TEXTDOMAINHERE' ),
       'not_found'                => __( 'No teams found.', 'TEXTDOMAINHERE' ),
       'not_found_in_trash'       => __( 'No teams found in Trash.', 'TEXTDOMAINHERE' ),
       'parent_item_colon'        => __( 'Parent teams:', 'TEXTDOMAINHERE' ),
       'all_items'                => __( 'All teams', 'TEXTDOMAINHERE' ),
       'archives'                 => __( 'team Archives', 'TEXTDOMAINHERE' ),
       'attributes'               => __( 'team Attributes', 'TEXTDOMAINHERE' ),
       'insert_into_item'         => __( 'Insert into team', 'TEXTDOMAINHERE' ),
       'uploaded_to_this_item'    => __( 'Uploaded to this team', 'TEXTDOMAINHERE' ),
       'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
       'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
       'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
       'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
       'menu_name'                => __( 'teams', 'TEXTDOMAINHERE' ),
       'filter_items_list'        => __( 'Filter team list', 'TEXTDOMAINHERE' ),
       'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
       'items_list_navigation'    => __( 'teams list navigation', 'TEXTDOMAINHERE' ),
       'items_list'               => __( 'teams list', 'TEXTDOMAINHERE' ),
       'item_published'           => __( 'team published.', 'TEXTDOMAINHERE' ),
       'item_published_privately' => __( 'team published privately.', 'TEXTDOMAINHERE' ),
       'item_reverted_to_draft'   => __( 'team reverted to draft.', 'TEXTDOMAINHERE' ),
       'item_scheduled'           => __( 'team scheduled.', 'TEXTDOMAINHERE' ),
       'item_updated'             => __( 'team updated.', 'TEXTDOMAINHERE' ),
       'item_link'                => __( 'team Link', 'TEXTDOMAINHERE' ),
       'item_link_description'    => __( 'A link to an team.', 'TEXTDOMAINHERE' ),
 
    );
 
    $args = array(
 
       'labels'                => $labels,
       'description'           => __( 'organize and manage company Sliders', 'TEXTDOMAINHERE' ),
       'public'                => true,
       'menu_icon'             => 'dashicons-info',
       'capability_type'       => 'post',
       'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
    );
 
    register_post_type( 'team', $args );
 
 }
 add_action( 'init', 'wpdocs_register_team_cpt' );
?>