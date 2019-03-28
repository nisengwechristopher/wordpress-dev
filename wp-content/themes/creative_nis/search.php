<?php
    get_header();
?>


<div class="container single-post-container">
    <h3 style="margin-top:50px">Résultats pour : 
        <span>
            "<?php echo get_search_query(); ?>"
        </span>
    </h3>
</div>

<ul class=" container list-group mb-5">
    <?php while (have_posts()) : the_post(); ?>
    <li class="list-group-item li_hover">
        <a class="result_recherche" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </li>
    <?php endwhile; ?>
</ul>

<?php
    get_footer();
?>
