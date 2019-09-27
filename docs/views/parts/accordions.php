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
      <header class="k_section__header">Based Accordion</header>
      <div class="accordion">
        <a id="toggle_0_1" href="#" data-swap-target="#accordion_0_1" class="accordion_link" data-toggle data-swap-options='{"collapse":true}' role="tab" data-swap-group="accordiongroup_0">Dolor Fermentum</a>
        <div id="accordion_0_1" class="accordion_body" role="tabpanel" aria-hidden="true" aria-labelledby="toggle_0_1">
          <h3>Content 1</h3>
          <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="accordion">
        <a id="toggle_0_2" href="#" data-swap-target="#accordion_0_2" class="accordion_link" data-toggle data-swap-options='{"collapse":true}' role="tab" data-swap-group="accordiongroup_0">Sed posuere</a>
        <div id="accordion_0_2" class="accordion_body" role="tabpanel" aria-hidden="true" aria-labelledby="toggle_0_2">
          <h3>Content 2</h3>
          <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="accordion">
        <a id="toggle_0_3" href="#" data-swap-target="#accordion_0_3" class="accordion_link" data-toggle data-swap-options='{"collapse":true}' role="tab" data-swap-group="accordiongroup_0">Integer posuere</a>
        <div id="accordion_0_3" class="accordion_body" role="tabpanel" aria-hidden="true" aria-labelledby="toggle_0_3">
          <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    </div>
  </div>
</section>
