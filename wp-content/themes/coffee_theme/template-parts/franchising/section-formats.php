<?php
$formats = get_sub_field('formats_block');
if ($formats['display']) { ?>
    <div class="coffee-list">
        <div class="coffee-list__holder">
            <div class="title"><?php echo $formats['title']; ?></div>
            <div class="coffee-list__notes">
                <?php echo $formats['sub_title']; ?>
            </div>
            <div class="coffee-list__columns">
                <?php foreach ($formats['list'] as $box) { ?>
                    <div class="coffee-list__box">
                        <?php if ($box['label']) { ?>
                            <div class="products-slider__label">
                                <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/label-favorite.svg">
                                <div class="products-slider__label-text">
                                    <span><?php echo $box['label_text_1']; ?></span>
                                    <span><?php echo $box['label_text_2']; ?></span>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="coffee-list__image">
                            <div class="coffee-list__image-box">
                                <img src="<?php echo $box['img']['sizes']['format']; ?>" width="374" height="270"
                                     alt="<?php echo $box['img']['alt']; ?>">
                            </div>
                            <div class="coffee-list__image-box">
                                <img src="<?php echo $box['img']['sizes']['format']; ?>" width="374" height="270"
                                     alt="<?php echo $box['img']['alt']; ?>">
                            </div>
                        </div>
                        <div class="coffee-list__info">
                            <div class="coffee-list__title"><?php echo $box['title']; ?></div>
                            <div class="coffee-list__text">
                                <?php echo $box['text']; ?>
                            </div>
                            <?php if ($box['format']) { ?>
                                <div class="coffee-list__more-box">
                                    <div class="coffee-list__more" data-format="<?php echo $box['format']; ?>">
                                        <div class="coffee-list__more-ico">
                                            <img class="svg"
                                                 src="<?php echo THEME_ASSETS_URL; ?>images/coffee-list__more.svg">
                                        </div>
	                                      <?php echo esc_html( pll__( 'Подробнее' ) ); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php if ($formats['btn_text']) { ?>
                <div class="coffee-list__bottom">
                    <div class="home-about__btn business-button">
                        <div class="home-about__icon">
                            <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/coffee-ico.svg">
                        </div>
	                      <?php /*echo esc_html( pll__( 'Получить финансовый план' ) ); */?>
                        <?php echo $formats['btn_text']; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }
