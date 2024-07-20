<?php
$social_fields = get_field('social_fields', 'option');
?>
<div class="footer">
    <div class="footer__holder">
        <?php if (is_front_page()) { ?>
            <a class="footer__logo">
                <img src="<?php echo THEME_ASSETS_URL; ?>images/footer-logo.png" width="57" height="60"
                     alt="ryan row coffee">
            </a>
        <?php } else { ?>
            <a href="<?php echo home_url(); ?>" class="footer__logo">
                <img src="<?php echo THEME_ASSETS_URL; ?>images/footer-logo.png" width="57" height="60"
                     alt="ryan row coffee">
            </a>
        <?php } ?>
        <nav class="footer__nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer-menu',
                'container' => ''
            ]); ?>
        </nav>
        <div class="arrow-up">
            наверх
            <div class="arrow-up__ico">
                <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/arrow-up.svg">
            </div>
        </div>
    </div>
    <div class="footer__copy">
        <div class="copy">
            <?php echo '&copy;' . date('Y') . ' Ryan Row Coffee. Все права защищены'; ?>
        </div>
        <?php if ($social_fields['fb_link'] || $social_fields['insta']) { ?>
            <ul class="social">
                <li>
                    <a target="_blank" href="<?php echo $social_fields['fb_link']; ?>">
                        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/facebook.svg">
                    </a>
                </li>
                <li>
                    <a target="_blank" href="<?php echo $social_fields['insta']; ?>">
                        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/insta.svg">
                    </a>
                </li>
            </ul>
        <?php } ?>
        <!--        Create by https://art-lemon.com/ -->
    </div>
</div>
<?php get_template_part('template-parts/footer', 'popups'); ?>
</div>

<?php
wp_footer();
?>

</body>

</html>
