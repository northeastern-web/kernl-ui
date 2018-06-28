<?php
include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_accordions.php';
// $id, $variant, $section_class, $acc_class
$bg_param = (isset($_GET['bg']) ? $_GET['bg'] : null);

?>

<div class="section">
  <!-- start base accordion -->
  <?= accordion(0, 'Base', $bg_param ? 'bg--' . $bg_param : '', ''); ?>

  <!-- start white accordion -->
  <?= accordion(1, 'White', $bg_param ? 'bg--' . $bg_param : 'k_bg-light', '--white'); ?>

  <!-- start dark accordion -->
  <?= accordion(2, 'Dark', $bg_param ? 'bg--' . $bg_param : 'k_bg-dark', '--dark'); ?>

  <!-- start spaced accordion -->
  <?= accordion(3, 'Space on', $bg_param ? 'bg--' . $bg_param : '', '--spaced'); ?>

  <!-- start spaced white accordion -->
  <?= accordion(4, 'White with Space on', $bg_param ? 'bg--' . $bg_param : 'k_bg-light', '--white --spaced'); ?>
</div>
