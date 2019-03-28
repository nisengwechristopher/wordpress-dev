<?php
// ajout images pour les articles
    class creativeThemeSetup {
        public static function ajout_img() {
            add_theme_support( 'post-thumbnails');
        }    
    }
    add_action( 'init', [creativeThemeSetup::class, 'ajout_img']);