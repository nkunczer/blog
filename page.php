<?php get_header(); ?>

<div class="main-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class('post'); ?>>
            <h2 class="post-title"><?php the_title(); ?></h2>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>



<?php get_footer(); ?>