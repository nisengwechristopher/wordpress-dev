<?php

namespace App\Features\PostType;

class RecipePostType {
    public static function register () {
        register_post_type('recipe', [
            'public' => true,// affichage public dans le menu 
            'has_archive' => true, // archivage de ce type de contenu
            'labels' => [ // la key labels contient un tableau avec des labels pour les différents endroit où il y a le le type de contenu recette
                'name'          => __('Recette'),
                'singular_name' => __('Recette')]
            ]
        );
    }
}

