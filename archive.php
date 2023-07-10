<?php get_header(); ?>

<div class="main-content">
    <?php if (have_posts()) : ?>
        <h2 class="archive-title"><?php the_archive_title(); ?></h2>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class('archive-post'); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'archive-post-image')); ?></a>
                <?php endif; ?>
                <h2 class="archive-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="post-date">Veröffentlicht am <?php the_date('j. F Y'); ?></p>
                <div class="archive-post-preview">
                    <?php the_excerpt(); ?>
                </div>
                <div class="archive-post-categories">
                    Kategorien: <?php the_category(', '); ?>
                </div>
                <div class="post-tags">
                Schlagwörter: <?php the_tags('', ', ', ''); ?>
            </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Es wurden keine Beiträge gefunden.</p>
    <?php endif; ?>
</div>


<?php get_footer(); ?>