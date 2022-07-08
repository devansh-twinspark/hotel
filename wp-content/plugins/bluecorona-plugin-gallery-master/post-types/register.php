<?php
function bc_gallery_register_gallery_type() {
    $labels = array( 
        'name' => __( 'Album', BCGALLERYDOMAIN ),
        'singular_name' => __( 'Album', BCGALLERYDOMAIN ),
        'archives' => __( 'Album', BCGALLERYDOMAIN ),
        'add_new' => __( 'Add New Album', BCGALLERYDOMAIN ),
        'add_new_item' => __( 'Add New Album', BCGALLERYDOMAIN ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'has_archive' => 'gallery',
        //'rewrite' => array( 'has_front' => false ),
        'rewrite' => array( 'has_front' => false, 'slug' => 'photo-gallery' ),
        'menu_icon' => 'dashicons-images-alt2',
        // 'supports' => false,
        'supports'            => array( 'editor', 'thumbnail','title'),
        'show_in_rest' => true,
        'publicly_queryable' => true,
    );
    register_post_type( 'bc_galleries', $args );
}
