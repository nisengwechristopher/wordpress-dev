<?php

    /* ajout des scripts et des styles: */
    class enqueueScripts {
        
        public static function styles_scripts() {

            wp_enqueue_style('fontawesome', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css');
            wp_enqueue_style('merryweather-sans', 'https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700');
            wp_enqueue_style('merryweather-italic', 'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic');
            wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/magnific-popup.css');
            wp_enqueue_style('creative', get_template_directory_uri() . '/css/creative.min.css');
            wp_enqueue_style('personal-style', get_template_directory_uri() . '/css/personal-style.css');
            /************** */
            wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js');
            wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js');
            wp_enqueue_script('jquery-asing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js');
            wp_enqueue_script ('magnific', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js');
            wp_enqueue_script('js', get_template_directory_uri() . '/js/creative.min.js',[], null, true);
        }
    }
    // Nous créeons une instance de la class EnqueueScript afin de la passer en paramètre dans notre add_action
    //$enqueue_script = new EnqueueScript();

    add_action ('wp_enqueue_scripts',[enqueueScripts::class,'styles_scripts']);

?>