<?php
$about_block = get_sub_field('about_block');
if ($about_block['display']) { ?>
    <div class="home-about">
        <div class="home-about__title"><?php echo $about_block['title']; ?></div>
        <div class="home-about__text">
            <?php echo $about_block['text']; ?>
        </div>
        <div class="business-button home-about__btn">
            <div class="home-about__icon">
                <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/coffee-ico.svg">
            </div>
            <?php echo $about_block['btn_title']; ?>
        </div>
    </div>
<?php } ?>