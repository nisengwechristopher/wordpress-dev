<?php

use App\Features\PostTypes\PersoPostType as PersoPostType;
use App\Features\Taxonomies\PersoTaxonomy as PersoTaxonomy;
use App\Features\MetaBoxes\PersoDetailsMetaBox as PersoDetailsMetabox;


add_action('init',[PersoPostType::class,'register']);
add_action('init',[PersoTaxonomy::class, 'register']);
add_action('add_meta_boxes_perso', [PersoDetailsMetaBox::class, 'add_meta_box']);
add_action('save_post_' . PersoPostType::$slug, [PersoDetailsMetabox::class, 'save']);