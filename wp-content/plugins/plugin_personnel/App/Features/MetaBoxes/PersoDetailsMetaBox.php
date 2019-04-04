<?php

namespace App\Features\MetaBoxes;
use App\Features\PostTypes\PersoPostType;

class PersoDetailsMetaBox {
    
    public static $slug = 'perso_details_metabox';

    //fonction pour ajouter la métabox.
    public static function add_meta_box() {

        $screen = [PersoPostType::$slug];
        add_meta_box(
            self::$slug,                 // Unique ID
            __("Détails sur l'information"),  // Box title
            [self::class, 'render'],   // Content callback, must be of type callable
            $screen                   // Post type
        );
    }
    
    //fonction pour rendre le code html de la metabox se trouvant dans le fichier perso-detail.html.php grace à la fonction view dans le helper. 
    public static function render()
    {
        view('metaboxes/perso-detail');
    }


    //fonction pour sauvgrader la valeur qui sera enregistré dans le'input du formulaire.
    public static function save ($post_id) {
        if (count($_POST) != 0) {
            $type_information= sanitize_post_field($_POST[rat_time_information]);
            update_post_meta( $post_id,'rat_time_information', $type_information);
        }
    }
}
