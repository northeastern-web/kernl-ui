<a class="skip alert" href="#main_content">Skip to main content</a>

<?php if ($part) : ?>

<header class="k_header">

    <a class="k_logo" href="<?= $url; ?>">
      <b>kernl</b>(ui)
    </a>
    <i class="k_nav__separator" data-feather="arrow-right"></i>
    <?= '<span class="text-style-block">' . $part . '</span>'; ?>

    <ul class="ls-inline f-r@t tt-caps fs-xs mb-0" id="contSelect">
      <li><a class="tc-gray-500" id="contain" href="#">Contain</a></li>
      <li><a class="tc-gray-500 --active" id="default" href="#">Default</a></li>
      <li><a class="tc-gray-500" id="full" href="#">Full</a></li>
    </ul>

</header>

<?php endif; ?>
