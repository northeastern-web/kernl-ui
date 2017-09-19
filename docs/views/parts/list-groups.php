
<?php include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_list-groups.php'; ?>

<section class="section">
  <header class="k_section__header">Base Style</header>
  <?= listgroup(''); ?>
</section>


<!-- Outline -->

<section class="section">
  <header class="k_section__header">Outline Style</header>
  <?= listgroup(' +outline'); ?>
</section>


<!-- Shadow -->

<section class="section">
  <header class="k_section__header">Shadow Style</header>
  <?= listgroup(' +shadow'); ?>
</section>


<!-- White on Light -->

<section class="section k_bg-light">
  <header class="k_section__header">White on Light</header>
  <?= listgroup(' --white +outline'); ?>
</section>


<!-- Base on Dark -->

<section class="section k_bg-dark">
  <header class="k_section__header">Base on Dark</header>
  <?= listgroup(' --on-dark'); ?>
</section>


<!-- Outline on Dark -->

<section class="section k_bg-dark">
  <header class="k_section__header">Outline on Dark</header>
  <?= listgroup(' --on-dark +outline'); ?>
</section>


<!-- Dark on Dark -->

<section class="section k_bg-dark">
  <header class="k_section__header">Dark on Dark</header>
  <?= listgroup(' --on-dark --dark'); ?>
</section>



<!-- Striped on Light -->

<section class="section k_bg-light">
  <header class="k_section__header">Striped on Light</header>
  <?= listgroup(' --striped'); ?>
</section>


<!-- Striped on Dark -->

<section class="section k_bg-dark">
  <header class="k_section__header">Striped on Dark</header>
  <?= listgroup(' --on-dark --striped'); ?>
</section>
