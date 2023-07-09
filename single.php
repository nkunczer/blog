<?php get_header(); ?>

<div class="main-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class('post'); ?>>
           
            <h2 class="post-title"><?php the_title(); ?></h2>
            <p class="post-date">Veröffentlicht am <?php the_date('j. F Y'); ?></p>
            <div class="post-content">
                <?php the_content(); ?>
             
            </div>

            <div class="post-categories">
                Kategorien: <?php the_category(', '); ?>
            </div>
            <div class="post-tags">
                Schlagwörter: <?php the_tags('', ', ', ''); ?>

        </article>
    <?php endwhile; endif; ?>
</div>


<?php get_footer(); ?>