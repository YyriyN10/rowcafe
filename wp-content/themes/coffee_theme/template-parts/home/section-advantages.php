<?php
$advantages = get_sub_field('advantages_block');
if ($advantages['display']) { ?>
    <div class="advantages">
        <div class="title"><?php echo $advantages['title']; ?></div>
        <?php foreach ($advantages['list'] as $key => $advantage) { ?>
            <div class="intro-box">
                <div class="intro-box__info">
                    <div class="intro-box__title">
                        <div class="intro-box__number">
                            <?php
                            $key++;
                            echo $key < 10 ? '0' . $key : $key; ?>
                        </div>
                        <?php echo $advantage['title']; ?>
                    </div>
                    <div class="intro-box__text">
                        <?php echo $advantage['text']; ?>
                    </div>
                </div>
                <?php if ($advantage['img']['url']) { ?>
                    <div class="intro-box__image">
                        <img src="<?php echo $advantage['img']['sizes']['advantage_img']; ?>" width="800" height="545"
                             alt="<?php echo $advantage['img']['alt']; ?>"
                        >
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
<?php } ?>
