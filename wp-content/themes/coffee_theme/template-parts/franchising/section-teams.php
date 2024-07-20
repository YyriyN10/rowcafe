<?php
$team = get_sub_field('teams_block');
if ($team['display']) { ?>
    <div class="team">
        <div class="team__holder">
            <div class="team__info">
                <div class="team__title team__title--custom">
                    <?php echo $team['title']; ?>
                </div>
                <div class="team__text">
                    <?php echo $team['text']; ?>
                </div>
                <?php if ($team['btn_text']) { ?>
                    <a class="team__btn finance-button">
                        <span><?php echo $team['btn_text']; ?></span>
                    </a>
                <?php } ?>
            </div>
            <?php if ($team['triggers']) { ?>
                <ul class="team__triggers">
                    <?php foreach ($team['triggers'] as $trigger) { ?>
                        <li>
                            <div class="team__ico">
                                <img class="svg" src="<?php echo $trigger['img']['url']; ?>"
                                     alt="<?php echo $trigger['img']['alt']; ?>">
                            </div>
                            <?php echo $trigger['title']; ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
    </div>
<?php }