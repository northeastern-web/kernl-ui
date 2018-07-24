<?php if ($part) : ?>

<nav class="k_nav" onclick="void(0)">
  <a class="k_logo" href="/">
    <b>kernl</b>(ui)
  </a>
  <div class="k_nav__list">
    <?php foreach (getKernlFiles() as $file) : ?>
      <a class="k_nav__item <?= ($file == $_GET['part'] ? 'k_nav__item--active' : ''); ?>"
        href="<?= $url; ?>/?part=<?= $file; ?> ">
        <?= $file; ?>
      </a>
    <?php endforeach; ?>
  </div>
</nav>

<?php endif; ?>
