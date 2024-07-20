<?php
$products = get_sub_field('products_block');
if ($products['display']) { ?>
    <div class="products-section">
        <div class="title"><?php echo $products['title']; ?></div>
        <?php foreach ($products['sections'] as $section) { ?>
            <div class="products-section__holder">
                <div class="products-section__sub-title">
                    <span><?php echo $section['title']; ?></span>
                </div>
                <div class="products-section__block">
                    <?php foreach ($section['columns'] as $column) { ?>
                        <div class="products-section__columns <?php echo $column['reverse'] ? 'reverse' : ''; ?>">
                            <div class="products-list">
                                <?php foreach ($column['products_list'] as $item) { //max 4 elements ?>
                                    <div class="product">
                                        <div class="product__image">
                                            <img src="<?php echo $item['img']['sizes']['product_thumb']; ?>"
                                                 alt="<?php echo $item['img']['alt']; ?>" width="270" height="270"
                                            >
                                        </div>
                                        <div class="product__info">
                                            <div class="product__name"><?php echo $item['name']; ?></div>
                                            <div class="product__descr"><?php echo $item['description']; ?></div>
                                            <div class="product__option"><?php echo $item['option']; ?></div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php if ($column['slider'] && count($column['slider']) > 0) { ?>
                                <div class="products-slider">
                                    <?php foreach ($column['slider'] as $slide) { ?>
                                        <div class="products-slider__slide">
                                            <div class="products-slider__image">
                                                <?php if ($slide['label']) {
                                                    $label_img = THEME_ASSETS_URL . 'images/label-';
                                                    $label_img .= $slide['label_type'] == 'hit' ? 'hit.svg' : 'favorite.svg';
                                                    ?>
                                                    <div class="products-slider__label">
                                                        <img class="svg" src="<?php echo $label_img; ?>">
                                                        <div class="products-slider__label-text">
                                                            <span><?php echo $slide['label_text_1']; ?></span>
                                                            <span><?php echo $slide['label_text_2']; ?></span>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="products-slider__image-box">
                                                    <img src="<?php echo $slide['img']['sizes']['product_slide']; ?>"
                                                         width="344" height="344"
                                                         alt="<?php echo $slide['img']['alt']; ?>"
                                                    >
                                                </div>
                                            </div>
                                            <div class="products-slider__info">
                                                <div class="products-slider__title"><?php echo $slide['title']; ?></div>
                                                <div class="products-slider__text"><?php echo $slide['text']; ?></div>
                                                <div class="products-slider__option"><?php echo $slide['option']; ?></div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
<?php }