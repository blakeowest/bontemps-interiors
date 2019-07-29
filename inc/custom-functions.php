<?php

add_filter( 'rwmb_meta_boxes', 'our_register_meta_boxes' );
function our_register_meta_boxes( $meta_boxes ) {
    $prefix = 'our_';
    
    /**
     * Artists 
    **/
    $meta_boxes[] = array(
        'id'         => 'artists-options',
        'title'      => __( 'Featured Artists Options', 'textdomain' ),
        'post_types' => array( 'featured-artist' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
				'name'     => __( 'Location', 'textdomain' ),
				'id'       => $prefix . 'artist-location',
                'desc'  => 'Input location of artist.',
				'type'     => 'text',
			),
        )
    );

    /**
     * Home Page
    **/
    $meta_boxes[] = array(
        'id'         => 'home-options',
        'title'      => __( 'Home Options', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
        'include' => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'        => 'AND',
            // List of page templates. Can be array or comma separated. Optional.
            'template'        => array( 'page-home.php' ),
        ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'     => __( 'Intro Heading Left', 'textdomain' ),
                'id'       => $prefix . 'intro-head-left',
                'desc'  => 'Input intro heading.',
                'type'     => 'textarea',
            ),
            array(
                'name'     => __( 'Intro Heading Right', 'textdomain' ),
                'id'       => $prefix . 'intro-head-right',
                'desc'  => 'Input intro heading.',
                'type'     => 'textarea',
            ),
            array(
                'name'     => __( 'Section 3 Content', 'textdomain' ),
                'id'       => $prefix . 'sec-3-content',
                'desc'  => 'Input section 3 text.',
                'type'     => 'wysiwyg',
            ),
        )
    );

    /**
     * Footer Options
    **/
    $meta_boxes[] = array(
        'id'         => 'footer-options',
        'title'      => __( 'Footer Options', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
        'include' => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'        => 'AND',
            // List of page templates. Can be array or comma separated. Optional.
            'template'        => array( 'page-home.php' ),
        ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'     => __( 'Location', 'textdomain' ),
                'id'       => $prefix . 'footer-location',
                'desc'  => 'Input location.',
                'type'     => 'wysiwyg',
            ),
            array(
                'name'     => __( 'Hours', 'textdomain' ),
                'id'       => $prefix . 'footer-hours',
                'desc'  => 'Input business hours.',
                'type'     => 'wysiwyg',
            ),
        )
    );

    /**
     * About Page
    **/
    $meta_boxes[] = array(
        'id'         => 'about-options',
        'title'      => __( 'About Options', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
        'include' => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'        => 'AND',
            // List of page templates. Can be array or comma separated. Optional.
            'template'        => array( 'page-about.php' ),
        ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'     => __( 'Intro Heading', 'textdomain' ),
                'id'       => $prefix . 'about-intro',
                'desc'  => 'Input intro heading.',
                'type'     => 'textarea',
            ),
            array(
                'name'     => __( 'Angela Bio', 'textdomain' ),
                'id'       => $prefix . 'angela-bio',
                'desc'  => 'Input Angela Bio.',
                'type'     => 'textarea',
            ),
        )
    );

    /**
     * Services Page
    **/
    $meta_boxes[] = array(
        'id'         => 'services-options',
        'title'      => __( 'Services Options', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
        'include' => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'        => 'AND',
            // List of page templates. Can be array or comma separated. Optional.
            'template'        => array( 'page-services.php' ),
        ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'     => __( 'Intro Heading', 'textdomain' ),
                'id'       => $prefix . 'services-intro',
                'desc'  => 'Input intro heading.',
                'type'     => 'textarea',
            ),
        )
    );

    /**
     * Showroom Page
    **/
    $meta_boxes[] = array(
        'id'         => 'showroom-options',
        'title'      => __( 'Showroom Options', 'textdomain' ),
        'post_types' => array( 'page' ),
        // Register this meta box for posts matched below conditions
        'include' => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'        => 'AND',
            // List of page templates. Can be array or comma separated. Optional.
            'template'        => array( 'page-showroom.php' ),
        ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'     => __( 'Textarea 1', 'textdomain' ),
                'id'       => $prefix . 'textarea-1',
                'desc'  => 'Input text for first textarea.',
                'type'     => 'textarea',
            ),
            array(
                'name'     => __( 'Textarea 2', 'textdomain' ),
                'id'       => $prefix . 'textarea-2',
                'desc'  => 'Input text for second textarea.',
                'type'     => 'textarea',
            ),
            array(
                'name'     => __( 'Textarea 3', 'textdomain' ),
                'id'       => $prefix . 'textarea-3',
                'desc'  => 'Input text for third textarea.',
                'type'     => 'textarea',
            ),
        )
    );
    
    return $meta_boxes;
}