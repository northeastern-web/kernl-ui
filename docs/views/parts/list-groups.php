<?php include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_list-groups.php'; ?>

<section class="section">
  <header class="k_section__header">Base Style</header>
  <div class="row">
    <div class="col w--1/4">
      <?= listgroup(''); ?>
    </div>
    <div class="col w--1/4">
      <?= listgroup('--indent fs--sm'); ?>
    </div>
    <div class="col w--1/4">
      <?= listgroup('fs--xs +icon'); ?>
    </div>
    <div class="col w--1/4">
      <?= listgroup('fs--d1'); ?>
    </div>
  </div>
</section>

<section class="section">
    <header class="k_section__header">Outline Style</header>
    <div class="row">
      <div class="col w--1/4">
        <?= listgroup('--outline +icon'); ?>
      </div>
      <div class="col w--1/4">
        <?= listgroup('--outline +icon fs--sm'); ?>
      </div>
      <div class="col w--1/4">
        <?= listgroup('--outline fs--xs'); ?>
      </div>
      <div class="col w--1/4">
        <?= listgroup('--outline fs--d1'); ?>
      </div>
    </div>
</section>

<section class="section">
  <header class="k_section__header">Striped Style</header>
  <div class="row">
    <div class="col w--1/4">
      <?= listgroup('--striped '); ?>
    </div>
    <div class="col w--1/4">
      <?= listgroup('--striped +icon fs--sm'); ?>
    </div>
    <div class="col w--1/4">
      <?= listgroup('--striped fs--xs'); ?>
    </div>
    <div class="col w--1/4">
      <?= listgroup('--striped fs--d1'); ?>
    </div>
  </div>
</section>

<section class="section">
  <header class="k_section__header">Excerpt</header>
  <div class="row">
    <div class="col w--3/4">
      <?= listgroup('', 'excerpt'); ?>
    </div>
  </div>
</section>
