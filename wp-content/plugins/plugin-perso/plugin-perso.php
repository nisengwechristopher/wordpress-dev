<?php
/**
 * Plugin Name: First plugin - Creative Theme
 * Author: Nisengwe christopher
 * Description: The following plugin is made by following the instructions from WP site "https://developer.wordpress.org/plugins/intro/" and Yassine Kharchaf's commits "https://github.com/yassinekharchaf/wpdevplugincoach/tree/hookfile". Plugin pour créer des recettes
 *
 * Version: 0.1.0
 * !! https://developer.wordpress.org/plugins/plugin-basics/header-requirements/
 * 
 * look up : https://code.tutsplus.com/tutorials/using-namespaces-and-autoloading-in-wordpress-plugins-part-1--cms-27157
 */


 /**
  * TEST PERSONNEL : function pour ajouter un short code avec le nom de l'auteur du plugin
  *
  */
function ajout_du_short_code() {
    $prenom = "Christopher";
    $nom = "Nisengwe";
    $auteur = "Plugin crée par " . $prenom ." ". $nom;
    return $auteur;
}
add_shortcode( 'code', 'ajout_du_short_code' );

/*****************************
 * ************************************************* */



use App\Features\PostTypes\PersoPostType;

// /**
//  * Fonction pour ajouter un type de contenu recette.
// */
// function register_perso_post_type() {
//     register_post_type('perso', [
//         'public' => true,// affichage public dans le menu 
//         'has_archive' => true, // archivage de ce type de contenu
//         'labels' => [ // la key labels contient un tableau avec des labels pour les différents endroit où il y a le le type de contenu recette
//             'name'          => __('Personnel'),
//             'singular_name' => __('Personnel')]
//         ]
//     );
// }
// add_action('init', 'register_perso_post_type');


/** permet de utiliser la fonction « autoload » afin de charger les fichiers automatiquement */
require_once('autoload.php');
add_action('init', PersoPostType::class, 'perso');
