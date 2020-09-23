<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

<?php
function premierThemes_register_assets() {
    
   // Déclarer jQuery
   wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
   wp_enqueue_script( // On déclare une version plus moderne
       'jquery', 
       'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
       false, 
       '3.3.1', 
       true 
   );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'premierTheme', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'premierTheme',
        get_stylesheet_uri(),
        array(), 
        '1.0'
    );
  	
}
add_action( 'wp_enqueue_scripts', 'premierThemes_register_assets' );