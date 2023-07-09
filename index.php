<?php get_header(); ?>

<div class="main-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class('post'); ?>>
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'post-thumbnail')); ?></a>
            <?php endif; ?>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="post-date">Veröffentlicht am <?php the_date('j. F Y'); ?></p>
            <div class="post-categories">
                Kategorien: <?php the_category(', '); ?>
            </div>
            <div class="post-tags">
                Schlagwörter: <?php the_tags('', ', ', ''); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>



<?php get_footer(); ?>
