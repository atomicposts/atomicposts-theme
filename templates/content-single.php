<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
        <?php echo get_avatar( $post->post_author, 46 ); ?>
        <?php get_template_part('templates/entry-meta'); ?>
        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer>
       <div class="tagcloud">
           <?php the_tags('',''); ?>
       </div>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
