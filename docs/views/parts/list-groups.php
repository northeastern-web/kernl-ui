<?php include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_list-groups.php'; ?>

<section>
  <div class="section measure mx--auto">
    <header class="k_section__header">Base Style</header>
    <?= listgroup(''); ?>
    <?= listgroup('fs--xs'); ?>
    <?= listgroup('--outline'); ?>
    <?= listgroup('--striped'); ?>
    <?= listgroup('+icon'); ?>
  </div>
</section>
