<?php

namespace App\Features\PostTypes;

class PersoPostType {
    public static $slug = 'perso'; // on remplace le slug qui était écrit en dur 'recipe' par la variable, on fait cela car on va fair appel à notre function register_post_type par son indentifiant à plusieurs endroits, si jamais on décide de changer l'identifiant qui est 'recipe' par 'carotte' bah il faudra le changer a de nombreux endroit si on laisse cela en dur c'est pour cela qu'on à choisis de créer une variable,on change la valeur de la variable est tous les endroits ou son identifiant est utilisé sera mis à jours.
    public static function register() {
        register_post_type( self::$slug,
        [
            'public' => true,
            'has_archive' => 'true',
            'menu_icon' => 'dashicons-smiley',
            'taxonomies' => ['category','post_tag'],
            'rewrite' => ['slug' => 'info'],
            'labels' => [
                'name' => 'Informations',
                'singular_name' => 'Information',
                'singular_name' => __('Information'),
                'add_new' => __('Ajouter'),
                'add_new_item' => __('Ajouter une information'),
                'edit_item' => __('Modifier l\'information'),
                'new_item' => __('Nouvelle information'),
                'view_item' => __('Voir l\'information'),
                'view_items' => __('Voir les informations'),
                'search_items' => __('Rechercher des informations'),
                'not_found' => __('Pas d\'informations trouvées.'),
                'not_found_in_trash' =>('Pas d\'informations dans la corbeille.'),
                'all_items' => __('Toutes les informations'),
                'archives' => __('Informations archivées'),        
                'filter_items_list' => __('Filtre d\'information'),
                'items_list_navigation' => __('Navigation d\'information'),
                'items_list' =>__('Liste d\'information'),
                'item_published' => __('Information publiée.'),
                'item_published_privately' =>__('Information publiée en privé.'),
                'item_reverted_to_draft' =>__('L\'information est retournée au brouillon.'),
                'item_scheduled' => __('Information planifiée.'),
                'item_updated' =>__('Information mise à jours.'),
            ],
        ]
        );
    }

}