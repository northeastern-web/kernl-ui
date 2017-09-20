<?php $url = "{$_SERVER['REQUEST_URI']}";
 ?>
<button class="__toggler hidden--up@lg"><i data-feather="menu"></i></button>
<nav class="__drawer" role="navigation">
  <div class="clearfix hidden--up@lg">
    <a data-ga-click="" class="__logo" href="/">
      <img class="__logo__image" alt="Logo" src="/src/images/logo-white.png">
    </a>
    <button class="__toggler menu-is-open"><i data-feather="x"></i></button>
  </div>

  <ul class="__list">
    <li class="__item active">
      <a class="__link" href="<?= $url; ?>">Lorem Ipsum</a>
    </li>
    <li class="__item +children">
      <a class="__link" href="<?= $url; ?>">Bibendum</a>
      <ul class="__submenu">
        <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
        <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
      </ul>
    </li>
    <li class="__item +children">
      <a class="__link" href="<?= $url; ?>">Pudgi Homunculi</a>
      <ul class="__submenu">
        <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
        <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
        <li class="__item"><a class="__link" href="<?= $url; ?>">Venenatis Pharetra Sit Dolor</a></li>
      </ul>
    </li>
    <li class="__item">
      <a class="__link" href="<?= $url; ?>">Malesuada Nucleus</a>
    </li>
  </ul>
</nav>
