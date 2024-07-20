<?php
$triggers = get_sub_field('triggers_block');
if ($triggers['display']) { ?>
    <div class="franchising-triggers">
        <div class="franchising-triggers__holder">
            <div class="title"><?php echo $triggers['title']; ?></div>
            <div class="franchising-triggers__list">
                <div class="franchising-triggers__line-1"></div>
                <div class="franchising-triggers__line-2"></div>
                <div class="franchising-triggers__image">
                    <div class="franchising-triggers__image-line"></div>
                    <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/franchising-decor.svg">
                </div>
                <?php foreach ($triggers['list'] as $key => $trigger) {
                    $key++; ?>
                    <div class="franchising-triggers__box franchising-triggers__box--<?php echo $key; ?>">
                        <div class="franchising-triggers__center">
                            <div class="franchising-triggers__title"><?php echo $trigger['title']; ?></div>
                            <div class="franchising-triggers__text">
                                <?php echo $trigger['text']; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }