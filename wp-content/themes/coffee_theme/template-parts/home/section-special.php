<?php
$special = get_sub_field('special_block');
if ($special['display']) { ?>
    <div class="special-section">
        <div class="special-section__holder">
            <div class="special-section__image">
                <img src="<?php echo $special['img']['sizes']['special']; ?>" width="590" height="560"
                     alt="<?php echo $special['img']['alt']; ?>"
                >
            </div>
            <div class="special-section__info">
                <div class="special-section__title"><?php echo $special['title']; ?></div>
                <div class="special-section__text">
                    <?php echo $special['text']; ?>
                </div>
                <?php if ($special['btn_text']) { ?>
                    <div class="special-section__btn finance-button">
                        <span><?php echo $special['btn_text']; ?></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }