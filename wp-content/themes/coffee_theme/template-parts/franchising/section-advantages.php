<?php
$advantages = get_sub_field('advantages_block');
if ($advantages['display']) { ?>
    <div class="franchising-advantages">
        <div class="franchising-advantages__holder">
            <div class="franchising-advantages__image">
                <img src="<?php echo $advantages['img']['sizes']['advantage']; ?>" width="1170" height="540"
                     alt="<?php echo $advantages['img']['alt']; ?>"
                >
            </div>
            <div class="franchising-advantages__title">
                <?php echo $advantages['title']; ?>
            </div>
            <div class="franchising-advantages__text">
                <?php echo $advantages['subtitle']; ?>
            </div>
            <div class="menu-advantages__list">
                <?php foreach ($advantages['list'] as $advantage) { ?>
                    <div class="menu-advantages__box">
                        <div class="menu-advantages__ico">
                            <img class="svg" src="<?php echo $advantage['img']['url']; ?>"
                                 alt="<?php echo $advantage['img']['alt']; ?>"
                            >
                        </div>
                        <div class="menu-advantages__info">
                            <div class="menu-advantages__title"><?php echo $advantage['title']; ?></div>
                            <div class="menu-advantages__text"><?php echo $advantage['text']; ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="franchising-advantages__notes">
                <?php echo $advantages['text']; ?>
            </div>
            <div class="franchising-advantages__btn-box">
                <div class="franchising-advantages__btn finance-button">
                    <span><?php echo $advantages['btn_text']; ?></span>
                </div>
            </div>
        </div>
    </div>
<?php }
