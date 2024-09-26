<?php


    function gymfitness_menus(){

        register_nav_menus( array(
            'menu-principal' => __('Menu Principal', 'gymfitness'),
        ) );
    }

    add_action('init','gymfitness_menus');

    function gymfitness_scripts_styles(){
        wp_enqueue_style( 'style', get_stylesheet_uri(),array(),'1.0.0' );
    }

    add_action('wp_enqueue_scripts','gymfitness_scripts_styles');


?>