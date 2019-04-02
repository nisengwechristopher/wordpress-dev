<?php

class PersoPostTypes {
    public static function register() {
        register_post_type('perso',
        [
            'public' => true,
            'has_archive' => 'true',
            'labels' => [
                'name' => 'Informations',
                'singular_name' => 'Information',
            ],
            'rewrite' => [
                'slug' => 'info',
            ]
        ]
        );
    }

}