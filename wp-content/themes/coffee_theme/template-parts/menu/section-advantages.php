<?php
$advantages = get_sub_field('advantages_block');
if ($advantages['display'] && $advantages['list'] && count($advantages['list']) > 0) { ?>
    <div class="menu-advantages">
        <div class="menu-advantages__holder">
            <div class="title"><?php echo $advantages['title']; ?></div>
            <div class="menu-advantages__list">
                <?php foreach ($advantages['list'] as $item) { ?>
                    <div class="menu-advantages__box">
                        <div class="menu-advantages__ico">
                            <img class="svg" src="<?php echo $item['img']['url']; ?>"
                                 alt="<?php echo $item['img']['alt']; ?>"
                            >
                        </div>
                        <div class="menu-advantages__info">
                            <div class="menu-advantages__title"><?php echo $item['title']; ?></div>
                            <div class="menu-advantages__text"><?php echo $item['text']; ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>