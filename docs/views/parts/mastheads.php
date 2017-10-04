<section class="section k_bg-light">
  <header class="k_section__header">Masthead</header>
</section>

<!-- start base masthead -->
<header class="masthead">
  <a class="__logo" href="/">
    <img class="__logo__image" alt="Logo" src="/src/images/logo.png">
  </a>
  <?php include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_masthead-ul.php'; ?>
</header>
<!-- end base masthead -->
<div class="section --banner --middle +bgimg ta--c">
  <h2 class="banner__title py--5@xs">{ <i>Example Hero</i> }</h2>
</div>


<!-- Fixed background  masthead -->
<section class="section k_bg-light">
  <header class="k_section__header">Fixed Background Example</header>
</section>

<!-- start base masthead -->
<header class="masthead">
  <a class="__logo" href="/">
    <img class="__logo__image" alt="Logo" src="/src/images/logo.png">
  </a>
  <?php include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_masthead-ul.php'; ?>
</header>
<!-- end base masthead -->
<div class="section --banner --fixed --middle +bgimg ta--c">
  <h2 class="banner__title py--5@xs">{ <i>Example Hero</i> }</h2>
</div>


<!-- Image background overlay masthead -->
<section class="section k_bg-light">
  <header class="k_section__header">Image Background Overlay</header>
</section>

<!-- end background-image-overlay masthead -->
<header class="masthead --overlay">
  <a class="__logo" href="/">
    <img class="__logo__image" alt="Logo" src="/src/images/logo-white.png">
  </a>
  <?php include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_masthead-ul.php'; ?>
</header>
<!-- end base masthead -->
<div class="section --banner --middle +bgimg ta--c">
  <h2 class="banner__title py--5@xs">{ <i>Example Hero</i> }</h2>
</div>


<!-- Fixed image background overlay masthead -->
<section class="section k_bg-light">
  <header class="k_section__header">Overlay Fixed Background</header>
</section>

<!-- end background-image-overlay masthead -->
<header class="masthead --overlay">
  <a class="__logo" href="/">
    <img class="__logo__image" alt="Logo" src="/src/images/logo-white.png">
  </a>
  <?php include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_masthead-ul.php'; ?>
</header>
<!-- end base masthead -->
<div class="section --banner --fixed --middle +bgimg ta--c">
  <h2 class="banner__title py--5@xs">{ <i>Example Hero</i> }</h2>
</div>


<!-- masthead with border-bottom nav -->
<section class="section k_bg-light">
  <header class="k_section__header">Masthead, Bottom-Bordered Selection</header>
</section>

<header class="masthead +border">
  <a class="__logo" href="/">
    <img class="__logo__image" alt="Logo" src="/src/images/logo.png">
  </a>
  <?php include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_masthead-ul.php'; ?>
</header>
<!-- end border-bottom masthead -->
<div class="section --banner +bgimg +large --middle ta--c">
  <h2 class="banner__title py--5@xs">{ <i>Example Hero</i> }</h2>
</div>


<!-- masthead with border-bottom nav -->
<section class="section k_bg-light">
  <header class="k_section__header">Masthead, Mega-Menu</header>
</section>

<header class="masthead +megamenu">
  <a class="__logo" href="/">
    <img class="__logo__image" alt="Logo" src="/src/images/logo.png">
  </a>
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
        <li class="col --12@xs --3@lg">
          <ul class="">
            <li class="__item"><a class="__link --heading" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg">
          <ul class="">
            <li class="__item"><a class="__link --heading" href="<?= $url; ?>">Tortor Fusce</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg">
          <ul class="">
            <li class="__item"><a class="__link --heading" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
          </ul>
        </li>
        <li class="col --12@xs --3@lg">
          <ul class="bg--blue-dark text--gray-100">
            <li class="__item"><a class="__link --heading" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
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

</header>
<!-- end mega-menu masthead -->
<div class="section --banner +bgimg +large --middle ta--c">
  <h2 class="banner__title py--5@xs">{ <i>Example Hero</i> }</h2>
</div>
