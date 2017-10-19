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
<?= accordion(3, 'Spaced', '', '+spacing'); ?>

<!-- start spaced white accordion -->
<?= accordion(4, 'Spaced White', 'k_bg-light', '--white +spacing'); ?>
