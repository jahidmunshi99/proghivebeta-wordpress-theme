<?php 
namespace Proghive\Beta;

/**
 * Enqueue Class
 */
class Enqueue{
    public function __construct()
    {
        add_action( 'wp_enqueue_scripts', [ $this, 'proghivebeta_enqueue_scripts' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'proghivebeta_enqueue_scripts' ]);
    }

    public function get_phbeta_style(){
        return[
            'phbeta_style' => [
            'src'     => PHBETA_DIR_URI . '/css/phbeta-style.css',
            'deps'    => false,
            'version' => PROGHIVE_BETA_VERSION,
        ]];
    }

    public function get_phbeta_script(){
        return[
            'phbeta_script' => [
            'src'     => PHBETA_DIR_URI . '/js/phbeta-script.js',
            'deps'    => ['jquery'],
            'version' => PROGHIVE_BETA_VERSION,
        ]];
    }

    public function proghivebeta_enqueue_scripts(){
        /**
         * Theme Style Register
         */
        $phbeta_style = $this->get_phbeta_style();
        foreach( $phbeta_style as $handle => $style ){
            $deps = isset($deps['deps']) ? $deps['deps'] : '';            
            wp_register_style( $handle, $style['src'], $deps, $style['version'], 'all' );
        }
        
        /**
         * Javascript Register
         */
        $phbeta_scripts = $this->get_phbeta_script();
        foreach( $phbeta_scripts as $handle => $ph_script ){
            wp_register_script( $handle, $ph_script['src'], $ph_script['deps'], $ph_script['version'], false );

        }  
    
        
        wp_enqueue_style( 'phbeta_style' );
        wp_enqueue_script( 'phbeta_script' );
    }
}