<?php
$classes = $block['className'] ?? null;
?>
<section class="contact_details py-5 <?=$classes?>">
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-6">
                <h2>Find Us</h2>
                <ul class="fa-ul no-indent">
                    <li class="mb-4"><span class="fa-li"><i class="far fa-envelope"></i></span>
                        <?=do_shortcode('[contact_email]')?>
                    </li>
                    <li class="mb-4"><span class="fa-li"><i class="fas fa-phone-alt"></i></span>
                        <?=do_shortcode('[contact_phone]')?>
                    </li>
                    <?php
                    if (get_field('phone_2', 'options')) {
                        ?>
                    <li class="mb-4"><span class="fa-li"><i class="fas fa-phone-alt"></i></span>
                        <?=do_shortcode('[contact_phone2]')?>
                    </li>
                    <?php
                    }
?>
                    <li class="mb-4"><span class="fa-li"><i class="fas fa-map-marker-alt"></i></span>
                        <?=get_field('contact_address', 'options')?>
                    </li>
                </ul>
                <div class="social-icons fs-600 ms-4 d-flex gap-3">
                    <?=do_shortcode('[social_icons]')?>
                </div>
            </div>
            <div class="col-lg-6">
                <iframe
                    src="<?=get_field('maps_url', 'options')?>"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>