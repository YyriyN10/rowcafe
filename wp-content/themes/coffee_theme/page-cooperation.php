<?php
/**
 *
 * Template Name: Сотрудничество
 *
 */

get_header();
the_post();
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
                <a class="ajax-link" itemprop="item"><span itemprop="name"><?php the_title(); ?></span></a>
                <meta itemprop="position" content="2"/>
            </li>
        </ol>
        <?php if ($page_fields['top_img']) { ?>
            <div class="top-slider">
                <div class="top-slider__slide">
                    <div class="top-slider__slide-box"
                         style="background-image: url('<?php echo $page_fields['top_img']; ?>')">
                        <div class="video-section__holder">
                            <div class="video-section__title"><?php echo $page_fields['top_title']; ?></div>
                            <div class="video-section__text">
                                <?php echo $page_fields['top_text']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="cooperation-top">
        <div class="cooperation-top__holder">
            <div class="cooperation-top__title">
                <?php echo $page_fields['info_title']; ?>
            </div>
            <div class="cooperation-top__text">
                <?php echo $page_fields['info_text']; ?>
            </div>
        </div>
    </div>
<?php if ($page_fields['display_advantages']) { ?>
    <div class="advantages">
        <div class="fake-div"></div>
        <?php foreach ($page_fields['advantages'] as $advantage) { ?>
            <div class="intro-box">
                <div class="intro-box__info">
                    <div class="intro-box__title">
                        <?php echo $advantage['title']; ?>
                    </div>
                    <div class="intro-box__text">
                        <?php echo $advantage['text']; ?>
                    </div>
                </div>
                <div class="intro-box__image">
                    <img src="<?php echo $advantage['img']['sizes']['advantage_img']; ?>" width="800" height="545"
                         alt="<?php echo $advantage['img']['alt']; ?>"
                    >
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>
<?php if ($page_fields['display_formats']) { ?>
    <div class="formats">
        <div class="formats__holder">
            <div class="formats__title"><?php echo $page_fields['formats_title']; ?></div>
            <?php foreach ($page_fields['formats'] as $format) { ?>
                <div class="formats__box">
                    <div class="formats__info">
                        <div class="formats__info-block">
                            <div class="formats__name"><?php echo $format['title']; ?></div>
                            <div class="formats__notes">
                                <?php echo $format['text']; ?>
                            </div>
                            <ul class="formats__list">
                                <?php foreach ($format['list'] as $item) { ?>
                                    <li>
                                        <div class="formats__list-name">
                                            <div class="formats__list-ico">
                                                <img class="svg" src="<?php echo $item['img']['url']; ?>"
                                                     alt="<?php echo $item['img']['alt']; ?>"
                                                >
                                            </div>
                                            <?php echo $item['title']; ?>
                                        </div>
                                        <div class="formats__list-descr">
                                            <?php echo $item['text']; ?>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                            <div class="home-about__btn finance-button">
                                <div class="home-about__icon">
                                    <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/coffee-ico.svg">
                                </div>
	                              <?php echo esc_html( pll__( 'Получить финансовый план' ) ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="formats__image">
                        <div class="formats__image-box">
                            <img src="<?php echo $format['img']['sizes']['format_img']; ?>" width="580" height="420"
                                 alt="<?php echo $format['img']['alt']; ?>">
                        </div>
                        <div class="formats__image-box">
                            <img src="<?php echo $format['img']['sizes']['format_img']; ?>" width="580" height="420"
                                 alt="<?php echo $format['img']['alt']; ?>">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<?php if ($page_fields['display_opening']) { ?>
    <div class="team">
        <div class="team__holder">
            <div class="team__info">
                <div class="team__title"><?php echo $page_fields['opening_title']; ?></div>
                <div class="team__text">
                    <?php echo $page_fields['opening_text']; ?>
                </div>
                <a class="team__btn finance-button" >
                    <span>
                        <?php echo esc_html( pll__( 'Открыть кофейню' ) ); ?>
                    </span>
                </a>
            </div>
            <?php if (count($page_fields['opening_triggers']) > 0) { ?>
                <ul class="team__triggers">
                    <?php foreach ($page_fields['opening_triggers'] as $key => $trigger) { ?>
                        <li>
                            <div class="team__ico">
                                <?php echo $key + 1; ?>
                            </div>
                            <?php echo $trigger['text']; ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
    </div>
<?php } ?>
    <div class="main-text">
        <div class="main-text__holder">
            <?php the_content(); ?>
        </div>
    </div>
<?php
get_footer();
