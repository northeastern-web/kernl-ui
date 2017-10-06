<?php
$url = "{$_SERVER['REQUEST_URI']}";
include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_masthead-ul.php';
?>

<section class="section k_bg-light">
  <header class="k_section__header">Masthead</header>
</section>

<!-- start base masthead -->
<?= masthead(0, '', ''); ?>


<!-- Fixed background  masthead -->
<section class="section k_bg-light">
  <header class="k_section__header">Fixed Background Example</header>
</section>

<!-- start fixed masthead -->
<?= masthead(1, '', '--fixed'); ?>


<!-- Image background overlay masthead -->
<section class="section k_bg-light">
  <header class="k_section__header">Image Background Overlay</header>
</section>

<!-- end background-image-overlay masthead -->
<?= masthead(2, '--overlay', ''); ?>


<!-- Fixed image background overlay masthead -->
<section class="section k_bg-light">
  <header class="k_section__header">Overlay Fixed Background</header>
</section>

<?= masthead(3, '--overlay', '--fixed'); ?>


<!-- masthead with border-bottom nav -->
<section class="section k_bg-light">
  <header class="k_section__header">Masthead, Bottom-Bordered Selection</header>
</section>

<?= masthead(4, '+border', ''); ?>


<!-- masthead with border-bottom nav -->
<section class="section k_bg-light">
  <header class="k_section__header">Masthead, Mega-Menu</header>
</section>

<header class="masthead --megamenu +utility">
  <a class="__logo" href="<?= $url; ?>">
    <img class="__logo__image" alt="Logo" src="/src/images/logo.png">
  </a>
<button class="__toggler hidden--up@lg id="toggle_5"><i data-feather="menu"></i></button>
<nav class="__drawer" id="drawer_5" role="navigation">
  <div class="clearfix hidden--up@lg">
    <a data-ga-click="" class="__logo" href="<?= $url; ?>">
      <img class="__logo__image" alt="Logo" src="/src/images/logo-white.png">
    </a>
    <button class="__toggler menu-is-open"><i data-feather="x"></i></button>
  </div>

  <ul class="__list">
    <li class="__item +children">
      <a class="__link" href="<?= $url; ?>">Lorem Ipsum</a>
      <ul class="__submenu">
        <li class="col --12@xs --3@lg">
          <a class="__link --heading" href="<?= $url; ?>">Malesuada Bibendum</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg">
          <a class="__link --heading" href="<?= $url; ?>">Tortor Fusce</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg">
          <a class="__link --heading" href="<?= $url; ?>">Quam Vulputate Nibh</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg bg--blue-dark text--gray-100 --feature">
          <a class="__link --heading" href="<?= $url; ?>">Bibendum Mattis Dapibus</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Vulputate Nibh Quam</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="__item +children">
      <a class="__link" href="<?= $url; ?>">Bibendum</a>
      <ul class="__submenu">
        <li class="col --12@xs --3@lg">
          <a class="__link --heading" href="<?= $url; ?>">Tortor Fusce</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg">
          <a class="__link --heading" href="<?= $url; ?>">Quam Vulputate Nibh</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg">
          <a class="__link --heading" href="<?= $url; ?>">Malesuada Bibendum</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg bg--blue-dark text--gray-100 --feature">
          <a class="__link --heading" href="<?= $url; ?>">Purus Magna Pellentesque</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Vulputate Nibh Quam</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="__item +children">
      <a class="__link" href="<?= $url; ?>">Pudgi Homunculi</a>
      <ul class="__submenu">
        <li class="col --12@xs --3@lg">
          <a class="__link --heading" href="<?= $url; ?>">Quam Vulputate Nibh</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg">
          <a class="__link --heading" href="<?= $url; ?>">Malesuada Bibendum</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg">
          <a class="__link --heading" href="<?= $url; ?>">Tortor Fusce</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg bg--blue-dark text--gray-100 --feature">
          <a class="__link --heading" href="<?= $url; ?>">Vulputate Nibh Quam</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="__item +children">
      <a class="__link" href="<?= $url; ?>">Malesuada Nucleus</a>
      <ul class="__submenu">
        <li class="col --12@xs --3@lg">
          <a class="__link --heading" href="<?= $url; ?>">Malesuada Bibendum</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg">
          <a class="__link --heading" href="<?= $url; ?>">Quam Vulputate Nibh</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg">
          <a class="__link --heading" href="<?= $url; ?>">Tortor Fusce</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg bg--blue-dark text--gray-100 --feature">
          <a class="__link --heading" href="<?= $url; ?>">Dapibus Ornare Tellus</a>
          <ul>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Vulputate Nibh Quam</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="__item +icon">
      <a class="__link" href="<?= $url; ?>"><i data-feather="search"></i></a>
    </li>
  </ul>

  <ul class="__list --utility">
    <li class="__item">
      <a class="__link" href="<?= $url; ?>">About</a>
    </li>
    <li class="__item">
      <a class="__link" href="<?= $url; ?>">Forms</a>
    </li>
    <li class="__item">
      <a class="__link" href="<?= $url; ?>">Faculty &amp; Staff</a>
    </li>
  </ul>
</nav>

</header>
<!-- end mega-menu masthead -->
<div class="section --banner +bgimg +large --middle ta--c">
  <h2 class="banner__title py--5@xs">{ <i>Example Hero</i> }</h2>
</div>
