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
        <div class="col-sm-6 col-xs-10 col-xs-offset-1 col-sm-offset-0">
            <img id="mailbox-image" class="img-responsive" src="<?= get_template_directory_uri();?>/dist/images/mailbox.svg" alt="<?php echo _("Mailbox");?>"/>
        </div>
        <div class="col-sm-6">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>
    <?php endwhile; ?>
</div>

