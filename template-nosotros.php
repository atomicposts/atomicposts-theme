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

        <div class="col-sm-9">
            <div class="row liquidator">
                <div class="col-sm-4 frame">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
                        <rect width="100%" height="100%" fill="#fff"/>
                        <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="<?= get_template_directory_uri();?>/dist/images/liquidator1.svg" width="100%" height="100%" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
                        <defs>
                            <clipPath id="mask1">
                                <circle class="mask-circle" cx="50%" cy="50%" r="20%" style="fill: #ffffff"/>
                            </clipPath>
                        </defs>
                        <g clip-path="url(#mask1)">
                            <rect width="100%" height="100%" fill="#fff"/>
                            <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="<?= get_template_directory_uri();?>/dist/images/liquidator1-pixel.svg" width="100%" height="100%" />
                        </g>
                        <circle class="circle-shadow" cx="50%" cy="50%" r="20%" style="stroke: #ccc; fill: transparent; stroke-width: 5;" />
                    </svg>
                </div>
                <div class="col-sm-8 description">
                    <h3>Liquidadora Alfa</h3>
                    <p>
                        <?php echo get_post_meta($post->ID, 'liquidador1', true); ?>
                    </p>
                </div>
            </div>

            <div class="row liquidator">
                <div class="col-sm-4 frame">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
                        <rect width="100%" height="100%" fill="#fff"/>
                        <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="<?= get_template_directory_uri();?>/dist/images/liquidator2.svg" width="100%" height="100%" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
                        <defs>
                            <clipPath id="mask2">
                                <circle class="mask-circle" cx="50%" cy="50%" r="20%" style="fill: #ffffff"/>
                            </clipPath>
                        </defs>
                        <g clip-path="url(#mask2)">
                            <rect width="100%" height="100%" fill="#fff"/>
                            <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="<?= get_template_directory_uri();?>/dist/images/liquidator2-pixel.svg" width="100%" height="100%" />
                        </g>
                        <circle class="circle-shadow" cx="50%" cy="50%" r="20%" style="stroke: #ccc; fill: transparent; stroke-width: 5;" />
                    </svg>
                </div>

                <div class="col-sm-8 description">
                    <h3>Liquidador Beta</h3>
                    <p>
                        <?php echo get_post_meta($post->ID, 'liquidador2', true); ?>
                    </p>
                </div>
            </div>


            <div class="row liquidator">
                <div class="col-sm-4 frame">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
                        <rect width="100%" height="100%" fill="#fff"/>
                        <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="<?= get_template_directory_uri();?>/dist/images/liquidator3.svg" width="100%" height="100%" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
                        <defs>
                            <clipPath id="mask3">
                                <circle class="mask-circle" cx="50%" cy="50%" r="20%" style="fill: #ffffff"/>
                            </clipPath>
                        </defs>
                        <g clip-path="url(#mask3)">
                            <rect width="100%" height="100%" fill="#fff"/>
                            <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="<?= get_template_directory_uri();?>/dist/images/liquidator3-pixel.svg" width="100%" height="100%" />
                        </g>
                        <circle class="circle-shadow" cx="50%" cy="50%" r="20%" style="stroke: #ccc; fill: transparent; stroke-width: 5;" />
                    </svg>
                </div>
                <div class="col-sm-8 description">
                    <h3>Liquidador Gamma</h3>
                    <p>
                        <?php echo get_post_meta($post->ID, 'liquidador3', true); ?>
                    </p>
                </div>
            </div>
            <?php get_template_part('templates/content', 'page'); ?>
        </div>
        <div id="game-machine" class="col-sm-3">
            <img class="img-responsive" src="<?= get_template_directory_uri();?>/dist/images/machine.svg" alt="<?php echo _("Games machine");?>"/>
        </div>
    <?php endwhile; ?>
</div>

<script type="text/javascript">
(function($) {

    function cursorPoint(svgPoint, e, svg) {
        svgPoint.x = e.clientX;
        svgPoint.y = e.clientY;
        return svgPoint.matrixTransform(svg.getScreenCTM().inverse());
    }

    function update(maskedElement,circleFeedback, svgCoords) {
        maskedElement.setAttribute('cx', svgCoords.x);
        maskedElement.setAttribute('cy', svgCoords.y);
        circleFeedback.setAttribute('cx', svgCoords.x);
        circleFeedback.setAttribute('cy', svgCoords.y);
    }

    $(".frame").mousemove(function(e){
        var svgElement = $(this).find('svg').get(0);
        var maskedElement = $(this).find('.mask-circle').get(0);
        var circleFeedback = $(this).find('.circle-shadow').get(0);
        var svgPoint = svgElement.createSVGPoint();
        update(maskedElement, circleFeedback, cursorPoint(svgPoint, e, svgElement));
    });

    $(".frame").bind('touchmove', function(e){
        e.preventDefault();
        var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
        if (touch) {
            var svgElement = $(this).find('svg').get(0);
            var maskedElement = $(this).find('.mask-circle').get(0);
            var circleFeedback = $(this).find('.circle-shadow').get(0);
            var svgPoint = svgElement.createSVGPoint();
            update(maskedElement, circleFeedback, cursorPoint(svgPoint, touch, svgElement));
        }
    });

})(jQuery);


</script>

