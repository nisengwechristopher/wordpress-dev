<?php

namespace App\Features\MetaBoxes;
use App\Features\PostTypes\PersoPostType;

class PersoDetailsMetaBox {
    
    public static $slug = 'perso_details_metabox';

    public static function add_meta_box() {

        $screen = [PersoPostType::$slug];
        add_meta_box(
            self::$slug,                 // Unique ID
            __("Détails sur l'information"),  // Box title
            [self::class, 'render'],   // Content callback, must be of type callable
            $screen                   // Post type
        );
    }
    
        /**
         * Fonction pour rendre le code html dans la metabox
         *
         * @return void
         */
        public static function render()
        {
            ?>
            <h3>Hello World</h3>
            <?php
        }
    }
