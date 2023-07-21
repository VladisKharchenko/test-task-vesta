<div class="header__contacts">
  <div class="header__location">
    <img src="<?php print base_path() . path_to_theme(); ?>/images/header-location-img.png" class="header__location-img"
      alt="Иконка метки" />
    <div class="header__location-address">
      Адрес:&nbsp;
      <?php if (!empty($page['locationaddress'])): ?>
        <div href="geo:55.753930,37.620795" class="header__location-address-geo">
          <?php print render($page['locationaddress']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="header__mail">
    <img src="<?php print base_path() . path_to_theme(); ?>/images/header-mail-img.png" class="header__mail-img"
      alt="Иконка почты" />
    <div class="header__mail-header">
      Почта:&nbsp;
      <?php if (!empty($page['mailheader'])): ?>
        <div href="mailto:info@mail.ru" class="header__mail-address">
          <?php print render($page['mailheader']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="header__phone">
    <img src="<?php print base_path() . path_to_theme(); ?>/images/header-phone-img.png" class="header__phone-img"
      alt="Иконка телефона" />
    <div class="header__phone-header">
      Телефон:&nbsp;
      <?php if (!empty($page['phoneheader'])): ?>
        <div href="tel:" class="header__phone-number">
          <?php print render($page['phoneheader']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>