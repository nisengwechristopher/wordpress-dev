<?php
    class creavtiveCustom {

        //function permettant de créer un pannel de personnalisation:
        public static function panel_personnalisation($wp_customize) {
        
            /**
                 * **** panel masthead*/
                $wp_customize->add_panel('panel_pernsonalisation_masthead',[
                    'title' => __('Personnalisation Section Masthead'),
                    'description' =>  __('Modification du titre de la section masthead')
                ]);
            /**
                 * **** panel about*/
                $wp_customize->add_panel('panel_personnalisation_about', [
                    'title' => __('Personnalisation Section About'),
                    'description' =>  __('Modification du texte de la section about')
                ]);
        
                


            /**
                 * **** section masthead*/
                $wp_customize->add_section('sect_masthead',[
                    'panel' => 'panel_pernsonalisation_masthead',
                    'title' => __('Personnalisation du contenu de la section masterhead'),
                    'description' => __('Modification cu contenu de la section msthead')
                ]);
            /**
                 * **** sections about */
                $wp_customize->add_section('sect_about', [
                    'panel' => 'panel_personnalisation_about',
                    'title' => __('Personnalisation du contenu de la section about'),
                    'description' =>  __('Modification du contenu de la section about')
                ]);
        

        
     
            /**
                 * **** settings about (id à donner au get_theme mod())*/
                $wp_customize->add_setting('mod_texte_titre', [
                    'type' => 'theme_mod',
                    'transport' => 'refresh' 
                ]);
                $wp_customize->add_setting('mod_description', [
                    'type' => 'theme_mod',
                    'transport' => 'refresh'
                ]);
                $wp_customize->add_setting('mod_button', [
                    'type' => 'theme_mod',
                    'transport' => 'refresh'
                ]);
                $wp_customize->add_setting('mod_background', [
                    'transport' => 'refresh',
                    'default' => '#f4623a'
                ]);
                
        
        
            /**
                 * **** control masthead */
                $wp_customize->add_control('personnalisation_titre_masthead',[
                    'section' => 'sect_masthead',
                    'settings' => 'mod_texte_titre',
                    'label' => __('Titre de la section masthead'),
                    'type' => 'textarea'
                ]);
                $wp_customize->add_control('personnalisation_texte_masthead',[
                    'section' => 'sect_masthead',
                    'settings' => 'mod_description',
                    'label' => __('Texte de la section masthead'),
                    'type' => 'textarea'
                ]);
                $wp_customize->add_control('personnalisation_button_masthead', [
                    'section' => 'sect_masthead',
                    'settings' => 'mod_button',
                    'label' => __('Texte bouton section about'),
                    'type' => 'textarea'
                ]);
        

                
            /**
                 * **** control about */
                $wp_customize->add_control('personnalisation_titre_about', [
                    'section' => 'sect_about',
                    'settings' => 'mod_texte_titre',
                    'label' => __('Titre section about'),
                    'type' => 'textarea'
                ]);
                $wp_customize->add_control('personnalisation_description_about', [
                    'section' => 'sect_about',
                    'settings' => 'mod_description',
                    'label' => __('Description section about'),
                    'type' => 'textarea'
                ]);
                $wp_customize->add_control('personnalisation_button_about', [
                    'section' => 'sect_about',
                    'settings' => 'mod_button',
                    'label' => __('Texte bouton section about'),
                    'type' => 'textarea'
                ]);
                $wp_customize->add_control( 
                    new WP_Customize_Color_Control( 
                    $wp_customize, 
                    'link_color', [
                        'label'      => __( 'Header Color', 'mytheme' ),
                        'section'    => 'sect_about',
                        'settings'   => 'mod_background',
                    ]) 
                );
            }
    }
    add_action( 'customize_register', [creavtiveCustom::class, 'panel_personnalisation']);
