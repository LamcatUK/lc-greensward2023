<?php
$cols = get_field('cols') == 3 ? 'col-lg-4' : 'col-lg-6';
?>
<section class="team">
    <div class="container-xl py-5">
        <h2><?=get_field('title')?></h2>
        <div class="row g-4 justify-content-center">
            <?php
while(have_rows('team')) {
    the_row();
    ?>
            <div class="<?=$cols?>">
                <img class="team__img"
                    src="<?=wp_get_attachment_image_url(get_sub_field('image'), 'full')?>">
                <div class="team__name">
                    <?=get_sub_field('name')?>
                </div>
                <div class="team__role">
                    <?=get_sub_field('role')?>
                </div>
                <div class="team__bio">
                    <?=get_sub_field('bio')?>
                </div>
                <?php
                if (get_sub_field('email') ?? null) {
                    ?>
                <div class="team__bio">
                    <a
                        href="mailto:<?=get_sub_field('email')?>"><i
                            class="fa-solid fa-envelope"></i>
                        <?=get_sub_field('email')?></a>
                </div>
                <?php
                }
    ?>
            </div>
            <?php
}
?>
        </div>
    </div>
</section>