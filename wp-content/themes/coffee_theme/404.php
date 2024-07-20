<?php
get_header();
?>
    <div class="error-holder" style="background-image: url(<?php echo THEME_ASSETS_URL; ?>data/error-bg.jpg);">
        <div class="error-holder__box">
            <div class="error-holder__number">404</div>
            <div class="error-holder__title">ошибка</div>
            <div class="error-holder__text">Запрашиваемая страница не найдена</div>
            <a href="<?php echo home_url(); ?>" class="error-holder__btn">
                <span>на главную</span>
            </a>
        </div>
    </div>
<?php
get_footer();
