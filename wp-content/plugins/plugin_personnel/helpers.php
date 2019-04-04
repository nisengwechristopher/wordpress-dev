<?php

/**
 * cette page contient une fonction qui permet de facilement rendre les views. (le contenu qui s'affiche sur les pages qu'on a séparé des functions qui permettent de les afficher).
 */

 function view($path) {
     include(PERSO_VIEW_DIR . $path . '.html.php');
 }