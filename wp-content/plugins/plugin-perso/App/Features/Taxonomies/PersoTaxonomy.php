<?php

namespace App\Features\Taxonomies;

use App\Features\Taxonomies\PersoTaxonomy;

class PersoTaxonomy {

    public static $slug = 'perso_taxonomy';

    public static function register() {

        $labels = [// les labels pour la taxonomie
            'name' => __('Type de informations'),
            'singular_name' => __('Type de information'),
            'search_items' => __('Search Type de informations'),
            'all_items' => __('All Type de informations'),
            'parent_item' => __('Parent Type de information'),
            'parent_item_colon' => __('Parent Type de information:'),
            'edit_item' => __('Edit Type de information'),
            'update_item' => __('Update Type de information'),
            'add_new_item' => __('Add New Type de information'),
            'new_item_name' => __('New Type de information Name'),
            'menu_name' => __('Type de information'),
          ];
        $args = [
            'hierarchical' => true, // make it hierarchical (like categories)
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'perso'],
          ];
          register_taxonomy(self::$slug,  [PersoPostType::$slug], $args);
    }
}