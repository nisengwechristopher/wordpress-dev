<?php
// Je défini une variable global du nom de PERSO_VIEW_DIR qui aura comme valeur, le chemin du fichier dans le quel je suis avec qui je concatène le dossier resources/views/
// même si les chemins ne sont pas pertubés par les '/' avec la concantenantion.. j'ai preféré les enlever.
define('PERSO_VIEW_DIR', plugin_dir_path(__FILE__) . 'resources/views/');