<?php 
namespace Proghive\Beta;

/**
 * Enqueue Class
 */
class Enqueue{
    public function __construct()
    {
        add_action( 'wp_enqueue_scripts', [$this, 'proghivebeta_enqueue_scripts'] );
        add_action( 'admin_enqueue_scripts', [$this, 'proghivebeta_enqueue_scripts']);
    }

    public function proghivebeta_enqueue_scripts(){
        wp_enqueue_style( 'phbeta_style', PHBETA_DIR_URI . '/css/phbeta-style.css', array(), '1.0.0', 'all' );
        wp_enqueue_script( 'phbeta_script', PHBETA_DIR_URI . '/js/phbeta-script.js', array(), '1.0.0', true );
    }
}