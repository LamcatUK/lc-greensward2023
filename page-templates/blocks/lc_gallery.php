<section class="gallery pt-4">
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
<?php
add_action('wp_footer', function () {
    ?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<script>
    Fancybox.bind("[data-fancybox]", {});
</script>
<?php
}, 9999);
            ?>