<?php
$franchise = get_sub_field('franchise_block');
if ($franchise['display']) { ?>
    <div class="franchise-section">
        <div class="title"><?php echo $franchise['title']; ?></div>
        <div class="franchise-section__holder">
            <div class="franchise-section__list">
                <?php foreach ($franchise['list'] as $key => $item) {
                    $key++;
                    ?>
                    <div class="franchise-section__box franchise-section__box--<?php echo $key; ?>">
                        <div class="franchise-section__number">
                            <?php echo $key < 10 ? '0' . $key : $key; ?>
                        </div>
                        <div class="franchise-section__text">
                            <?php echo strip_tags($item['text'], '<strong>'); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php if ($franchise['btn_text']) { ?>
            <div class="franchise-section__buttons">
                <div class="business-button home-about__btn">
                    <div class="home-about__icon">
                        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/coffee-ico.svg" alt="ico">
                    </div>
                    <?php echo $franchise['btn_text']; ?>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>