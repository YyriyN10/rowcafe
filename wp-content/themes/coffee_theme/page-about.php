<?php
/**
 *
 * Template Name: О нас
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
                <a class="ajax-link" itemprop="item">
                    <span itemprop="name"><?php the_title(); ?></span>
                </a>
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
<?php if ($page_fields['display_about_block']) {
    $about_block = $page_fields['about_block']; ?>
    <div class="about-info">
        <div class="about-info__columns">
            <div class="about-info__box">
                <div class="about-info__title"><?php echo $about_block['title']; ?></div>
                <div class="about-info__position">
                    <?php echo $about_block['subtitle']; ?>
                </div>
                <div class="about-info__text">
                    <?php echo $about_block['text']; ?>
                </div>
                <div class="about-info__bottom">
                    <div class="arrow-up__ico">
                        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/arrow-up.svg">
                    </div>
                    <?php echo esc_html( pll__( 'интервью с основателем' ) ); ?>

                </div>
            </div>
            <?php if ($about_block['img']['url']) { ?>
                <div class="about-info__image">
                    <img src="<?php echo $about_block['img']['sizes']['about_img']; ?>" width="462" height="613"
                         alt="<?php echo $about_block['img']['alt']; ?>">
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<?php if ($page_fields['display_interview_block'] && is_array($page_fields['interview_block']['blocks'])) {
    $interview_block = $page_fields['interview_block'];
    if (count($interview_block['blocks']) > 0) { ?>
        <div class="interview">
            <?php foreach ($interview_block['blocks'] as $key => $block) { ?>
                <div class="interview__box interview__box--<?php echo $key + 1; ?>">
                    <div class="interview__image">
                        <img src="<?php echo $block['img']['sizes']['interview_img']; ?>" width="675" height="580"
                             alt="<?php echo $block['img']['alt']; ?>"
                        >
                    </div>
                    <div class="interview__info">
                        <div class="interview__title"><?php echo $block['title']; ?></div>
                        <div class="interview__text">
                            <?php echo $block['text']; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
<?php } ?>
<?php if ($page_fields['display_faq_block']) {
    $faq_block = $page_fields['faq_block']; ?>
    <div class="faq">
        <div class="faq__holder">
            <div class="faq__title"><?php echo $faq_block['title']; ?></div>
            <div class="faq__notes">
                <?php echo $faq_block['subtitle']; ?>
            </div>
            <ul class="faq__list">
                <?php foreach ($faq_block['questions'] as $question) { ?>
                    <li>
                        <a href="#" class="opener"><?php echo $question['title']; ?></a>
                        <div class="slide">
                            <?php echo $question['answer']; ?>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="faq__callback-section">
            <div class="faq__callback">
                <div class="faq__callback-ico">
                    <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/call-ico.svg">
                </div>
	              <?php echo esc_html( pll__( 'задать другой вопрос' ) ); ?>

            </div>
        </div>
    </div>
<?php } ?>
<?php if ($page_fields['display_team_block']) {
    $team_block = $page_fields['team_block']; ?>
    <div class="team">
        <div class="team__holder">
            <div class="team__info">
                <div class="team__title"><?php echo $team_block['title']; ?></div>
                <div class="team__text">
                    <?php echo $team_block['text']; ?>
                </div>
                <a class="team__btn finance-button">
                    <span><?php echo esc_html( pll__( 'Открыть кофейню' ) ); ?></span>
                </a>
            </div>
            <?php if ($team_block['triggers'] && count($team_block['triggers']) > 0) { ?>
                <ul class="team__triggers">
                    <?php foreach ($team_block['triggers'] as $trigger) { ?>
                        <li>
                            <div class="team__ico">
                                <img class="svg" src="<?php echo $trigger['img']; ?>">
                            </div>
                            <?php echo $trigger['title']; ?>
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