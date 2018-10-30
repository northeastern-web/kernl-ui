<?php
// $color, $colorName, $contrastRatio
$colors = [
  ['black','Black'],
  ['red','Red'],
  ['gold','Gold'],
  ['orange','Orange'],
  ['yellow','Yellow'],
  ['green','Green'],
  ['teal','Teal'],
  ['blue-light','Light Blue'],
  ['blue','Blue'],
  ['blue-dark','Dark Blue'],
  ['purple','Purple'],
  ['beige','Beige'],
  ['white','White']
];

include 'docs/views/partials/_colors.php';

$i = 0;
$j = 0;
$k = 0;
$l = 0;
?>


<section class="section">
  <header class="k_section__header">Color Palette</header>

  <h3 class="fs--sm tt--caps fw--300">Primary Palette</h3>
  <p class="fs--sm">Black, white, red, and gold are our primary colors.</p>
  <div class="row color-cell">
    <div class="col w--1/4@t">
      <div class="bg--black">Black<br><span class="hex-color">#000000</span></div>
    </div>
    <div class="col w--1/4@t">
      <div class="bg--white bc--gray-200">White<br><span class="hex-color">#ffffff</span></div>
    </div>
    <div class="col w--1/4@t">
      <div class="bg--red">Red<br><span class="hex-color">#d41b2c</span></div>
    </div>
    <div class="col w--1/4@t">
      <div class="bg--gold">Gold<br><span class="hex-color">#a4804a</span></div>
    </div>
  </div>

  <h3 class="fs--root tt--caps fw--300">Secondary Palette</h3>
  <p class="fs--sm">Secondary colors range from neutral to vibrant. Use them to create different moods.</p>
  <div class="row color-cell">
    <div class="col w--1/3@t w--1/6@w">
      <div class="bg--beige">Beige<br><span class="hex-color">#e5d4ab</span></div>
    </div>
    <div class="col w--1/3@t w--1/6@w">
      <div class="bg--gray-cool">Cool Gray<br><span class="hex-color">#99a3b0</span></div>
    </div>
    <div class="col w--1/3@t w--1/6@w">
      <div class="bg--gray-warm-light">Light Warm Gray<br><span class="hex-color">#cfc7bf</span></div>
    </div>
    <div class="col w--1/3@t w--1/6@w">
      <div class="bg--gray-warm">Warm Gray<br><span class="hex-color">#a19994</span></div>
    </div>
    <div class="col w--1/3@t w--1/6@w">
      <div class="bg--blue-dark">Dark Blue<br><span class="hex-color">#385775</span></div>
    </div>
    <div class="col w--1/3@t w--1/6@w">
      <div class="bg--blue">Blue<br><span class="hex-color">#006eb5</span></div>
    </div>
    <div class="col w--1/3@t w--1/6@w">
      <div class="bg--blue-light">Light Blue<br><span class="hex-color">#52cfe5</span></div>
    </div>
    <div class="col w--1/3@t w--1/6@w">
      <div class="bg--teal">Teal<br><span class="hex-color">#00cfb5</span></div>
    </div>
    <div class="col w--1/3@t w--1/6@w">
      <div class="bg--green">Green<br><span class="hex-color">#badb00</span></div>
    </div>
    <div class="col w--1/3@t w--1/6@w">
      <div class="bg--yellow">Yellow<br><span class="hex-color">#ffbf3d</span></div>
    </div>
    <div class="col w--1/3@t w--1/6@w">
      <div class="bg--orange">Orange<br><span class="hex-color">#ff854f</span></div>
    </div>
    <div class="col w--1/3@t w--1/6@w">
      <div class="bg--purple">Purple<br><span class="hex-color">#824091</span></div>
    </div>
  </div>

  <h3 class="fs--root tt--caps fw--300">Neutral Grays</h3>
  <div class="row color-cell">
    <div class="col w--20@t w--10@w col--stretch">
      <div class="bg--gray-50">Gray 50<br><span class="hex-color">#f7f7f7</span></div>
    </div>
    <div class="col w--20@t w--10@w col--stretch">
      <div class="bg--gray-100">Gray 100<br><span class="hex-color">#efefef</span></div>
    </div>
    <div class="col w--20@t w--10@w col--stretch">
      <div class="bg--gray-200">Gray 200<br><span class="hex-color">#d0d0d0</span></div>
    </div>
    <div class="col w--20@t w--10@w col--stretch">
      <div class="bg--gray-300">Gray 300<br><span class="hex-color">#b5b5b5</span></div>
    </div>
    <div class="col w--20@t w--10@w col--stretch">
      <div class="bg--gray-400">Gray, Gray 400<br><span class="hex-color">#979797</span></div>
    </div>
    <div class="col w--20@t w--10@w col--stretch">
      <div class="bg--gray-500">Gray 500<br><span class="hex-color">#777777</span></div>
    </div>
    <div class="col w--20@t w--10@w col--stretch">
      <div class="bg--gray-600">Gray 600<br><span class="hex-color">#666666</span></div>
    </div>
    <div class="col w--20@t w--10@w col--stretch">
      <div class="bg--gray-700">Gray 700<br><span class="hex-color">#5c5c5c</span></div>
    </div>
    <div class="col w--20@t w--10@w col--stretch">
      <div class="bg--gray-800">Gray 800<br><span class="hex-color">#333333</span></div>
    </div>
    <div class="col w--20@t w--10@w col--stretch">
      <div class="bg--gray-900">Gray 900<br><span class="hex-color">#1a1a1a</span></div>
    </div>
  </div>

  <!-- <div class="row">
    <div class="col --12@xs">
      <small>* Created by PODS to augment the 2017 NU brand colors.</small><br>
      <small>** Very slightly modified by PODS from the 2017 NU brand colors.</small>
    </div>
  </div> -->
</section>

<section class="section mb--2 mb--3@t">
  <header class="k_section__header">Palette Generator/Color Combination Tool</header>
  <div class="row">
    <div class="col w--1/2@t">
      <nav class="nav --tabbed k_color-nav">
        <ul class="__list" role="tablist">
          <?php foreach ($colors as $color) : ?>
            <li class="__item">
              <a class="__link<?= $i == 0 ? ' --active' : ''; ?> bg--<?= $color[0]; ?>" data-toggle="tab" data-swap-group="color_group_a" href="#tab_<?= $color[0]; ?>_1" role="tab" aria-expanded="<?= $i == 0 ? 'true' : 'false'; ?>"><?= $color[1]; ?></a>
            </li>
          <?php $i++; endforeach; ?>
        </ul>
      </nav>
      <div class="nav__content">
        <?php foreach ($colors as $color) : ?>
        <div class="hidden pt--1<?= $j == 0 ? ' --active' :  ''; ?>" id="tab_<?= $color[0]; ?>_1" role="tabpanel">
            <?= colorPalette($color[0], $color[1]); ?>
        </div>
        <?php $j++; endforeach; ?>
      </div>
    </div>

    <div class="col w--1/2@t">
      <nav class="nav --tabbed k_color-nav">
        <ul class="__list" role="tablist">
          <?php foreach ($colors as $color) : ?>
            <li class="__item">
              <a class="__link<?= $k == 1 ? ' --active' : ''; ?> bg--<?= $color[0]; ?>" data-toggle="tab" data-swap-group="color_group_b" href="#tab_<?= $color[0]; ?>_2" role="tab" aria-expanded="<?= $k == 1 ? 'true' : 'false'; ?>"><?= $color[1]; ?></a>
            </li>
          <?php $k++; endforeach; ?>
        </ul>
      </nav>
      <div class="nav__content">
        <?php foreach ($colors as $color) : ?>
          <div class="hidden pt--1<?= $l == 1 ? ' --active' :  ''; ?>" id="tab_<?= $color[0]; ?>_2" role="tabpanel">
              <?= colorPalette($color[0], $color[1]); ?>
          </div>
        <?php $l++; endforeach; ?>
      </div>
    </div>
  </div>
</section>
