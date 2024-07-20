<?php
$about = get_sub_field('about_block');
if ($about['display']) { ?>
    <div class="franchising-about">
        <div class="franchising-about__holder">
            <div class="franchising-about__image">
                <img src="<?php echo $about['img']['sizes']['franchising_about_img']; ?>" width="580" height="580"
                     alt="<?php echo $about['img']['alt']; ?>"
                >
            </div>
            <div class="franchising-about__info">
                <div class="franchising-about__info-box">
                    <div class="franchising-about__title">
                        <?php echo $about['title']; ?>
                    </div>
                    <div class="franchising-about__list">
                        <?php foreach ($about['triggers'] as $trigger) { ?>
                            <div class="franchising-about__box">
                                <div class="franchising-about__icon">
                                    <img class="svg" src="<?php echo $trigger['img']['url']; ?>"
                                         alt="<?php echo $trigger['img']['alt']; ?>"
                                    >
                                </div>
                                <div class="franchising-about__descr">
                                    <div class="franchising-about__number">
                                        <span class="count-last"
                                              data-from="<?php echo $trigger['num_from']; ?>"
                                              data-to="<?php echo $trigger['num_to']; ?>"
                                              data-speed="5000" data-refresh-interval="50">
                                            <?php echo $trigger['num_from']; ?>
                                        </span>
                                        <span><?php echo $trigger['text_after_num']; ?></span>
                                    </div>
                                    <div class="franchising-about__text"><?php echo $trigger['text']; ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }
