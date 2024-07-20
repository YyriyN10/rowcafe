<?php
$triggers_block = get_sub_field('triggers_block');

if ($triggers_block['display']) { ?>
    <div class="triggers">
        <div class="triggers__holder">
            <div class="title"><?php echo $triggers_block['title']; ?></div>
            <div class="triggers__list">
                <?php foreach ($triggers_block['triggers'] as $trigger) { ?>
                    <div class="triggers__box">
                        <div class="triggers__icon">
                            <img class="svg" src="<?php echo $trigger['img']['url']; ?>"
                                 alt="<?php echo $trigger['img']['alt']; ?>"
                            >
                        </div>
                        <div class="triggers__title">
                            <?php echo $trigger['text_before']; ?>
                            <?php foreach ($trigger['counters'] as $counter) { ?>
                                <span class="count"
                                      data-from="<?php echo $counter['from']; ?>"
                                      data-to="<?php echo $counter['to']; ?>"
                                      data-speed="5000"
                                      data-refresh-interval="50"
                                >
                                    <?php echo $counter['to']; ?>
                                </span>
                            <?php } ?>
                            <?php echo $trigger['text_after']; ?>
                        </div>
                        <div class="triggers__text"><?php echo $trigger['text']; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
