<?php
/**
 *
 * Template Name: Меню
 *
 */
the_post();
get_header();
$page_fields = get_field('page_fields');
?>
    <div class="top-page">
        <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a class="ajax-link" itemprop="item" href="<?php echo home_url(); ?>">
                    <span itemprop="name"><?php echo esc_html( pll__( 'Главная' ) ); ?></span>
                </a>
                <meta itemprop="position" content="1"/>
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a class="ajax-link" itemprop="item">
                    <span itemprop="name"><?php the_title(); ?></span>
                </a>
                <meta itemprop="position" content="2"/>
            </li>
        </ol>
        <?php if ($page_fields['slider'] && count($page_fields['slider']) > 0) { ?>
            <div class="top-slider">
                <?php foreach ($page_fields['slider'] as $slide) { ?>
                    <div class="top-slider__slide">
                        <div class="top-slider__slide-box"
                             style="background-image: url('<?php echo $slide['bg']; ?>')">
                            <div class="video-section__holder">
                                <div class="video-section__title"><?php echo $slide['title']; ?></div>
                                <div class="video-section__text">
                                    <?php echo $slide['text']; ?>
                                </div>
                                <?php if ($slide['btn']) { ?>
                                    <a href="#" class="video-section__btn finance-button">
                                        <span><?php echo $slide['btn']; ?></span>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="top-slider__bottom">
            <div class="slide-count"></div>
        </div>
    </div>
<?php
if (have_rows('flexible_content')) {
    while (have_rows('flexible_content')) {
        the_row();
        get_template_part('template-parts/menu/section', get_row_layout());
    }
}
wp_reset_postdata();
?>
    <div class="main-text">
        <div class="main-text__holder">
            <?php the_content(); ?>
        </div>
    </div>
<?php
get_footer();
