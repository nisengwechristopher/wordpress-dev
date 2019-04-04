<?php
 // On use ici un namespace (celui qu'on créer ligne 2 dans autoload.php), l'avantage de cette écriture là c'est qu'on créer un 'ALIAS' avec la commande 'as' ce qui fait qu'a la ligne 24 on peut simplement écrire RecipePostType::class, pour l'exemple j'ai précisé que l'alias était RecipePostType mais a vrai dir c'est nécéssaire que si on modifie le nom de la class si on veut garder un Alias qui porte le meme nom que la class il ne faut pas le préciser si on écrivait :
 use App\Features\PostTypes\PersoPostType as PersoPostType;
 use App\Features\Taxonomies\PersoTaxonomy as PersoTaxonomy;
 use App\Features\MetaBoxes\PersoDetailsMetaBox as PersoDetailsMetabox;


 /***
 * Plugin Name: Mon plugin personnel
 * Author: Nisengwe Christopher
 * Description: Personnal plugin that will add  various types of informations on the pages ..https://github.com/dionation/wp_plugin.
 *
 * @ .. not sure of use.
 * Version: 0.1.0
 */




require_once('autoload.php'); // == require_once(App\Features\PostTypes\PersoPostType.php);
require_once('env.php');
require_once('helpers.php');


add_action('init',[PersoPostType::class,'register']);
add_action('init',[PersoTaxonomy::class, 'register']);
add_action('add_meta_boxes_perso', [PersoDetailsMetaBox::class, 'add_meta_box']);
add_action('save_post_', PersoPostType::$slug, [PersoDetailsMetabox::class, 'save']);