<?php
namespace Proghive\Beta;

/**
 * Functions Class
 */
class Functions{
    public function __construct()
    {
        $this->proghive_theme_support();
    }

    /**
     * Enable for theme support
     */
    public function proghive_theme_support(){
        /**
         * Let WordPress manage the document title.
         * By adding theme support, we ceclare that this theme deos not use a
         * hard-coaded <title> tag in the doucment head, and except Wordpress to 
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /**
         * Enagle support for post formats
         */
        add_theme_support( 'post-format', array(
            'image',
            'gallery',
            'video',
            'audio',
            'quote',
            'link',
        ) );

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'proghive-popular-posts-thumb', 200, '', true );
		set_post_thumbnail_size( 1568, 9999 );

        
        //  * Set custom header
        add_theme_support(
            'custom-header',
            /**
             * Filter for Custom header Args
             */ 
            apply_filters(
                'proghivebeta_custom_header_args',
                array(
                    'width'  => 1920,
                    'height' => 100,
                )
            )
        );
        
        // Set Custom Body Background.
		add_theme_support( 'custom-background' );

        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
			)
		);

        // Add custom editor font sizes.
        add_theme_support(
            'editor-font-sizes',
            array(
                array(
                    'name'      => esc_html__( 'Extra small', 'proghivebeta' ),
                    'shortName' => esc_html_x( 'XS', 'Font size', 'proghivebeta' ),
                    'size'      => 16,
                    'slug'      => 'extra-small',
                ),
                array(
                    'name'      => esc_html__( 'Small', 'proghivebeta' ),
                    'shortName' => esc_html_x( 'S', 'Font size', 'proghivebeta' ),
                    'size'      => 18,
                    'slug'      => 'small',
                ),
                array(
                    'name'      => esc_html__( 'Normal', 'proghivebeta' ),
                    'shortName' => esc_html_x( 'M', 'Font size', 'proghivebeta' ),
                    'size'      => 20,
                    'slug'      => 'normal',
                ),
                array(
                    'name'      => esc_html__( 'Large', 'proghivebeta' ),
                    'shortName' => esc_html_x( 'L', 'Font size', 'proghivebeta' ),
                    'size'      => 24,
                    'slug'      => 'large',
                ),
                array(
                    'name'      => esc_html__( 'Extra large', 'proghivebeta' ),
                    'shortName' => esc_html_x( 'XL', 'Font size', 'proghivebeta' ),
                    'size'      => 40,
                    'slug'      => 'extra-large',
                ),
                array(
                    'name'      => esc_html__( 'Huge', 'proghivebeta' ),
                    'shortName' => esc_html_x( 'XXL', 'Font size', 'proghivebeta' ),
                    'size'      => 96,
                    'slug'      => 'huge',
                ),
                array(
                    'name'      => esc_html__( 'Gigantic', 'proghivebeta' ),
                    'shortName' => esc_html_x( 'XXXL', 'Font size', 'proghivebeta' ),
                    'size'      => 144,
                    'slug'      => 'gigantic',
                ),
            )
        );

        // Editor color palette.
        add_theme_support(
            'editor-color-palette',
            array(
                array(
                    'name'  => esc_html__( 'Primary', 'proghivebeta' ),
                    'slug'  => 'primary',
                    'color' => '#fff',
                ),
                array(
                    'name'  => esc_html__( 'Secondary', 'proghivebeta' ),
                    'slug'  => 'secondary',
                    'color' => '#000',
                ),
                array(
                    'name'  => esc_html__( 'Dark Gray', 'proghivebeta' ),
                    'slug'  => 'dark-gray',
                    'color' => '#111',
                ),
                array(
                    'name'  => esc_html__( 'Light Gray', 'proghivebeta' ),
                    'slug'  => 'light-gray',
                    'color' => '#767676',
                ),
                array(
                    'name'  => esc_html__( 'White', 'proghivebeta' ),
                    'slug'  => 'white',
                    'color' => '#FFF',
                ),
            )
        );

        /*
        * woocommerce support
        */
        add_theme_support( 'woocommerce' );

        /*
        * product gallery features (zoom, swipe, lightbox)
        */
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
            

    }



    	/*
		 * Register menu for proghivebeta theme.
		 */
		// register_nav_menus(
		// 	array(
		// 		'primary-menu' => esc_html__( 'Primary', 'proghivebeta' ),
		// 	)
		// );
}