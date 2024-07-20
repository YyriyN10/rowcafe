<?php
/**
 *
 * Template Name: Главная
 *
 */
the_post();
get_header();
$page_fields = get_field('page_fields');
?>
    <div class="video-section">
        <?php if ($page_fields['video_mp4']) { ?>
            <video playsinline muted="" loop="" autoplay="">
                <?php if ($page_fields['video_webm']) { ?>
                    <source src="<?php echo $page_fields['video_webm']; ?>" type="video/webm">
                <?php } ?>
                <source src="<?php echo $page_fields['video_mp4']; ?>" type="video/mp4">
            </video>
        <?php } ?>
        <div class="video-section__holder">
            <div class="video-section__title"><?php echo $page_fields['video_title']; ?></div>
            <div class="video-section__text"><?php echo $page_fields['video_text']; ?></div>
            <a class="presentation-button video-section__btn">
                <span><?php echo esc_html( pll__( 'Получить презентацию' ) ); ?></span>
            </a>
        </div>
        <div class="video-section__bottom">
            <div class="video-section__bottom-text">
	            <?php echo esc_html( pll__( 'скролль' ) ); ?>
            </div>
            <div class="video-section__bottom-arrow">
                <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/scroll-arrow.svg">
            </div>
            <div class="video-section__bottom-text">
	            <?php echo esc_html( pll__( 'дальше' ) ); ?>
            </div>
        </div>
    </div>
    <?php
    if(have_rows('flexible_content')){
        while (have_rows('flexible_content')){
            the_row();
            get_template_part('template-parts/home/section', get_row_layout());
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
