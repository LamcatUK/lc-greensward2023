<section class="clients py-5">
    <div class="container-xl">
        <h2>Some of our esteemed clients</h2>
        <div class="clients__slider">
            <?php
        while (have_rows('clients', 'options')) {
            the_row();
            ?>
            <a href="<?=get_sub_field('site')?>"
                target="_blank" rel="nofollow noopener" class="clients__card">
                <div class="clients__client">
                    <img src="<?=wp_get_attachment_image_url(get_sub_field('logo'), 'large')?>"
                        alt="<?=get_sub_field('name')?>">
                    <div class="clients__name">
                        <?=get_sub_field('name')?>
                    </div>
                </div>
            </a>
            <?php
        }
            ?>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script type="text/javascript">
    (function($) {
        $('.clients__slider').slick({
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
            responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true
                    }
                }
            ]
        });
    })(jQuery);
</script>
<?php
}, 9999);
            ?>