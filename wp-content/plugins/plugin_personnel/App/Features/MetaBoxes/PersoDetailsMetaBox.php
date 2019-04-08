<?php

// namespace App\Features\MetaBoxes;
// use App\Features\PostTypes\PersoPostType;

// class PersoDetailsMetaBox {
    
//     public static $slug = 'perso_details_metabox';

//     //fonction pour ajouter la métabox.
//     public static function add_meta_box() {

    //     $screen = [PersoPostType::$slug];
    //     add_meta_box(
    //         self::$slug,                 // Unique ID
    //         __("Détails sur l'information"),  // Box title
    //         [self::class, 'render'],   // Content callback, must be of type callable
    //         $screen                   // Post type
    //     );
    // }



//     //fonction pour rendre le code html de la metabox se trouvant dans le fichier perso-detail.html.php grace à la fonction view dans le helper. 
//     public static function render()
//     {
//         //récupération de toutes les metadata du post
//         $data = get_post_meta(get_the_ID());

//         // $time = $data['perso_time_information'][0];
//         $time = extract_data_attr('perso_time_information', $data); // "new" way to write the line above.
//         $nbr_personne = extract_data_attr('perso_nbr_personne',$data);

//         // utilisation de la function compact() .. elle crée un tableau qui associe un nom à une valeur.
//         view('metaboxes/perso-detail', compact('time','nbr_personne'));

//     }




//     //fonction pour sauvgrader la valeur qui sera enregistré dans le'input du formulaire.
//     public static function save ($post_id) {
//         if (count($_POST) != 0) {

//             $name = $_POST[perso_time_information];
//             $type_information = sanitize_post_field($name);
//             update_post_meta($post_id, 'perso_time_information', $type_information);


//             $nbr_personne = sanitize_text_field($_POST['perso_nbr_personne']);
//             update_post_meta($post_id,'perso_nbr_personne', $nbr_personne);
//         }
//     }
// }


/******************************************************
 * *********************************************************************************** */


namespace App\Features\MetaBoxes;
use App\Features\PostTypes\PersoPostType;

class PersoDetailsMetaBox {
    public static $slug = 'perso_details_metabox';
    //fonction pour ajouter la métabox.
    public static function add_meta_box() {
        add_meta_box(App/Features/MetaBoxes/PersoDetailsMetaBox, __('Création d\'une metabox'), [self::class,'render']);
    }

    public static function render () {
    ?>
        <form action="/action_page.php"> Type d'information:
            <br>
                <input type="text" name="my_info" value="<?= the_ID()?>">
            <br>
                Nombre d'information:
            <br>
                <input type="number" name="my_number" value="<?= the_ID()?>">
            <br><br>
            <input type="submit" value="Submit">
        </form>
    <?php
    }


}