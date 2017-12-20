<?php
include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_accordions.php';
// $id, $variant, $section_class, $acc_class
?>


<!-- start base accordion -->
<?= accordion(0, 'Base', '', ''); ?>

<!-- start white accordion -->
<?= accordion(1, 'White', 'k_bg-light', 'bg--white'); ?>

<!-- start dark accordion -->
<?= accordion(2, 'Dark', 'k_bg-dark', 'bg--black'); ?>

<!-- start spaced accordion -->
<?= accordion(3, 'Space on', '', '+space'); ?>

<!-- start spaced white accordion -->
<?= accordion(4, 'White with Space on', 'k_bg-light', 'bg--white +space'); ?>

<!-- start spaced white accordion -->
<?= accordion(5, 'White with Space and Shadow on', '', 'bg--white +space +shadow'); ?>
