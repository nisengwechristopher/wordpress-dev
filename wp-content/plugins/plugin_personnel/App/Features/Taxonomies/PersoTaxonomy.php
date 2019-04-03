<?php

namespace App\Features\Taxonomies;

use App\Features\PostTypes\PersoPostType;

class PersoTaxonomy {
    public static $slug = 'perso_taxonomy';

    public static function register (){
        register_taxonomy(self::$slug, [PersoPostType::$slug], [
            // repris des labels de la function PostType afin de visualier comment les labels s'appliquent dans la création de taxonomy.
            'labels' => [
                'name' => 'Taxonomy Perso',
                'add_new' => __('Ajouter une information'),
                'add_new_item' => __('Ajouter une nouvelle information'),
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
        ]);
    }
}