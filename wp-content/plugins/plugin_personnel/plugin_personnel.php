<?php
/***
 * Plugin Name: Mon plugin personnel
 * Author: Nisengwe Christopher
 * Description: Personnal plugin that will add  various types of informations on the pages ..https://github.com/dionation/wp_plugin.
 * 
 * @ .. not sure of use.
 * Version: 0.1.0
 */

use App\Features\PostTypes\PersoPostType as PersoPostType;

require_once(App\Features\PostTypes\PersoPostType.php);
add_action('init',[PersoPostType::class,'register']);
