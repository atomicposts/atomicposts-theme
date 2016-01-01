<article <?php post_class(); ?>>
    <header class="clearfix">
        <?php echo get_avatar( $post->post_author, 46 ); ?>
        <div class="meta-info">
            <?php get_template_part('templates/entry-meta'); ?>
        </div>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>

    </header>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
    <footer>
        <a href="<?php the_permalink(); ?>"><?php  _e('Read more', 'atomicposts'); ?></a>
    </footer>
</article>
