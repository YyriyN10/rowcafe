<?php
$indicators = get_sub_field('indicators_block');
if ($indicators['display']) { ?>
    <div class="franchising-section">
        <div class="title"><?php echo $indicators['title']; ?></div>
        <div class="home-about__text">
            <?php echo $indicators['text']; ?>
        </div>
        <div class="triggers__list">
            <?php foreach ($indicators['boxes'] as $box) { ?>
                <div class="triggers__box">
                    <div class="triggers__icon">
                        <img class="svg" src="<?php echo $box['img']['url']; ?>"
                             alt="<?php echo $box['img']['alt']; ?>">
                    </div>
                    <div class="triggers__title">
                        <span><?php echo $box['text_before']; ?></span>
                        <?php echo $box['num_before']; ?>
                        <?php
                        if ($box['grow_numbers'] && count($box['grow_numbers']) > 0) {
                            foreach ($box['grow_numbers'] as $number) { ?>
                                <span class="count-new"
                                      data-from="<?php echo $number['from']; ?>"
                                      data-to="<?php echo $number['to']; ?>"
                                      data-speed="5000" data-refresh-interval="50"
                                >
                                    <?php echo $number['from']; ?>
                                </span>
                            <?php }
                        } ?>
                        <?php echo $box['num_after']; ?>
                        <span><?php echo $box['text_after']; ?></span>
                    </div>
                    <div class="triggers__text"><?php echo $box['text']; ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }