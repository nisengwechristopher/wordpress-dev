<?php

    // creation des menus:

    class creativeMenu {

        /** menu pour la navigation */
        public static function creation_menu() {
            register_nav_menu( 'menu-principal', 'Le menu principal dans le header.' );
        }
        
        public static function ajout_classes_li($classes, $item, $args) {
            if($args->theme_location == 'menu-principal') {
                $classes[] = 'nav-item';
            }
            return $classes;
        }

        public static function ajout_classes_a($atts, $item, $args) {
            if($args->theme_location == 'menu-principal') {
                $atts['class'] = 'nav-link js-scroll-trigger';
            }
            return $atts;
        }

        public static function ajout_menu_footer($atts, $item, $args) {
            if ($args->theme_location == 'menu-footer') {
                $atts['class'] = 'btn btn-outline-light btn-social text-center rounded-circle';
            }
            return $atts;
        }
        
    }
    add_action ('after_setup_theme', [creativeMenu::class, 'creation_menu']);
    add_filter('nav_menu_css_class', [creativeMenu::class, 'ajout_classes_li'], 1, 3);
    add_filter('nav_menu_link_attributes', [creativeMenu::class, 'ajout_classes_a'], 10, 3);
