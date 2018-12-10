<?php include 'docs/views/partials/_masthead-ul.php'; ?>

<section class="section k_bg-light">
  <header class="k_section__header">Masthead</header>
</section>

<!-- start base masthead -->
<?= masthead(0, 'bg--black', ''); ?>


<!-- Fixed background  masthead -->
<section class="section k_bg-light">
  <header class="k_section__header">Fixed Background Example</header>
</section>

<!-- start fixed masthead -->
<?= masthead(1, '', 'bg--fixed'); ?>


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

<?= masthead(3, '--overlay', 'bg--fixed'); ?>


<!-- masthead with border-bottom nav -->
<section class="section k_bg-light">
  <header class="k_section__header">Masthead, Bottom-Bordered Selection</header>
</section>

<?= masthead(4, '+border', ''); ?>


<!-- masthead with megamenu nav -->
<section class="section k_bg-light">
  <header class="k_section__header">Masthead, Megamenu</header>
</section>

<header class="masthead --megamenu +chevron +utility bg--black">
  <a class="__logo" href="<?= $url; ?>">
    <img class="__logo__image" alt="Logo" src="<?= $url; ?>/docs/images/logo-white.png">
  </a>
  <button class="__toggler hidden--up@d id="toggle_5"><i data-feather="menu"></i></button>
  <nav class="__drawer" id="drawer_5" role="navigation">
    <div class="w--100 d--flex justify--between hidden--up@d">
      <a data-ga-click="" class="__logo" href="<?= $url; ?>">
        <img class="__logo__image" alt="Logo" src="<?= $url; ?>/docs/images/logo-white.png">
      </a>
      <button class="__toggler menu-is-open"><i data-feather="x"></i></button>
    </div>

    <ul class="__list">
      <li class="__item +children">
        <a class="__link" href="<?= $url; ?>">Lorem Ipsum</a>
        <ul class="__submenu">
          <li class="col w--1/4@d">
            <a class="__link --heading" href="<?= $url; ?>">Malesuada Bibendum</a>
            <ul>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            </ul>
          </li>
          <li class="col w--1/4@d">
            <a class="__link --heading" href="<?= $url; ?>">Tortor Fusce</a>
            <ul>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            </ul>
          </li>
          <li class="col w--1/4@d">
            <a class="__link --heading" href="<?= $url; ?>">Quam Vulputate Nibh</a>
            <ul>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            </ul>
          </li>
          <li class="col w--1/4@d --feature">
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
          <li class="col w--1/4@d">
            <a class="__link --heading" href="<?= $url; ?>">Tortor Fusce</a>
            <ul>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            </ul>
          </li>
          <li class="col w--1/4@d">
            <a class="__link --heading" href="<?= $url; ?>">Quam Vulputate Nibh</a>
            <ul>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
            </ul>
          </li>
          <li class="col w--1/4@d">
            <a class="__link --heading" href="<?= $url; ?>">Malesuada Bibendum</a>
            <ul>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            </ul>
          </li>
          <li class="col w--1/4@d --feature">
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
          <li class="col w--1/4@d">
            <a class="__link --heading" href="<?= $url; ?>">Quam Vulputate Nibh</a>
            <ul>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            </ul>
          </li>
          <li class="col w--1/4@d">
            <a class="__link --heading" href="<?= $url; ?>">Malesuada Bibendum</a>
            <ul>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            </ul>
          </li>
          <li class="col w--1/4@d">
            <a class="__link --heading" href="<?= $url; ?>">Tortor Fusce</a>
            <ul>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            </ul>
          </li>
          <li class="col w--1/4@d --feature">
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
          <li class="col w--1/4@d">
            <a class="__link --heading" href="<?= $url; ?>">Malesuada Bibendum</a>
            <ul>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            </ul>
          </li>
          <li class="col w--1/4@d">
            <a class="__link --heading" href="<?= $url; ?>">Quam Vulputate Nibh</a>
            <ul>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Tortor Fusce</a></li>
            </ul>
          </li>
          <li class="col w--1/4@d">
            <a class="__link --heading" href="<?= $url; ?>">Mollis Elit</a>
            <ul>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Bibendum Mattis Dapibus</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Quam Vulputate Nibh</a></li>
              <li class="__item"><a class="__link" href="<?= $url; ?>">Malesuada Bibendum</a></li>
            </ul>
          </li>
          <li class="col w--1/4@d --feature">
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
        <a class="__link" href="#" data-toggle="modal" data-target="#modal_search"><i data-feather="search"></i></a>
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
<div class="section bg--img --hero --center">
  <div class="__header">
    <h2 class="__title py--5@xs">{ <i>Example Hero</i> }</h2>
  </div>
</div>
      <?php include 'docs/views/partials/_modal-search.php'; ?>
