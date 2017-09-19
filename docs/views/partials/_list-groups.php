<?php
function listgroup($classes) {
  echo '
  <div class="row mb--2@xs">
    <div class="col --12@xs --3@md">
      <p class="text-style-block mb--1@xs"><small>Small</small></p>
      <div class="list-group --sm' . $classes . '">
        <div class="__item"><b>Lorem ipsum dolor</b>: sit amet do eiusmod</div>
        <div class="__item"><b>Lorem ipsum</b>: dolor sit amet, consectetur</div>
        <div class="__item"><b>Maecenas</b>: faucibus mollis interdum</div>
        <div class="__item"><b>Lorem ipsum</b>: dolor sit amet, consectetur</div>
        <div class="__item"><b>Lorem ipsum dolor</b>: sit amet do eiusmod</div>
      </div>
    </div>
    <div class="col --12@xs --4@md">
      <p class="text-style-block mb--1@xs"><small>Small; items contain links</small></p>
      <div class="list-group --sm' . $classes . '">
        <div class="__item"><a href="#"><b>Lorem ipsum dolor</b>: sit amet do blandit tempus porttitor</a></div>
        <div class="__item"><a href="#"><b>Lorem ipsum</b>: dolor sit amet, tempus porttitor consectetur</a></div>
        <div class="__item"><a href="#"><b>Maecenas</b>: Cras justo odio, dapibus in, faucibus</a></div>
        <div class="__item"><a href="#"><b>Lorem ipsum</b>: dolor sit amet, consectetur mollis interdum</a></div>
        <div class="__item"><a href="#"><b>Lorem ipsum dolor</b>: sit amet do eiusmod blandit porttitor</a></div>
      </div>
    </div>
    <div class="col --12@xs --5@md">
      <p class="text-style-block mb--1@xs"><small>Small; Items are Links; extra content</small></p>
      <div class="list-group --sm' . $classes . '">
        <a href="#" class="__item">
          <b>Lorem ipsum dolor sit amet</b><br>
          Lorem ipsum dolor sit amet do eiusmod consectetur adipiscing elit.<br>
          November 12, ' . date("Y") . ', 3:00 p.m.
        </a>
        <a href="#" class="__item">
          <b>Maecenas consectetur adipiscing</b><br>
          Maecenas consectetur adipiscing elit faucibus mollis interdum.<br>
          November 17, ' . date("Y") . ', 4:00 p.m.
        </a>
        <a href="#" class="__item">
          <b>Lorem ipsum</b><br>
          Lorem ipsumfaucibus mollis interdumdolor sit amet, consectetur.<br>
          November 18, ' . date("Y") . ', 1:00 a.m.
        </a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col --12@xs --4@md --offset-1@md">
      <p class="text-style-block mb--1@xs"><small>Base size; items contain links</small></p>
      <div class="list-group'  . $classes . '">
        <div class="__item"><a href="#"><b>Dolor lorem ipsum </b>: sit amet do blandit porttitor</a></div>
        <div class="__item"><a href="#"><b>Lorem ipsum</b>: dolor sit amet, tempus consectetur</a></div>
        <div class="__item"><a href="#"><b>Maecenas</b>: Cras justo odio, dapibus ac in, faucibus</a></div>
        <div class="__item"><a href="#"><b>Faucibus mollis</b>: Maecenas interdum</a></div>
        <div class="__item"><a href="#"><b>Ipsum Maecenas</b>: dolor sit amet, consectetur</a></div>
        <div class="__item"><a href="#"><b>Tempus porttitor</b>: dolor sit amet, consectetur</a></div>
      </div>
    </div>
    <div class="col --12@xs --5@md --offset-1@md">
      <p class="text-style-block mb--1@xs"><small>Base size; Items are Links; extra content</small></p>
      <div class="list-group'  . $classes . '">
        <a href="#" class="__item">
          <b>Lorem ipsum dolor sit amet</b><br>
          Lorem ipsum dolor sit amet do eiusmod consectetur adipiscing elit.<br>
          November 12, ' . date("Y") . ', 3:00 p.m.
        </a>
        <a href="#" class="__item">
          <b>Maecenas consectetur adipiscing</b><br>
          Maecenas consectetur adipiscing elit faucibus mollis interdum.<br>
          November 17, ' . date("Y") . ', 4:00 p.m.
        </a>
        <a href="#" class="__item">
          <b>Lorem ipsum</b><br>
          Lorem ipsumfaucibus mollis interdumdolor sit amet, consectetur.<br>
          November 18, ' . date("Y") . ', 1:00 a.m.
        </a>
      </div>
    </div>
  </div>';
}
?>