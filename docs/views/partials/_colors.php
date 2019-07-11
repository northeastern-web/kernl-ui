<?php
function colorPalette($color, $colorName)
{
    echo '
  <div class="row">
    <div class="col">
      <div class="k_color bg-' . $color . ' py-2">
        <h4>' . $colorName . ' Background</h4>
        <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        <a class="btn bg-white --sm br--pill mr-0h" href="#">More</a> <a class="btn bg-white --sm br--pill" href="#">Less</a>
      </div>

      <!--
      <div class="bg-' . $color . '">
        <a class="__link d--block pa-1" href="#">
          Component <b>Hover State</b> Demo
        </a>
      </div>
      -->

    </div>
    <div class="col w-1/2@t">
      <div class="k_color tc-' . $color . ' pa-0">
        <h5>' . $colorName . ' Foreground</h5>
        <p class="fs-sm mb-2">Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        <a class="btn bg-' . $color . ' --' . $color . ' --sm br--pill mr-0h" href="#">More</a> <a class="btn bc-' . $color . ' --' . $color . ' --outline --sm br--pill" href="#">Less</a>
      </div>
    </div>
    <div class="col w-1/2@t">
      <div class="k_color bc-' . $color . '">
        <h5>' . $colorName . ' Border</h5>
        <p class="fs-sm">Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
        <a class="btn bg-' . $color . ' --xs --' . $color . ' br--pill mr-0h" href="#">More</a> <a class="btn bc-' . $color . ' --xs --' . $color . ' --outline br--pill" href="#">Less</a>
      </div>
    </div>
  </div>
  ';
}
