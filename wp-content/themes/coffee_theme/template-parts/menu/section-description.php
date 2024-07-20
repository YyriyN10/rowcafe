<?php
$description = get_sub_field('description_block');
if ($description['display'] && $description['boxes'] && count($description['boxes']) > 0) { ?>
    <div class="menu-description">
        <div class="title"><?php echo $description['title']; ?></div>
        <div class="menu-description__holder">
            <?php foreach ($description['boxes'] as $box) { ?>
                <div class="menu-description__box">
                    <div class="menu-description__info">
                        <div class="intro-box__text">
                            <?php echo $box['text']; ?>
                        </div>
                    </div>
                    <div class="menu-description__image">
                        <img src="<?php echo $box['img']['sizes']['format_img']; ?>" width="580" height="420"
                             alt="<?php echo $box['img']['alt']; ?>">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }