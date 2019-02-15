<?php
/**************************************
 *      CARREGAR JS E CSS do congresso
 **************************************/
function load_my_scripts_congresso(){
    wp_enqueue_script('functions', get_bloginfo('stylesheet_directory', 'raw') . '/js/functions.js', array('jquery'));
    // include_script_folder('js/bootstrap/');


    //Colocando arquivos de estilo no cabe�alho

    //Local
    // wp_enqueue_style('fonte-icones', get_bloginfo('stylesheet_directory', 'raw') .'/fonts/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('fonte', 'https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext');
    wp_enqueue_style('congressos_style', get_bloginfo('stylesheet_directory', 'raw') .'/style.css');

}
add_action('wp_enqueue_scripts', 'load_my_scripts_congresso');
