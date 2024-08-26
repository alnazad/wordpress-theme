<?php
function wpdocs_register_testimonial_cpt() {

    $labels = array(
 
       'name'                     => __( 'testimonials', 'TEXTDOMAINHERE' ),
       'singular_name'            => __( 'testimonial', 'TEXTDOMAINHERE' ),
       'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
       'add_new_item'             => __( 'Add New testimonial', 'TEXTDOMAINHERE' ),
       'edit_item'                => __( 'Edit testimonial', 'TEXTDOMAINHERE' ),
       'new_item'                 => __( 'New testimonial', 'TEXTDOMAINHERE' ),
       'view_item'                => __( 'View testimonial', 'TEXTDOMAINHERE' ),
       'view_items'               => __( 'View testimonials', 'TEXTDOMAINHERE' ),
       'search_items'             => __( 'Search testimonials', 'TEXTDOMAINHERE' ),
       'not_found'                => __( 'No testimonials found.', 'TEXTDOMAINHERE' ),
       'not_found_in_trash'       => __( 'No testimonials found in Trash.', 'TEXTDOMAINHERE' ),
       'parent_item_colon'        => __( 'Parent testimonials:', 'TEXTDOMAINHERE' ),
       'all_items'                => __( 'All testimonials', 'TEXTDOMAINHERE' ),
       'archives'                 => __( 'testimonial Archives', 'TEXTDOMAINHERE' ),
       'attributes'               => __( 'testimonial Attributes', 'TEXTDOMAINHERE' ),
       'insert_into_item'         => __( 'Insert into testimonial', 'TEXTDOMAINHERE' ),
       'uploaded_to_this_item'    => __( 'Uploaded to this testimonial', 'TEXTDOMAINHERE' ),
       'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
       'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
       'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
       'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
       'menu_name'                => __( 'testimonials', 'TEXTDOMAINHERE' ),
       'filter_items_list'        => __( 'Filter testimonial list', 'TEXTDOMAINHERE' ),
       'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
       'items_list_navigation'    => __( 'testimonials list navigation', 'TEXTDOMAINHERE' ),
       'items_list'               => __( 'testimonials list', 'TEXTDOMAINHERE' ),
       'item_published'           => __( 'testimonial published.', 'TEXTDOMAINHERE' ),
       'item_published_privately' => __( 'testimonial published privately.', 'TEXTDOMAINHERE' ),
       'item_reverted_to_draft'   => __( 'testimonial reverted to draft.', 'TEXTDOMAINHERE' ),
       'item_scheduled'           => __( 'testimonial scheduled.', 'TEXTDOMAINHERE' ),
       'item_updated'             => __( 'testimonial updated.', 'TEXTDOMAINHERE' ),
       'item_link'                => __( 'testimonial Link', 'TEXTDOMAINHERE' ),
       'item_link_description'    => __( 'A link to an testimonial.', 'TEXTDOMAINHERE' ),
 
    );
 
    $args = array(
 
       'labels'                => $labels,
       'description'           => __( 'organize and manage company Sliders', 'TEXTDOMAINHERE' ),
       'public'                => true,
       'menu_icon'             => 'dashicons-info',
       'capability_type'       => 'post',
       'supports'              => array( 'title', 'editor','thumbnail','custom-fields' ),
    );
 
    register_post_type( 'testimonial', $args );
 
 }
 add_action( 'init', 'wpdocs_register_testimonial_cpt' );
?>