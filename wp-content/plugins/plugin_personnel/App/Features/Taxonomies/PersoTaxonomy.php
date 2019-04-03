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
        $args = ['labels' => $labels,];

        register_taxonomy(self::$slug, [PersoPostType::$slug],$args);
    }
}