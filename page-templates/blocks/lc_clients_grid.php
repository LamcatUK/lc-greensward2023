<section class="clients py-5">
    <div class="container-xl">
        <h2 class="h3">Some of Our Esteemed Clients</h2>
        <div class="clients__grid mt-4">
            <?php
        while (have_rows('clients', 'options')) {
            the_row();
            ?>
            <a href="<?=get_sub_field('site')?>"
                target="_blank" rel="nofollow noopener" class="clients__card"
                title="<?=get_sub_field('name')?>">
                <div class="clients__client">
                    <img src="<?=wp_get_attachment_image_url(get_sub_field('logo'), 'large')?>"
                        alt="<?=get_sub_field('name')?>">
                </div>
            </a>
            <?php
        }
            ?>
        </div>
    </div>
</section>