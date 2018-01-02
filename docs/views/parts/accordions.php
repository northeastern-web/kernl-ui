<?php
include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_accordions.php';
// $id, $variant, $section_class, $acc_class
?>


<!-- start base accordion -->
<?= accordion(0, 'Base', '', ''); ?>

<!-- start white accordion -->
<?= accordion(1, 'White', 'k_bg-light', '--white'); ?>

<!-- start dark accordion -->
<?= accordion(2, 'Dark', 'k_bg-dark', '--dark'); ?>

<!-- start spaced accordion -->
<?= accordion(3, 'Space on', '', '+space'); ?>

<!-- start spaced white accordion -->
<?= accordion(4, 'White with Space on', 'k_bg-light', '--white +space'); ?>

<!-- start spaced white accordion -->
<?= accordion(5, 'White with Space and Shadow on', '', '--white +space +shadow'); ?>
