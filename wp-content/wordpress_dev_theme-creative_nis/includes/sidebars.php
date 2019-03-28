<?php
    class creativeWidgetRegister {
        public static function register() {

            register_sidebar([
                'name'          => __('Widgets in Footer : left column'),
                'id'            => 'sidebar_footer_left',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>'
            ]);

            register_sidebar([
                'name'          => __('Widgets in Footer : right column'),
                'id'            => 'sidebar_footer_right',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>'
            ]);

        }
    }
    add_action('widgets_init', [creativeWidgetRegister::class, 'register']);