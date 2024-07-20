<?php
$info = get_sub_field('info_block');
if ($info['display']) { ?>
    <div class="menu-description menu-description--franchising">
        <div class="title"><?php echo $info['title']; ?></div>
        <div class="menu-description__holder">
            <?php foreach ($info['blocks'] as $block) { ?>
                <div class="menu-description__box">
                    <div class="menu-description__info">
                        <div class="intro-box__text">
                            <div class="intro-box__title"><?php echo $block['title']; ?></div>
                            <?php echo $block['text']; ?>
                        </div>
                    </div>
                    <div class="menu-description__image">
                        <img src="<?php echo $block['img']['sizes']['format_img']; ?>" width="580" height="420"
                             alt="<?php echo $block['img']['alt']; ?>"
                        >
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }

