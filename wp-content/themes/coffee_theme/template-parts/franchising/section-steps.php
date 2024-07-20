<?php
$steps = get_sub_field('steps_block');
if ($steps['display']) { ?>
    <div class="steps">
        <div class="steps__holder">
            <div class="steps__title">
                <?php echo $steps['title']; ?>
            </div>
            <div class="steps__list">
                <div class="steps__image">
                    <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/steps-image.svg">
                </div>
                <?php foreach ($steps['steps'] as $key => $step) {
                    $key++; ?>
                    <div class="steps__box steps__box--<?php echo $key; ?>">
                        <div class="steps__number">
                            <span>0<?php echo $key; ?></span>
                        </div>
                        <div class="steps__name"><?php echo $step['name']; ?></div>
                        <div class="steps__text">
                            <?php echo $step['text']; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }
