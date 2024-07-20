<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P4F6BMQ');</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16 32x32"
          href="<?php echo THEME_ASSETS_URL; ?>images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<?php echo THEME_ASSETS_URL; ?>images/android-icon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_ASSETS_URL; ?>images/apple-icon-180x180.png">
    <?php wp_head(); ?>
    <script type="text/javascript">
        (function(d, w, s) {
        var widgetHash = 'sr6it0wblks4jsd9zdd7', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
        gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
        var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
        })(document, window, 'script');
    </script>
	<meta name="google-site-verification" content="_fyEJw45fAwoCVuWC3GP_075EkgyrjiKBO0gDWuKkAU" />
</head>

<?php
$class = "";
if (is_page_template('page-about.php')) {
    $class .= ' about';
} else if (is_page_template('page-front.php')) {
    $class .= ' home';
} else if (is_page_template('template-product.php')){
	$class .= ' product-page';
}
?>
<body class="<?php echo $class; ?>">
	<!-- 
Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4F6BMQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper">
    <header class="header">
        <div class="header__holder">
            <div class="menu-opener">
                <span class="menu-opener__line line-1"></span>
                <span class="menu-opener__line line-2"></span>
                <span class="menu-opener__line line-3"></span>
            </div>
            <?php if (is_front_page()) { ?>
                <a class="logo">
                    <img src="<?php echo THEME_ASSETS_URL; ?>images/logo.svg" alt="ryan row coffee">
                </a>
            <?php } else { ?>
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="<?php echo THEME_ASSETS_URL; ?>images/logo.svg" alt="ryan row coffee">
                </a>
            <?php } ?>
            <div class="header__navigation">
                <div class="header__navigation-box">
                    <div class="logo logo--mobile">
                        <img src="<?php echo THEME_ASSETS_URL; ?>images/logo_rrc_mobile.svg">
                    </div>
                    <?php
                        $siteLang = get_bloginfo('language');
                    $header_btn = get_field('header_btn', 'option');
                    if ($header_btn) { ?>
                        <a class="franchising" href="<?php echo $header_btn[$siteLang]; ?>"
                           target="<?php echo $header_btn['target']; ?>">
                            <?php /*echo $header_btn['title']; */?>
                            <?php echo esc_html( pll__( 'Франчайзинг' ) ); ?>
                        </a>
                    <?php } ?>
                    <nav class="nav">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'header-menu',
                            'container' => ''
                        ]); ?>
                    </nav>
                </div>
              <ul class="mobile-lang-list">
	              <?php

		              $langArgs = array(
			              'show_names' => 0,
			              'display_names_as' => 'slug',
			              'show_flags' => 0,
			              'hide_current' => 1
		              );

		              pll_the_languages($langArgs);

	              ?>
              </ul>
                <div class="mobile-tel">
                    <a href="tel:0800338484">
                        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/phone-ico.svg">
                        0 800 33 84 84
                    </a>
                </div>
            </div>
        </div>
      <ul class="lang-list">
	      <?php

		      $langArgs = array(
			      'show_names' => 0,
			      'display_names_as' => 'slug',
			      'show_flags' => 0,
			      'hide_current' => 1
		      );

		      pll_the_languages($langArgs);

	      ?>
      </ul>
        <div class="phones">
            <div class="phones__row">
                <a href="tel:0800338484">
                    <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/phone-ico.svg">
                    0 800 33 84 84
                </a>
            </div>
            <div class="callback-button callback">
	              <?php echo esc_html( pll__( 'Горячая линия' ) ); ?>
            </div>
        </div>
    </header>
