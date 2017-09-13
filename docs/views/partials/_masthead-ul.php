<?php $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
 ?>
<button class="masthead__toggler hidden--up@lg"><i data-feather="menu"></i></button>
<nav class="masthead__drawer" role="navigation">
  <div class="clearfix hidden--up@lg">
    <a data-ga-click="" class="masthead__logo" href="/">
      <img class="masthead__logo__image" alt="Logo" src="/src/images/logo-white.png">
    </a>
    <button class="masthead__toggler menu-is-open"><i data-feather="x"></i></button>
  </div>

  <ul class="masthead__menu__list">
    <li class="menu-item active">
      <a class="menu-link" href="<?= $url; ?>">Lorem Ipsum</a>
    </li>
    <li class="menu-item menu-item-has-children">
      <a class="menu-link" href="<?= $url; ?>">Bibendum</a>
      <ul class="sub-menu">
        <li class="menu-item"><a class="menu-link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
        <li class="menu-item"><a class="menu-link" href="<?= $url; ?>">Tortor Fusce</a></li>
      </ul>
    </li>
    <li class="menu-item menu-item-has-children">
      <a class="menu-link" href="<?= $url; ?>">Pudgi Homunculi</a>
      <ul class="sub-menu">
        <li class="menu-item"><a class="menu-link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
        <li class="menu-item"><a class="menu-link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
        <li class="menu-item"><a class="menu-link" href="<?= $url; ?>">Venenatis Pharetra Sit Dolor</a></li>
      </ul>
    </li>
    <li class="menu-item">
      <a class="menu-link" href="<?= $url; ?>">Malesuada Nucleus</a>
    </li>
  </ul>
</nav>
