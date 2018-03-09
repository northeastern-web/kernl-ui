<?php include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_list-groups.php'; ?>

<section>
  <nav class="nav --tabbed">
    <ul class="__list fs--sm nav--fill" role="tablist">
      <li class="__item">
        <a class="__link --active" data-toggle="tab" href="#tab_1" role="tab" aria-expanded="true">Base</a>
      </li>
      <li class="__item">
        <a class="__link" data-toggle="tab" href="#tab_2" role="tab" aria-expanded="false">Base on Dark</a>
      </li>
      <li class="__item">
        <a class="__link" data-toggle="tab" href="#tab_3" role="tab" aria-expanded="false">Outline</a>
      </li>
      <li class="__item">
        <a class="__link" data-toggle="tab" href="#tab_4" role="tab" aria-expanded="false">Outline on Dark</a>
      </li>
      <li class="__item">
        <a class="__link" data-toggle="tab" href="#tab_5" role="tab" aria-expanded="false">Shadow</a>
      </li>
      <li class="__item">
        <a class="__link" data-toggle="tab" href="#tab_6" role="tab" aria-expanded="true">White on Light</a>
      </li>
      <li class="__item">
        <a class="__link" data-toggle="tab" href="#tab_7" role="tab" aria-expanded="true">Dark on Dark</a>
      </li>
      <li class="__item">
        <a class="__link" data-toggle="tab" href="#tab_8" role="tab" aria-expanded="false">Striped on Light</a>
      </li>
      <li class="__item">
        <a class="__link" data-toggle="tab" href="#tab_9" role="tab" aria-expanded="false">Striped on Dark</a>
      </li>
    </ul>
  </nav>

  <div class="hidden section --active" id="tab_1" role="tabpanel">
    <header class="k_section__header">Base Style</header>
    <?= listgroup(''); ?>
  </div>
  <div class="hidden section k_bg-dark" id="tab_2" role="tabpanel">
    <header class="k_section__header">Base on Dark</header>
    <?= listgroup(' --on-dark'); ?>
  </div>
  <div class="hidden section" id="tab_3" role="tabpanel">
    <header class="k_section__header">Outline Style</header>
    <?= listgroup(' +outline'); ?>
  </div>
  <div class="hidden section k_bg-dark" id="tab_4" role="tabpanel">
    <header class="k_section__header">Outline on Dark</header>
    <?= listgroup(' --on-dark +outline'); ?>
  </div>
  <div class="hidden section" id="tab_5" role="tabpanel">
    <header class="k_section__header">Shadow Style</header>
    <?= listgroup(' +shadow'); ?>
  </div>
  <div class="hidden section k_bg-light" id="tab_6" role="tabpanel">
    <header class="k_section__header">White on Light</header>
    <?= listgroup(' --white +outline'); ?>
  </div>
  <div class="hidden section k_bg-dark" id="tab_7" role="tabpanel">
    <header class="k_section__header">Dark on Dark</header>
    <?= listgroup(' --on-dark --dark'); ?>
  </div>
  <div class="hidden section k_bg-light" id="tab_8" role="tabpanel">
    <header class="k_section__header">Striped on Light</header>
    <?= listgroup(' --striped'); ?>
  </div>
  <div class="hidden section k_bg-dark" id="tab_9" role="tabpanel">
    <header class="k_section__header">Striped on Dark</header>
    <?= listgroup(' --on-dark --striped'); ?>
  </div>
</section>