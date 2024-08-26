<?php
// for customized widget-------------------------------------------
function my_client_customizer1($wp_customize)
{
    // Theme Options Panel
    $wp_customize->add_panel(
        'my_theme_options_client',
        array(
            'title'            => __('Our Client', 'my_theme'),
            'description'      => __('Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'my_theme'),
        )
    );

    $wp_customize->add_section(
        'text_options1',
        array(
            'title'         => __('Edit client', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options_client'
        )
    );
    // Setting for Copyright text.
    $wp_customize->add_setting(
        'add_title_of_client',
        array(
            'default'           => __('Our Client 2', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_title_of_client',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'text_options1',
            'label'       => 'Copyright text',
            'description' => 'Text put here will be outputted in the footer',
        )
    );

    $wp_customize->add_setting(
      'add_about_of_client',
      array(
          'default'           => __('client', 'my_theme'),
          'sanitize_callback' => 'sanitize_text_field',
          'transport'         => 'refresh',
      )
  );
  // Control for Copyright text
  $wp_customize->add_control(
      'add_about_of_client',
      array(
          'type'        => 'textarea',
          'priority'    => 10,
          'section'     => 'text_options1',
          'label'       => 'Copyright text',
          'description' => 'Text put here will be outputted in the footer',
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

add_action('customize_register', 'my_client_customizer1');

// for post -------------------------------------------------------
function wpdocs_register_client_cpt() {

    $labels = array(
 
       'name'                     => __( 'clients', 'TEXTDOMAINHERE' ),
       'singular_name'            => __( 'client', 'TEXTDOMAINHERE' ),
       'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
       'add_new_item'             => __( 'Add New client', 'TEXTDOMAINHERE' ),
       'edit_item'                => __( 'Edit client', 'TEXTDOMAINHERE' ),
       'new_item'                 => __( 'New client', 'TEXTDOMAINHERE' ),
       'view_item'                => __( 'View client', 'TEXTDOMAINHERE' ),
       'view_items'               => __( 'View clients', 'TEXTDOMAINHERE' ),
       'search_items'             => __( 'Search clients', 'TEXTDOMAINHERE' ),
       'not_found'                => __( 'No clients found.', 'TEXTDOMAINHERE' ),
       'not_found_in_trash'       => __( 'No clients found in Trash.', 'TEXTDOMAINHERE' ),
       'parent_item_colon'        => __( 'Parent clients:', 'TEXTDOMAINHERE' ),
       'all_items'                => __( 'All clients', 'TEXTDOMAINHERE' ),
       'archives'                 => __( 'client Archives', 'TEXTDOMAINHERE' ),
       'attributes'               => __( 'client Attributes', 'TEXTDOMAINHERE' ),
       'insert_into_item'         => __( 'Insert into client', 'TEXTDOMAINHERE' ),
       'uploaded_to_this_item'    => __( 'Uploaded to this client', 'TEXTDOMAINHERE' ),
       'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
       'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
       'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
       'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
       'menu_name'                => __( 'clients', 'TEXTDOMAINHERE' ),
       'filter_items_list'        => __( 'Filter client list', 'TEXTDOMAINHERE' ),
       'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
       'items_list_navigation'    => __( 'clients list navigation', 'TEXTDOMAINHERE' ),
       'items_list'               => __( 'clients list', 'TEXTDOMAINHERE' ),
       'item_published'           => __( 'client published.', 'TEXTDOMAINHERE' ),
       'item_published_privately' => __( 'client published privately.', 'TEXTDOMAINHERE' ),
       'item_reverted_to_draft'   => __( 'client reverted to draft.', 'TEXTDOMAINHERE' ),
       'item_scheduled'           => __( 'client scheduled.', 'TEXTDOMAINHERE' ),
       'item_updated'             => __( 'client updated.', 'TEXTDOMAINHERE' ),
       'item_link'                => __( 'client Link', 'TEXTDOMAINHERE' ),
       'item_link_description'    => __( 'A link to an client.', 'TEXTDOMAINHERE' ),
 
    );
 
    $args = array(
 
       'labels'                => $labels,
       'description'           => __( 'organize and manage company Sliders', 'TEXTDOMAINHERE' ),
       'public'                => true,
       'menu_icon'             => 'dashicons-info',
       'capability_type'       => 'post',
       'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
    );
 
    register_post_type( 'client', $args );
 
 }
 add_action( 'init', 'wpdocs_register_client_cpt' );
?>