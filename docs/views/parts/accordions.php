<?php
include 'docs/views/partials/_accordions.php';
// $id, $variant, $section_class, $acc_class
$bg_param = (isset($_GET['bg']) ? $_GET['bg'] : null);
?>

<!-- start base accordion -->
<?= accordion(0, 'Base', $bg_param ? 'bg--' . $bg_param : '', ''); ?>
