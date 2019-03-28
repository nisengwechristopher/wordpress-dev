<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="page-banner">
            <h1 style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                <?php the_title(); ?>
            </h1>
            <div class="containersingle-post-container">
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<div class="the-footer">
    <?php get_footer(); ?>
</div>