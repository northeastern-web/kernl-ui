<?php
// $color, $colorName, $contrastRatio
$colors = [
  ['black','Black'],
  ['red','Red'],
  ['orange','Orange'],
  ['yellow','Yellow'],
  ['green','Green'],
  ['green-light','Light Green'],
  ['teal','Teal'],
  ['teal-light','Light Teal'],
  ['blue-dark','Dark Blue'],
  ['blue','Blue'],
  ['blue-light','Light Blue'],
  ['purple','Purple'],
  ['beige','Beige'],
  ['beige-light','Light Beige'],
  ['white','White']
];

include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_colors.php';

$i = 0;
$j = 0;
$k = 0;
$l = 0;
?>

<section class="section mb--2 mb--3@t">
  <header class="k_section__header">Palette Generator/Color Combination Tool</header>
  <div class="row">
    <div class="col w--1/2@t">
      <nav class="nav --tabbed k_color-nav">
        <ul class="__list" role="tablist">
          <?php foreach ($colors as $color) : ?>
            <li class="__item">
              <a class="__link<?= $i == 0 ? ' --active' : ''; ?> bg--<?= $color[0]; ?>" data-toggle="tab" href="#tab_<?= $color[0]; ?>_1" role="tab" aria-expanded="<?= $i == 0 ? 'true' : 'false'; ?>"><?= $color[1]; ?></a>
            </li>
          <?php $i++; endforeach; ?>
        </ul>
        <?php foreach ($colors as $color) : ?>
      </nav>
      <div class="hidden pt--1<?= $j == 0 ? ' --active' :  ''; ?>" id="tab_<?= $color[0]; ?>_1" role="tabpanel">
          <?= colorPalette($color[0], $color[1]); ?>
      </div>
      <?php $j++; endforeach; ?>
    </div>

    <div class="col w--1/2@t">
      <nav class="nav --tabbed k_color-nav">
        <ul class="__list" role="tablist">
          <?php foreach ($colors as $color) : ?>
            <li class="__item">
              <a class="__link<?= $k == 1 ? ' --active' : ''; ?> bg--<?= $color[0]; ?>" data-toggle="tab" href="#tab_<?= $color[0]; ?>_2" role="tab" aria-expanded="<?= $k == 1 ? 'true' : 'false'; ?>"><?= $color[1]; ?></a>
            </li>
          <?php $k++; endforeach; ?>
        </ul>
        <?php foreach ($colors as $color) : ?>
      </nav>
      <div class="hidden pt--1<?= $l == 1 ? ' --active' :  ''; ?>" id="tab_<?= $color[0]; ?>_2" role="tabpanel">
          <?= colorPalette($color[0], $color[1]); ?>
      </div>
      <?php $l++; endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <header class="k_section__header">Color Palette</header>
  <!-- Black and Red -->
  <div class="row color-cell">
    <div class="col w--1/2@t">
      <div class="bg--black"><span class="hex-color">#000000</span> Black</div>
    </div>
    <div class="col w--1/2@t">
      <div class="bg--red"><span class="hex-color">#cc0000</span> Red</div>
    </div>
  </div>
  <!-- Blue, Teal, Green -->
  <div class="row color-cell">
    <div class="col w--1/3@t">
      <div class="bg--blue-dark"><span class="hex-color">#2e4962</span> Dark Blue</div>
    </div>
    <div class="col w--1/3@t">
      <div class="bg--teal"><span class="hex-color">#2e9aa9</span> Teal <span class="fw--n">*</span></div>
    </div>
    <div class="col w--1/3@t">
      <div class="bg--green"><span class="hex-color">#aebf37</span> Green</div>
    </div>
  </div>
  <!-- Light Blue, Light Teal, Light Green -->
  <div class="row color-cell">
    <div class="col w--1/3@t">
      <div class="bg--blue-light"><span class="hex-color">#bbd1ec</span> Light Blue <span class="fw--n">**</span></div>
    </div>
    <div class="col w--1/3@t">
      <div class="bg--teal-light"><span class="hex-color">#aed7db</span> Light Teal <span class="fw--n">*</span></div>
    </div>
    <div class="col w--1/3@t">
      <div class="bg--green-light"><span class="hex-color">#d5e48e</span> Light Green <span class="fw--n">**</span></div>
    </div>
  </div>
  <!-- Purple, Orange, Yellow  -->
  <div class="row color-cell">
    <div class="col w--1/3@t">
      <div class="bg--purple"><span class="hex-color">#824091</span> Purple</div>
    </div>
    <div class="col w--1/3@t">
      <div class="bg--orange"><span class="hex-color">#e25734</span> Orange</div>
    </div>
    <div class="col w--1/3@t">
      <div class="bg--yellow"><span class="hex-color">#ffc50b</span> Yellow</div>
    </div>
  </div>
  <!-- Grays -->
  <div class="row color-cell">
    <div class="col w--1/4@t">
      <div class="bg--gray"><span class="hex-color">#58595b</span> Gray <span class="fw--n">*</span></div>
    </div>
    <div class="col w--1/4@t">
      <div class="bg--gray-light"><span class="hex-color">#7b7778</span> Light Gray</div>
    </div>
    <div class="col w--1/4@t">
      <div class="bg--beige"><span class="hex-color">#ebe4d4</span> Beige</div>
    </div>
    <div class="col w--1/4@t">
      <div class="bg--beige-light"><span class="hex-color">#f5f4f0</span> Light Beige</div>
    </div>
  </div>
  <!-- Neutral Grays -->
  <div class="row --nogutters color-cell">
    <div class="col w--1/3 w--10@d">
      <div class="bg--black"><span class="hex-color">#000000</span><br>Black</div>
    </div>
    <div class="col w--1/3 w--10@d">
      <div class="bg--gray-900"><span class="hex-color">#1a1a1a</span><br>Gray 900</div>
    </div>
    <div class="col w--1/3 w--10@d">
      <div class="bg--gray-800"><span class="hex-color">#333333</span><br>Gray 800</div>
    </div>
    <div class="col w--1/3 w--10@d">
      <div class="bg--gray-700"><span class="hex-color">#58595b</span><br>Gray 700</div>
    </div>
    <div class="col w--1/3 w--10@d">
      <div class="bg--gray-600"><span class="hex-color">#666666</span><br>Gray 600</div>
    </div>
    <div class="col w--1/3 w--10@d">
      <div class="bg--gray-500"><span class="hex-color">#777777</span><br>Gray 500</div>
    </div>
    <div class="col w--1/3 w--10@d">
      <div class="bg--gray-400"><span class="hex-color">#969696</span><br>Gray 400</div>
    </div>
    <div class="col w--1/3 w--10@d">
      <div class="bg--gray-300"><span class="hex-color">#b5b5b5</span><br>Gray 300</div>
    </div>
    <div class="col w--1/3 w--10@d">
      <div class="bg--gray-200"><span class="hex-color">#d0d0d0</span><br>Gray 200</div>
    </div>
    <div class="col w--1/3 w--10@d">
      <div class="bg--gray-100"><span class="hex-color">#efefef</span><br>Gray 100</div>
    </div>
    <div class="col w--1/3 w--10@d">
      <div class="bg--gray-50"><span class="hex-color">#f7f7f7</span><br>Gray 50</div>
    </div>
    <div class="col w--1/3 w--10@d">
      <div class="bg--white"><span class="hex-color">#ffffff</span><br>White</div>
    </div>
  </div>

  <!-- <div class="row">
    <div class="col --12@xs">
      <small>* Created by PODS to augment the 2017 NU brand colors.</small><br>
      <small>** Very slightly modified by PODS from the 2017 NU brand colors.</small>
    </div>
  </div> -->
</section>
