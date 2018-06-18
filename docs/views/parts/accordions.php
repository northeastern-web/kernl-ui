<?php
include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_accordions.php';
// $id, $variant, $section_class, $acc_class
$bg_param = (isset($_GET['bg']) ? $_GET['bg'] : null);

?>

<div class="section measure mx--auto">
  <!-- start base accordion -->
  <?= accordion(0, 'Base', $bg_param ? 'bg--' . $bg_param : '', ''); ?>

  <!-- start white accordion -->
  <?= accordion(1, 'White', $bg_param ? 'bg--' . $bg_param : 'k_bg-light', '--white'); ?>

  <!-- start dark accordion -->
  <?= accordion(2, 'Dark', $bg_param ? 'bg--' . $bg_param : 'k_bg-dark', '--dark'); ?>

  <!-- start spaced accordion -->
  <?= accordion(3, 'Space on', $bg_param ? 'bg--' . $bg_param : '', '+space'); ?>

  <!-- start spaced white accordion -->
  <?= accordion(4, 'White with Space on', $bg_param ? 'bg--' . $bg_param : 'k_bg-light', '--white +space'); ?>

  <!-- start spaced white accordion -->
  <?= accordion(5, 'White with Space and Shadow on', $bg_param ? 'bg--' . $bg_param : '', '--white +space +shadow'); ?>
</div>
