<header class="banner navbar navbar-default navbar-fixed-top cbp-af-header">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                <img class="img-responsive" src="<?= get_template_directory_uri();?>/dist/images/atom.svg" alt="<?= get_bloginfo("name"); ?>"/>
                <span>
                    <span>Atomic</span>
                    <span class="text-yellow">Posts</span>
                </span>
            </a>
        </div>

        <nav id="bs-navbar-collapse" class="nav-primary collapse navbar-collapse">
            <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
            endif;
            ?>
        </nav>

        <nav class="language-switcher">
            <ul>
                <?php pll_the_languages(array('display_names_as' => 'slug')); ?>
            </ul>
        </nav>

    </div>
</header>
