<section class="gallery pt-4 pb-5">
    <div class="container-xl">
        <div class="gallery-grid" id="gallery">
            <?php
foreach (get_field('gallery') as $img) {
    ?>
            <a href="<?=wp_get_attachment_image_url($img, 'full')?>"
                data-fancybox="gallery" class="grid-item text-center" aria-label="View image">
                <?=wp_get_attachment_image($img, 'large')?></a>
            <?php
}
            ?>
        </div>
    </div>
</section>