<?php
function colorPalette($color, $colorName) {
  echo '
  <div class="row">
    <div class="col">
      <div class="k_color bg--' . $color . ' py--2@xs">
        <h3>' . $colorName . ' Background</h3>
        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        <a class="btn --sm --pill" href="#">More</a> <a class="btn --sm --pill" href="#">Less</a>
      </div>
      <div class="alert --sm bg--' . $color . '">
        <a class="__link" href="#">
          <div class="__body">Component <b>Hover State</b> Demo</div>
        </a>
      </div>
    </div>
    <div class="col --6@md">
      <div class="k_color tc--' . $color . ' pa--0@xs">
        <h5>' . $colorName . ' Foreground</h5>
        <p class="fs--sm mb--2@xs">Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        <a class="btn bg--' . $color . ' --' . $color . ' --sm --pill" href="#">More</a> <a class="btn bc--' . $color . ' --' . $color . ' --outline --sm --pill" href="#">Less</a>
      </div>
    </div>
    <div class="col --6@md">
      <div class="k_color bc--' . $color . '">
        <h5>' . $colorName . ' Border</h5>
        <p class="fs--sm">Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        <a class="btn bg--' . $color . ' --xs --' . $color . ' --pill" href="#">More</a> <a class="btn bc--' . $color . ' --xs --' . $color . ' --outline --pill" href="#">Less</a>
      </div>
    </div>
  </div>
    ';
  }