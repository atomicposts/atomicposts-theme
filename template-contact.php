<?php
/**
 * Template Name: Plantilla de contacto
 */
?>

<div class="row">
    <?php while (have_posts()) : the_post(); ?>
        <div class="col-sm-12">
            <?php get_template_part('templates/page', 'header'); ?>
        </div>
        <div class="col-sm-6">
            <img class="img-responsive" src="<?= get_template_directory_uri();?>/assets/images/mailbox.svg" alt="<?php echo _("Mailbox");?>"/>
        </div>
        <div class="col-sm-6">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>
    <?php endwhile; ?>
</div>

