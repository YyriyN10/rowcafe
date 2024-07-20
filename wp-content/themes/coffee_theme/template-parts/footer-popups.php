<?php $soc_fields = get_field('social_fields', 'option'); ?>
<div class="popup popup-business">
    <div class="popup__overlay"></div>
    <div class="popup__close">
        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/close.svg">
    </div>
    <div class="popup__holder">
        <div class="popup__title"><?php echo esc_html( pll__( 'Получить бизнес-план' ) ); ?></div>
        <form action="#" id="business_plan">
            <input type="hidden" name="type" value="Получить бизнес-план">
            <div class="popup__row">
                <input type="text" placeholder="<?php echo esc_html( pll__( 'Ваше имя' ) ); ?>:" name="name">
            </div>
            <div class="popup__row">
              <input type="text" placeholder="<?php echo esc_html( pll__( 'Ваш город' ) ); ?>:" name="city">
            </div>
            <div class="popup__row phone-mask-box">
                <!--<select class="select" name="phone_code">
                    <option value="380" data-svg="<?php /*echo THEME_ASSETS_URL; */?>data/flag-1.svg">+380</option>
                    <option value="7" data-svg="<?php /*echo THEME_ASSETS_URL; */?>data/flag-2.svg">+7</option>
                </select>-->
                <input type="tel" name="phone">
            </div>
            <div class="popup__row">
                <input type="email" name="email" placeholder="<?php _e('Ваш email', 'lemon_site'); ?>:">
            </div>
            <button class="popup__btn"><?php echo esc_html( pll__( 'отправить' ) ); ?></button>
        </form>
        <?php if ($soc_fields['tg'] || $soc_fields['viber'] || $soc_fields['whatsapp']) { ?>
            <div class="popup__notes"><span><?php echo esc_html( pll__( 'или' ) ); ?></span></div>
            <ul class="soc-list">
                <li>
                    <!--<a href="tg://resolve?domain=@<?php /*echo $soc_fields['tg']; */?>" target="_blank">
                        <img class="svg" src="<?php /*echo THEME_ASSETS_URL; */?>images/telega.svg">
                    </a>-->
                  <!--<a href="https://telegram.me/<?php /*echo $soc_fields['tg']; */?>" target="_blank">
                    <img class="svg" src="<?php /*echo THEME_ASSETS_URL; */?>images/telega.svg">
                  </a>-->
                  <a href="https://t.me/<?php echo $soc_fields['tg']; ?>" target="_blank">
                    <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/telega.svg">
                  </a>

                </li>
                <li class="viber-chat">
                    <a class="mob" href="viber://add?number=<?php echo $soc_fields['viber']; ?>" target="_blank">
                        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/viber.svg">
                    </a>
                  <a class="desc" href="viber://chat?number=<?php echo $soc_fields['viber']; ?>" target="_blank">
                    <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/viber.svg">
                  </a>
                </li>
                <li>
                    <!--<a href="https://api.whatsapp.com/send?phone=<?php /*echo $soc_fields['whatsapp']; */?>" target="_blank">
                        <img class="svg" src="<?php /*echo THEME_ASSETS_URL; */?>images/whatsap.svg">
                    </a>-->
                  <a href="https://wa.me/<?php echo $soc_fields['whatsapp']; ?>" target="_blank">
                    <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/whatsap.svg">
                  </a>

                </li>
            </ul>
        <?php } ?>
    </div>
</div>

<div class="popup popup-finance">
    <div class="popup__overlay"></div>
    <div class="popup__close">
        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/close.svg">
    </div>
    <div class="popup__holder">
        <div class="popup__title"><?php echo esc_html( pll__( 'ПОЛУЧИТЬ ФИНАНСОВЫЙ ПЛАН' ) ); ?></div>
        <form action="#" id="business_plan">
            <input type="hidden" name="type" value="ПОЛУЧИТЬ ФИНАНСОВЫЙ ПЛАН">
          <div class="popup__row">
            <input type="text" placeholder="<?php echo esc_html( pll__( 'Ваше имя' ) ); ?>:" name="name">
          </div>
          <div class="popup__row">
            <input type="text" placeholder="<?php echo esc_html( pll__( 'Ваш город' ) ); ?>:" name="city">
          </div>
            <div class="popup__row phone-mask-box">
                <!--<select class="select" name="phone_code">
                    <option value="380" data-svg="<?php /*echo THEME_ASSETS_URL; */?>data/flag-1.svg">+380</option>
                    <option value="7" data-svg="<?php /*echo THEME_ASSETS_URL; */?>data/flag-2.svg">+7</option>
                </select>-->
                <input type="tel" name="phone">
            </div>
            <div class="popup__row">
                <input type="email" name="email" placeholder="<?php _e('Ваш email', 'lemon_site'); ?>:">
            </div>
            <button class="popup__btn"><?php echo esc_html( pll__( 'отправить' ) ); ?></button>
        </form>
        <?php if ($soc_fields['tg'] || $soc_fields['viber'] || $soc_fields['whatsapp']) { ?>
            <div class="popup__notes"><span><?php echo esc_html( pll__( 'или' ) ); ?></span></div>
            <ul class="soc-list">
                <li>
                    <!--<a href="tg://resolve?domain=@<?php /*echo $soc_fields['tg']; */?>">
                        <img class="svg" src="<?php /*echo THEME_ASSETS_URL; */?>images/telega.svg">
                    </a>-->
                  <a href="https://t.me/<?php echo $soc_fields['tg']; ?>" target="_blank">
                    <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/telega.svg">
                  </a>
                </li>
                <!--<li>
                    <a href="viber://add?number=<?php /*echo $soc_fields['viber']; */?>">
                        <img class="svg" src="<?php /*echo THEME_ASSETS_URL; */?>images/viber.svg">
                    </a>
                </li>-->
              <li class="viber-chat">
                <a class="mob" href="viber://add?number=<?php echo $soc_fields['viber']; ?>" target="_blank">
                  <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/viber.svg">
                </a>
                <a class="desc" href="viber://chat?number=<?php echo $soc_fields['viber']; ?>" target="_blank">
                  <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/viber.svg">
                </a>
              </li>
                <li>
                    <a href="https://api.whatsapp.com/send?phone=<?php echo $soc_fields['whatsapp']; ?>">
                        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/whatsap.svg">
                    </a>
                </li>
            </ul>
        <?php } ?>
    </div>
</div>
<div class="popup popup-presentation">
    <div class="popup__overlay"></div>
    <div class="popup__close">
        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/close.svg">
    </div>
    <div class="popup__holder">
        <div class="popup__title"><?php echo esc_html( pll__( 'получить презентацию' ) ); ?></div>
        <form action="#" id="business_plan">
            <input type="hidden" name="type" value="получить презентацию">
          <div class="popup__row">
            <input type="text" placeholder="<?php echo esc_html( pll__( 'Ваше имя' ) ); ?>:" name="name">
          </div>
          <div class="popup__row">
            <input type="text" placeholder="<?php echo esc_html( pll__( 'Ваш город' ) ); ?>:" name="city">
          </div>
            <div class="popup__row phone-mask-box">
                <!--<select class="select" name="phone_code">
                    <option value="380" data-svg="<?php /*echo THEME_ASSETS_URL; */?>data/flag-1.svg">+380</option>
                    <option value="7" data-svg="<?php /*echo THEME_ASSETS_URL; */?>data/flag-2.svg">+7</option>
                </select>-->
                <input type="tel" name="phone">
            </div>
            <div class="popup__row">
                <input type="email" name="email" placeholder="<?php _e('Ваш email', 'lemon_site'); ?>:">
            </div>
            <button class="popup__btn"><?php echo esc_html( pll__( 'отправить' ) ); ?></button>
        </form>
        <?php if ($soc_fields['tg'] || $soc_fields['viber'] || $soc_fields['whatsapp']) { ?>
            <div class="popup__notes"><span><?php echo esc_html( pll__( 'или' ) ); ?></span></div>
            <ul class="soc-list">
                <li>
                    <!--<a href="tg://resolve?domain=@<?php /*echo $soc_fields['tg']; */?>">
                        <img class="svg" src="<?php /*echo THEME_ASSETS_URL; */?>images/telega.svg">
                    </a>-->
                  <a href="https://t.me/<?php echo $soc_fields['tg']; ?>" target="_blank">
                    <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/telega.svg">
                  </a>
                </li>
                <!--<li>
                    <a href="viber://add?number=<?php /*echo $soc_fields['viber']; */?>">
                        <img class="svg" src="<?php /*echo THEME_ASSETS_URL; */?>images/viber.svg">
                    </a>
                </li>-->
              <li class="viber-chat">
                <a class="mob" href="viber://add?number=<?php echo $soc_fields['viber']; ?>" target="_blank">
                  <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/viber.svg">
                </a>
                <a class="desc" href="viber://chat?number=<?php echo $soc_fields['viber']; ?>" target="_blank">
                  <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/viber.svg">
                </a>
              </li>
                <li>
                    <a href="https://api.whatsapp.com/send?phone=<?php echo $soc_fields['whatsapp']; ?>">
                        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/whatsap.svg">
                    </a>
                </li>
            </ul>
        <?php } ?>
    </div>
</div>
<div class="popup popup-callback">
    <div class="popup__overlay"></div>
    <div class="popup__close">
        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/close.svg">
    </div>
    <div class="popup__holder">
        <div class="popup__title"><?php echo esc_html( pll__( 'Заказать звонок' ) ); ?></div>
        <form action="#" id="business_plan">
            <input type="hidden" name="type" value="Заказать звонок">
          <div class="popup__row">
            <input type="text" placeholder="<?php echo esc_html( pll__( 'Ваше имя' ) ); ?>:" name="name">
          </div>
          <div class="popup__row">
            <input type="text" placeholder="<?php echo esc_html( pll__( 'Ваш город' ) ); ?>:" name="city">
          </div>
            <div class="popup__row phone-mask-box">
                <!--<select class="select" name="phone_code">
                    <option value="380" data-svg="<?php /*echo THEME_ASSETS_URL; */?>data/flag-1.svg">+380</option>
                    <option value="7" data-svg="<?php /*echo THEME_ASSETS_URL; */?>data/flag-2.svg">+7</option>
                </select>-->
                <input type="tel" name="phone">
            </div>
            <button class="popup__btn"><?php echo esc_html( pll__( 'отправить' ) ); ?></button>
        </form>
        <?php if ($soc_fields['tg'] || $soc_fields['viber'] || $soc_fields['whatsapp']) { ?>
            <div class="popup__notes"><span><?php echo esc_html( pll__( 'или' ) ); ?></span></div>
            <ul class="soc-list">
                <li>
                    <!--<a href="tg://resolve?domain=@<?php /*echo $soc_fields['tg']; */?>">
                        <img class="svg" src="<?php /*echo THEME_ASSETS_URL; */?>images/telega.svg">
                    </a>-->
                  <a href="https://t.me/<?php echo $soc_fields['tg']; ?>" target="_blank">
                    <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/telega.svg">
                  </a>
                </li>
                <!--<li>
                    <a href="viber://add?number=<?php /*echo $soc_fields['viber']; */?>">
                        <img class="svg" src="<?php /*echo THEME_ASSETS_URL; */?>images/viber.svg">
                    </a>
                </li>-->
              <li class="viber-chat">
                <a class="mob" href="viber://add?number=<?php echo $soc_fields['viber']; ?>" target="_blank">
                  <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/viber.svg">
                </a>
                <a class="desc" href="viber://chat?number=<?php echo $soc_fields['viber']; ?>" target="_blank">
                  <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/viber.svg">
                </a>
              </li>
                <li>
                    <a href="https://api.whatsapp.com/send?phone=<?php echo $soc_fields['whatsapp']; ?>">
                        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/whatsap.svg">
                    </a>
                </li>
            </ul>
        <?php } ?>
    </div>
</div>
<div class="popup popup-success">
    <div class="popup__overlay"></div>
    <div class="popup__close">
        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/close.svg">
    </div>
    <div class="popup__holder">
        <div class="popup__box">
            <div class="popup__title"><?php echo esc_html( pll__( 'Успешно отправлено' ) ); ?></div>
            <div class="popup__text"><?php echo esc_html( pll__( 'Ваша заявка доставлена. Наш менеджер свяжется с Вами в ближайшее время' ) ); ?></div>
            <div class="cancel">OK</div>
        </div>
    </div>
</div>
<div class="popup popup-formats">
    <div class="popup__overlay"></div>
    <div class="popup__close">
        <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/close.svg">
    </div>
    <div class="popup__holder">
        <div class="formats__box" id="formats_box">
            <div class="formats__info">
                <div class="formats__info-block">
                    <div class="formats__name">TO GO</div>
                    <div class="formats__notes">Наиболее компактный формат кофейни, которую можно открыть в любой
                        части города на малой площади
                    </div>
                    <ul class="formats__list">
                    </ul>
                    <div class="home-about__btn finance-button">
                        <div class="home-about__icon">
                            <img class="svg" src="<?php echo THEME_ASSETS_URL; ?>images/coffee-ico.svg">
                        </div>
                        Получить финансовый план
                    </div>
                </div>
            </div>
            <div class="formats__image">

                <div class="formats__image-box">
                    <img src="<?php echo THEME_ASSETS_URL; ?>data/formats-1.jpg" width="580" height="420">
                </div>

            </div>
        </div>
    </div>
</div>