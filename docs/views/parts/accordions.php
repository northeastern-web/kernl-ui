<?php
include 'docs/views/partials/_accordions.php';
// $id, $variant, $section_class, $acc_class
$bg_param = (isset($_GET['bg']) ? $_GET['bg'] : null);
?>

<!-- start base accordion -->
<?php // <?= accordion(0, 'Base', $bg_param ? 'bg-' . $bg_param : '', ''); ?>

<section class="section">
  <div class="row">
    <div class="col mx-auto pb-1">
      <header class="k_section__header">Base Accordion</header>
      <div class="accordion">
        <a id="toggle_0_1" href="#accordion_0_1" class="accordion_link" data-toggle data-swap-options='{"collapse":true}' role="tab" data-swap-group="accordiongroup_0">Dolor Fermentum</a>
        <div id="accordion_0_1" class="accordion_body" role="tabpanel" aria-hidden="true" aria-labelledby="toggle_0_1">
          <h3>Content 1</h3>
          <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="accordion">
        <a id="toggle_0_2" href="#accordion_0_2" class="accordion_link" data-toggle data-swap-options='{"collapse":true}' role="tab" data-swap-group="accordiongroup_0">Dolor Fermentum</a>
        <div id="accordion_0_2" class="accordion_body" role="tabpanel" aria-hidden="true" aria-labelledby="toggle_0_2">
          <h3>Content 2</h3>
          <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
  </div>
</section>
