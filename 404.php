<?php get_template_part('templates/page', 'header'); ?>

<div class="row">
    <div class="col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10">
        <img class="img-responsive" src="<?= get_template_directory_uri();?>/dist/images/404.svg" alt="Bidones"/>
    </div>
</div>


            <div class="text-center message message-404">
                <?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
            </div>
            <div class="">
                <?php get_search_form(); ?>
            </div>


