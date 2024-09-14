<?php

use Proghive\Beta\Functions;

if( ! defined( 'ABSPATH' )){
    exit;
}

require_once( __DIR__ . '/vendor/autoload.php');

/**
 * Main Class
 */
final class ProghiveBeta{
    /**
     * Theme Version
     */
    public const version = '1.0.0';

    private function __construct()
    {
        $this->define_constructor();
        add_action( 'after_setup_theme', [$this, 'proghivebeta_setup']);
    }

    /**
     * Initialize Singleton Instance
     */

    public static function init(){
        static $instance = false;
        if( ! $instance ){
            $instance = new self();
        }
        return $instance;
    }

    /**
     * Defince theme constructor
     */
    public function define_constructor(){
        define( 'PROGHIVE_BETA_VERSION', self::version );
        /**
         * Theme Folders
         */
        define( 'PROGHIVE_BETA_DIR', get_template_directory() );
        define( 'PROGHIVE_ASSETS', PROGHIVE_BETA_DIR . '/assets' );
        define( 'PROGHIVE_ASSETS', PROGHIVE_BETA_DIR . '/assets' );

        /**
         * Theme Folders Directory Uri
         */
        define( 'PROGHIVE_BETA_URI', get_template_directory_uri() );
        define( 'PROGHIVE_ASSETS', PROGHIVE_BETA_URI . '/assets' );
    }



    /**
     * Initialize After theme setup
     */

    public function proghivebeta_setup(){
            new \Proghive\Beta\Functions();        
        }

}

/**
 * Theme Function 
 */
function proghivebeta(){
    return ProghiveBeta::init();
}

/**
 * Kickoff Function
 */
proghivebeta();

