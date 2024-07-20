<?php
$review = get_sub_field('review_block');
if ($review['display']) {
    ?>
    <div class="review">
        <div class="review__holder">
            <div class="title">
                <?php echo $review['title']; ?>
            </div>
            <div class="review__slider">
                <?php foreach ($review['slider'] as $slide) { ?>
                    <div class="review__slide">
                        <div class="review__slide-box">
                            <?php if ($slide['embed']) { ?>
                                <div class="review__video">
                                    <iframe width="343" height="222"
                                            src="https://www.youtube.com/embed/<?php echo $slide['embed']; ?>"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>
                            <?php } ?>
                            <div class="review__info">
                                <div class="review__name"><?php echo $slide['name']; ?></div>
                                <div class="review__text">
                                    <?php echo $slide['text']; ?>
                                </div>
                                <div class="review__info">
                                    <div class="review__address">
                                        <?php echo $slide['address']; ?>
                                    </div>
                                    <div class="review__work-time">
                                        <?php echo $slide['work_time']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php }