<?php if($part) : ?>

<nav class="k_nav"<?= ($part=='mastheads' || $part=='cards') ? ' style="display:none;"' : ''; ?>>
  <div class="k_nav__list">
    <?php foreach (getKernlFiles() as $file) : ?>
      <a class="k_nav__item <?= ($file == $_GET['part'] ? 'k_nav__item--active' : ''); ?>"
        href="/?part=<?= $file; ?> ">
        <?= $file; ?>
      </a>
    <?php endforeach; ?>
  </div>
</nav>

<?php endif; ?>
