<?php

namespace App\Features\Taxonomies;

use App\Features\PostTypes\PersoPostType;

class PersoTaxonomy {
    public static $slug = 'perso_taxonomy';

    public static function register (){
        $labels = [
            'name' => __('Type d\'informations'),
            'singular_name' => __('Type d\'information'),
        ];
        $args = [
            'labels' => $labels,
            // 'show_ui' => true,
            // 'show_in_menu' => true,
            'show_admin_column' => true, // show admin column fait référence la column de prévisualisation là ou il y a Toutes les info°, il y a la column titre,catégorie,etiquette etc... si c'est true il y aura également Type d'informaition.

        ];

        register_taxonomy(self::$slug, [PersoPostType::$slug],$args);
    }
}