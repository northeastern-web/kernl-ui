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
        <div class="accordion_item">
          <a class="accordion_title" href="#"
            data-swap-target="#toggle_a"
            data-swap-group="accordion_1">
              Play me some accordion!
          </a>
          <div class="accordion_content" id="toggle_a" data-swap-active="false">
            <div class="accordion_copy">
              <p>To show an open panel by default, include the class <code>-visible</code> with <code>accordion_title</code>. Omit <code>-visible</code> to load the accordion with all panels closed.</p>
              <p>Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
