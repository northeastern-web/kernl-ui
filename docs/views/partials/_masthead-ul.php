<?php

/*
 * int $id                id of instance
 * str $masthead_classes  css classes assigned to masthead 
 * str $banner_classes    css classes assigned to banner
 */

function masthead($id, $masthead_classes, $banner_classes) {
  ($masthead_classes == '--overlay') ? $logo = "-white" : $logo = "";
  $url = "{$_SERVER['REQUEST_URI']}";

  echo '
<header class="masthead ' . $masthead_classes . '">
  <a class="__logo" href="' . $url . '">
    <img class="__logo__image" alt="Logo" src="/src/images/logo' . $logo . '.png">
  </a>
  <button class="__toggler hidden--up@lg" id="toggle_' . $id . '"><i data-feather="menu"></i></button>
  <nav class="__drawer" id="drawer_' . $id . '" role="navigation">
    <div class="hidden--up@lg">
      <a class="__logo" href="' . $url .'">
        <img class="__logo__image" alt="Logo" src="/src/images/logo-white.png">
      </a>
      <button class="__toggler menu-is-open"><i data-feather="x"></i></button>
    </div>

    <ul class="__list">
      <li class="__item active">
        <a class="__link" href="' . $url .'">Lorem Ipsum</a>
      </li>
      <li class="__item +children">
        <a class="__link" href="' . $url .'">Bibendum</a>
        <ul class="__submenu">
          <li class="__item"><a class="__link" href="' . $url .'">Quam Vulputate Nibh</a></li>
          <li class="__item"><a class="__link" href="' . $url .'">Tortor Fusce</a></li>
        </ul>
      </li>
      <li class="__item +children">
        <a class="__link" href="' . $url .'">Pudgi Homunculi</a>
        <ul class="__submenu">
          <li class="__item"><a class="__link" href="' . $url .'">Malesuada Bibendum</a></li>
          <li class="__item"><a class="__link" href="' . $url .'">Bibendum Mattis Dapibus</a></li>
          <li class="__item"><a class="__link" href="' . $url .'">Venenatis Pharetra Sit Dolor</a></li>
        </ul>
      </li>
      <li class="__item">
        <a class="__link" href="' . $url .'">Malesuada Nucleus</a>
      </li>
    </ul>

    <ul class="__list --utility">
      <li class="__item">
        <a class="__link" href="#">About</a>
      </li>
      <li class="__item">
        <a class="__link" href="#">Forms</a>
      </li>
      <li class="__item">
        <a class="__link" href="#">Faculty &amp; Staff</a>
      </li>
    </ul>
  </nav>
</header>
<div class="section --banner --middle +bgimg ta--c ' . $banner_classes . '">
  <h2 class="banner__title py--5@xs">{ <i>Example Hero</i> }</h2>
</div>';
}
?>
