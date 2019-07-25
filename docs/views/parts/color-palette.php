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

  <h3 class="fs-sm tt-caps fw-300">Primary Palette</h3>
  <p class="fs-sm">Black, white, red, and gold are our primary colors.</p>
  <div class="row color-cell">
    <div class="col w-1/4@t">
      <div class="bg-black">Black<br><span class="hex-color">#000000</span></div>
    </div>
    <div class="col w-1/4@t">
      <div class="bg-white bc-gray-200">White<br><span class="hex-color">#ffffff</span></div>
    </div>
    <div class="col w-1/4@t">
      <div class="bg-red">Red<br><span class="hex-color">#d41b2c</span></div>
    </div>
    <div class="col w-1/4@t">
      <div class="bg-gold">Gold<br><span class="hex-color">#a4804a</span></div>
    </div>
  </div>

  <h3 class="fs-root tt-caps fw-300">Secondary Palette</h3>
  <p class="fs-sm">Secondary colors range from neutral to vibrant. Use them to create different moods.</p>
  <div class="row color-cell">
    <div class="col w-1/3@t w-1/6@w">
      <div class="bg-beige">Beige<br><span class="hex-color">#e5d4ab</span></div>
    </div>
    <div class="col w-1/3@t w-1/6@w">
      <div class="bg-gray-cool">Cool Gray<br><span class="hex-color">#99a3b0</span></div>
    </div>
    <div class="col w-1/3@t w-1/6@w">
      <div class="bg-gray-warm-light">Light Warm Gray<br><span class="hex-color">#cfc7bf</span></div>
    </div>
    <div class="col w-1/3@t w-1/6@w">
      <div class="bg-gray-warm">Warm Gray<br><span class="hex-color">#a19994</span></div>
    </div>
    <div class="col w-1/3@t w-1/6@w">
      <div class="bg-blue-dark">Dark Blue<br><span class="hex-color">#385775</span></div>
    </div>
    <div class="col w-1/3@t w-1/6@w">
      <div class="bg-blue">Blue<br><span class="hex-color">#006eb5</span></div>
    </div>
    <div class="col w-1/3@t w-1/6@w">
      <div class="bg-blue-light">Light Blue<br><span class="hex-color">#52cfe5</span></div>
    </div>
    <div class="col w-1/3@t w-1/6@w">
      <div class="bg-teal">Teal<br><span class="hex-color">#00cfb5</span></div>
    </div>
    <div class="col w-1/3@t w-1/6@w">
      <div class="bg-green">Green<br><span class="hex-color">#badb00</span></div>
    </div>
    <div class="col w-1/3@t w-1/6@w">
      <div class="bg-yellow">Yellow<br><span class="hex-color">#ffbf3d</span></div>
    </div>
    <div class="col w-1/3@t w-1/6@w">
      <div class="bg-orange">Orange<br><span class="hex-color">#ff854f</span></div>
    </div>
    <div class="col w-1/3@t w-1/6@w">
      <div class="bg-purple">Purple<br><span class="hex-color">#824091</span></div>
    </div>
  </div>

  <h3 class="fs-root tt-caps fw-300">Neutral Grays</h3>
  <div class="row color-cell">
    <div class="col w-20@t w-10@w col-stretch">
      <div class="bg-gray-50">Gray 50<br><span class="hex-color">#f7f7f7</span></div>
    </div>
    <div class="col w-20@t w-10@w col-stretch">
      <div class="bg-gray-100">Gray 100<br><span class="hex-color">#efefef</span></div>
    </div>
    <div class="col w-20@t w-10@w col-stretch">
      <div class="bg-gray-200">Gray 200<br><span class="hex-color">#d0d0d0</span></div>
    </div>
    <div class="col w-20@t w-10@w col-stretch">
      <div class="bg-gray-300">Gray 300<br><span class="hex-color">#b5b5b5</span></div>
    </div>
    <div class="col w-20@t w-10@w col-stretch">
      <div class="bg-gray-400">Gray 400<br><span class="hex-color">#979797</span></div>
    </div>
    <div class="col w-20@t w-10@w col-stretch">
      <div class="bg-gray-500">Gray 500<br><span class="hex-color">#767676</span></div>
    </div>
    <div class="col w-20@t w-10@w col-stretch">
      <div class="bg-gray-600">Gray 600<br><span class="hex-color">#666666</span></div>
    </div>
    <div class="col w-20@t w-10@w col-stretch">
      <div class="bg-gray-700">Gray 700<br><span class="hex-color">#5c5c5c</span></div>
    </div>
    <div class="col w-20@t w-10@w col-stretch">
      <div class="bg-gray-800">Gray 800<br><span class="hex-color">#333333</span></div>
    </div>
    <div class="col w-20@t w-10@w col-stretch">
      <div class="bg-gray-900">Gray 900<br><span class="hex-color">#1a1a1a</span></div>
    </div>
  </div>
</section>

<section class="section">
  <header class="k_section__header">Gradient Options</header>

  <h3 class="fs-sm tt-caps fw-300">Primary Palette</h3>
  <div class="row color-cell">
    <div class="col w-1/3@t">
      <div class="pb-3 bg-red-orange">NU Red/Objectively Orange<br><span class="hex-color">bg-red-orange</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-orange-gray-warm-light">Objectively Orange/Major Tan<br><span class="hex-color">bg-orange-gray-warm-light</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-gray-warm-light-red">Major Tan/NU Red<br><span class="hex-color">bg-gray-warm-light-red</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-red-yellow">NU Red/Youthful Yellow<br><span class="hex-color">bg-red-yellow</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-yellow-orange">Youthful Yellow/Objectively Orange<br><span class="hex-color">bg-yellow-orange</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-green-yellow">Gamma Green/Youthful Yellow<br><span class="hex-color">bg-green-yellow</span></div>
    </div>

    <div class="col w-1/3@t">
      <div class="pb-3 bg-blue-teal">Bachelor’s Blue/Global Green<br><span class="hex-color">bg-blue-teal</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-blue-light-blue-dark">Biology Blue/Business Blue<br><span class="hex-color">bg-blue-light-blue-dark</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-blue-dark-teal">Business Blue/Global Green<br><span class="hex-color">bg-blue-dark-teal</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-teal-green">Global Green/Gamma Green<br><span class="hex-color">bg-teal-green</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-blue-green">Bachelor’s Blue/Gamma Green<br><span class="hex-color">bg-blue-green</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-blue-light-blue">Biology Blue/Bachelor’s Blue<br><span class="hex-color">bg-blue-light-blue</span></div>
    </div>

    <div class="col w-1/3@t">
      <div class="pb-3 bg-blue-gray-cool">Bachelor’s Blue/Grad Gray<br><span class="hex-color">bg-blue-gray-cool</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-blue-dark-gray-warm">Business Blue/Husky Gray<br><span class="hex-color">bg-blue-dark-gray-warm</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-blue-gray-warm">Bachelor’s Blue/Husky Gray<br><span class="hex-color">bg-blue-gray-warm</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-blue-dark-gray-warm">Business Blue/Professor Gray<br><span class="hex-color">bg-blue-dark-gray-warm</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-gray-cool-blue-dark">Grad Gray/Business Blue<br><span class="hex-color">bg-gray-cool-blue-dark</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-gold-gray-warm-light">Presidential Gold/Major Tan<br><span class="hex-color">bg-gold-gray-warm-light</span></div>
    </div>

    <div class="col w-1/3@t">
      <div class="pb-3 bg-red-blue">NU Red/Bachelor’s Blue<br><span class="hex-color">bg-red-blue</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-blue-orange">Bachelor’s Blue/Objectively Orange<br><span class="hex-color">bg-blue-orange</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-blue-light-yellow">Biology Blue/Youthful Yellow<br><span class="hex-color">bg-blue-light-yellow</span></div>
    </div>
    <div class="col w-1/3@t">
      <div class="pb-3 bg-yellow-blue">Youthful Yellow/Bachelor’s Blue<br><span class="hex-color">bg-yellow-blue</span></div>
    </div>
  </div>
</section>