<?php if (!empty($page['benefits'])): ?>
  <div class="benefits">
    <h1 class="benefits__title">ПРЕИМУЩЕСТВА НАШЕЙ ФИРМЫ</h1>
    <div class="benefits__container">
      <div class="benefit">
        <img src="<?php print base_path() . path_to_theme(); ?>/images/benefit-image1.png" class="benefit__image"
          alt="Значек напряжения обернутый кругом из проводов" />
        <?php if (!empty($page['benefittitle1'])): ?>
          <h2 class="benefit__title">
            <?php print render($page['benefittitle1']); ?>
          </h2>
        <?php endif; ?>
        <?php if (!empty($page['benefittext1'])): ?>
          <div class="benefit__text">
            <?php print render($page['benefittext1']); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="benefit">
        <img src="<?php print base_path() . path_to_theme(); ?>/images/benefit-image2.svg" class="benefit__image"
          alt="Диалоговое окно со звездой внутри" />
        <?php if (!empty($page['benefittitle2'])): ?>
          <h2 class="benefit__title">
            <?php print render($page['benefittitle2']); ?>
          </h2>
        <?php endif; ?>
        <?php if (!empty($page['benefittext2'])): ?>
          <div class="benefit__text">
            <?php print render($page['benefittext2']); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="benefit">
        <img src="<?php print base_path() . path_to_theme(); ?>/images/benefit-image3.svg" class="benefit__image"
          alt="Строитель в каске" />
        <?php if (!empty($page['benefittitle3'])): ?>
          <h2 class="benefit__title">
            <?php print render($page['benefittitle3']); ?>
          </h2>
        <?php endif; ?>
        <?php if (!empty($page['benefittext3'])): ?>
          <div class="benefit__text">
            <?php print render($page['benefittext3']); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="benefit">
        <img src="<?php print base_path() . path_to_theme(); ?>/images/benefit-image4.svg" class="benefit__image"
          alt="Шестеренка со значком напряжения внутри" />
        <?php if (!empty($page['benefittitle4'])): ?>
          <h2 class="benefit__title">
            <?php print render($page['benefittitle4']); ?>
          </h2>
        <?php endif; ?>
        <?php if (!empty($page['benefittext4'])): ?>
          <div class="benefit__text">
            <?php print render($page['benefittext4']); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>