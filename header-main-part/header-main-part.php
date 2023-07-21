<div class="header__main-part">
  <div class="header__logo-section">
    <p class="header__main-logo">LOGOTYPE</p>
    <p class="header__under-logo">ЭЛЕКТРОМОНТАЖНЫЕ РАБОТЫ</p>
  </div>
  <nav class="header__navigation">
    <ul class="header__navigation-section">
      <li class="header__navigation-part">
        <?php if (!empty($page['navigationlink1'])): ?>
          <div class="header__navigation-link">
            <?php print render($page['navigationlink1']); ?>
          </div>
        <?php endif; ?>
      </li>
      <li class="header__navigation-part">
        <?php if (!empty($page['navigationlink2'])): ?>
          <div class="header__navigation-link">
            <?php print render($page['navigationlink2']); ?>
          </div>
        <?php endif; ?>
      </li>
      <li class="header__navigation-part">
        <?php if (!empty($page['navigationlink3'])): ?>
          <div class="header__navigation-link">
            <?php print render($page['navigationlink3']); ?>
          </div>
        <?php endif; ?>
      </li>
    </ul>
  </nav>
  <button class="header__main-part-button">Обратный звонок</button>
</div>