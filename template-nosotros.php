<?php
/**
 * Template Name: Plantilla nosotros
 */
?>

<div class="row">
    <?php while (have_posts()) : the_post(); ?>
        <div class="col-sm-12">
            <?php get_template_part('templates/page', 'header'); ?>
        </div>
        <div class="col-sm-4">
            <img class="img-responsive" src="<?= get_template_directory_uri();?>/assets/images/machine.svg" alt="<?php echo _("Games machine");?>"/>
        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-4 frame">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
                        <rect width="100%" height="100%" fill="#fff"/>
                        <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="<?= get_template_directory_uri();?>/assets/images/liquidator1.svg" width="100%" height="100%" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
                        <defs>
                            <clipPath id="mask">
                                <circle id="mask-circle" cx="50%" cy="50%" r="8%" style="fill: #ffffff"/>
                            </clipPath>
                        </defs>
                        <g clip-path="url(#mask)">
                            <rect width="100%" height="100%" fill="#fff"/>
                            <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="<?= get_template_directory_uri();?>/assets/images/liquidator1-pixel.svg" width="100%" height="100%" />
                        </g>
                        <circle id="circle-shadow" cx="50%" cy="50%" r="8%" style="stroke: #ccc; fill: transparent; stroke-width: 5;" />
                    </svg>
                </div>
                <div class="col-sm-4 frame">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
                        <rect width="100%" height="100%" fill="#fff"/>
                        <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="<?= get_template_directory_uri();?>/assets/images/liquidator2.svg" width="100%" height="100%" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
                        <defs>
                            <clipPath id="mask">
                                <circle id="mask-circle" cx="50%" cy="50%" r="8%" style="fill: #ffffff"/>
                            </clipPath>
                        </defs>
                        <g clip-path="url(#mask)">
                            <rect width="100%" height="100%" fill="#fff"/>
                            <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="<?= get_template_directory_uri();?>/assets/images/liquidator2-pixel.svg" width="100%" height="100%" />
                        </g>
                        <circle id="circle-shadow" cx="50%" cy="50%" r="8%" style="stroke: #ccc; fill: transparent; stroke-width: 5;" />
                    </svg>
                </div>
                <div class="col-sm-4 frame">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
                        <rect width="100%" height="100%" fill="#fff"/>
                        <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="<?= get_template_directory_uri();?>/assets/images/liquidator3.svg" width="100%" height="100%" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
                        <defs>
                            <clipPath id="mask">
                                <circle id="mask-circle" cx="50%" cy="50%" r="8%" style="fill: #ffffff"/>
                            </clipPath>
                        </defs>
                        <g clip-path="url(#mask)">
                            <rect width="100%" height="100%" fill="#fff"/>
                            <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="<?= get_template_directory_uri();?>/assets/images/liquidator3-pixel.svg" width="100%" height="100%" />
                        </g>
                        <circle id="circle-shadow" cx="50%" cy="50%" r="8%" style="stroke: #ccc; fill: transparent; stroke-width: 5;" />
                    </svg>
                </div>
            </div>
            <?php get_template_part('templates/content', 'page'); ?>
        </div>
    <?php endwhile; ?>
</div>

<div class="row">

</div>

