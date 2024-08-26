<?php
//add  customize text and logo-----------------------

function my_contract_customizer($wp_customize)
{
    // Theme Options Panel
    $wp_customize->add_panel(
        'my_theme_options_contract',
        array(
            'title'            => __('contract', 'my_theme'),
            'description'      => __('Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'my_theme'),
        )
    );

    $wp_customize->add_section(
        'text_options7',
        array(
            'title'         => __('Edit contract', 'my_theme'),
            'priority'      => 1,
            'panel'         => 'my_theme_options_contract'
        )
    );
    // Setting for Copyright text.
    $wp_customize->add_setting(
        'add_title_of_contract',
        array(
            'default'           => __('contract ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_title_of_contract',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'text_options7',
            'label'       => 'contract title ',
            'description' => 'Text put here will be outputted in the front page',
        )
    );
    $wp_customize->add_setting(
        'add_about_of_contract',
        array(
            'default'           => __('contract ', 'my_theme'),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );
    // Control for Copyright text
    $wp_customize->add_control(
        'add_about_of_contract',
        array(
            'type'        => 'textarea',
            'priority'    => 10,
            'section'     => 'text_options7',
            'label'       => 'Type about you contract',
            'description' => 'Text put here will be outputted in the front page',
        )
    );
    $wp_customize->add_setting('contract_image', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
        'sanitize_callback' => 'ic_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'contract_image',
        array(
            'label'    => __('contract_image', 'text-domain'),
            'section'  => 'text_options7',
            'settings' => 'contract_image',
        )
    ));
}

add_action('customize_register', 'my_contract_customizer');





// add customize team post---------------
function wpdocs_register_contract_cpt() {

    $labels = array(
 
       'name'                     => __( 'contracts', 'TEXTDOMAINHERE' ),
       'singular_name'            => __( 'contract', 'TEXTDOMAINHERE' ),
       'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
       'add_new_item'             => __( 'Add New contract', 'TEXTDOMAINHERE' ),
       'edit_item'                => __( 'Edit contract', 'TEXTDOMAINHERE' ),
       'new_item'                 => __( 'New contract', 'TEXTDOMAINHERE' ),
       'view_item'                => __( 'View contract', 'TEXTDOMAINHERE' ),
       'view_items'               => __( 'View contracts', 'TEXTDOMAINHERE' ),
       'search_items'             => __( 'Search contracts', 'TEXTDOMAINHERE' ),
       'not_found'                => __( 'No contracts found.', 'TEXTDOMAINHERE' ),
       'not_found_in_trash'       => __( 'No contracts found in Trash.', 'TEXTDOMAINHERE' ),
       'parent_item_colon'        => __( 'Parent contracts:', 'TEXTDOMAINHERE' ),
       'all_items'                => __( 'All contracts', 'TEXTDOMAINHERE' ),
       'archives'                 => __( 'contract Archives', 'TEXTDOMAINHERE' ),
       'attributes'               => __( 'contract Attributes', 'TEXTDOMAINHERE' ),
       'insert_into_item'         => __( 'Insert into contract', 'TEXTDOMAINHERE' ),
       'uploaded_to_this_item'    => __( 'Uploaded to this contract', 'TEXTDOMAINHERE' ),
       'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
       'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
       'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
       'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
       'menu_name'                => __( 'contracts', 'TEXTDOMAINHERE' ),
       'filter_items_list'        => __( 'Filter contract list', 'TEXTDOMAINHERE' ),
       'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
       'items_list_navigation'    => __( 'contracts list navigation', 'TEXTDOMAINHERE' ),
       'items_list'               => __( 'contracts list', 'TEXTDOMAINHERE' ),
       'item_published'           => __( 'contract published.', 'TEXTDOMAINHERE' ),
       'item_published_privately' => __( 'contract published privately.', 'TEXTDOMAINHERE' ),
       'item_reverted_to_draft'   => __( 'contract reverted to draft.', 'TEXTDOMAINHERE' ),
       'item_scheduled'           => __( 'contract scheduled.', 'TEXTDOMAINHERE' ),
       'item_updated'             => __( 'contract updated.', 'TEXTDOMAINHERE' ),
       'item_link'                => __( 'contract Link', 'TEXTDOMAINHERE' ),
       'item_link_description'    => __( 'A link to an contract.', 'TEXTDOMAINHERE' ),
 
    );
 
    $args = array(
 
       'labels'                => $labels,
       'description'           => __( 'organize and manage company Sliders', 'TEXTDOMAINHERE' ),
       'public'                => true,
       'menu_icon'             => 'dashicons-info',
       'capability_type'       => 'post',
       'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
    );
 
    register_post_type( 'contract', $args );
 
 }
 add_action( 'init', 'wpdocs_register_contract_cpt' );
?>