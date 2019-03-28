<div class="portfolio-link row">
    <?php
        // Nous allons faire en sorte d'aller chercher tout les articles pour les affichers sur la page
        // Pour cela nous allons utiliser la class WP_Query
        $args = [
            'post_type' => 'post',
            'category_name' => 'portfolio'
        ];
        $query = new WP_Query($args);
        while ($query->have_posts()): $query->the_post(); ?>
            <div>
                <h3 class="creativeText posts">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <img src="<?php the_post_thumbnail_url(); ?>;"></img>
            </div>
        <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>
