<?php include 'docs/views/partials/_list-groups.php'; ?>

<!--
To use an icon in a list group item, be explicit 
about its position by using --left or --right,
and drop the desired icon into the item.
-->
<section class="section">
  <header class="k_section__header">Base Style</header>
  <div class="row">
    <div class="col w-1/4">
      <?= listgroup(''); ?>
    </div>
    <div class="col w-1/4">
      <?= listgroup('--indent fs-sm'); ?>
    </div>
    <div class="col w-1/4">
      <?= listgroup('fs-xs --left'); ?>
    </div>
    <div class="col w-1/4">
      <?= listgroup('fs-d1'); ?>
    </div>
  </div>
</section>

<section class="section">
    <header class="k_section__header">Outline Style</header>
    <div class="row">
      <div class="col w-1/4">
        <?= listgroup('--outline --left'); ?>
      </div>
      <div class="col w-1/4">
        <?= listgroup('--outline --right fs-sm'); ?>
      </div>
      <div class="col w-1/4">
        <?= listgroup('--outline fs-xs'); ?>
      </div>
      <div class="col w-1/4">
        <?= listgroup('--outline fs-d1'); ?>
      </div>
    </div>
</section>

<section class="section">
  <header class="k_section__header">Striped Style</header>
  <div class="row">
    <div class="col w-1/4">
      <?= listgroup('--striped '); ?>
    </div>
    <div class="col w-1/4">
      <?= listgroup('--striped --left fs-sm'); ?>
    </div>
    <div class="col w-1/4">
      <?= listgroup('--striped fs-xs'); ?>
    </div>
    <div class="col w-1/4">
      <?= listgroup('--striped fs-d1'); ?>
    </div>
  </div>
</section>

<section class="section">
  <header class="k_section__header">Excerpt</header>
  <div class="row">
    <div class="col w-3/4">
      <?= listgroup('--indent', 'excerpt'); ?>
    </div>
  </div>
</section>
