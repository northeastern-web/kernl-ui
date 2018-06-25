<?php
function listgroup($classes)
{
    if (preg_match("/icon/", $classes)) {
        return '
      <div class="list-group ' . $classes . '">
        <div class="__item">
          <i data-feather="alert-octagon"></i>
          <b>Lorem ipsum dolor</b>: sit amet do eiusmod
        </div>
        <div class="__item">
          <i data-feather="alert-octagon"></i>
          <b>Lorem ipsum</b>: dolor sit amet, consectetur faucibus mollis interdum
        </div>
        <a href="#" class="__item">
          <i data-feather="alert-octagon"></i>
          <b>Maecenas</b>: faucibus mollis interdum
        </a>
        <a href="#" class="__item">
          <i data-feather="alert-octagon"></i>
          <b>Lorem ipsum</b>: dolor sit amet, consectetur
        </a>
        <div class="__item">
          <i data-feather="alert-octagon"></i>
          <b>Lorem ipsum dolor</b>: sit amet do eiusmod
        </div>
      </div>
      ';
    }
    return '
    <div class="list-group ' . $classes . '">
      <div class="__item"><b>Lorem ipsum dolor</b>: sit amet do eiusmod</div>
      <div class="__item"><b>Lorem ipsum</b>: dolor sit amet, consectetur faucibus mollis interdum</div>
      <a href="#" class="__item"><b>Maecenas</b>: faucibus mollis interdum</a>
      <a href="#" class="__item"><b>Lorem ipsum</b>: dolor sit amet, consectetur</a>
      <div class="__item"><b>Lorem ipsum dolor</b>: sit amet do eiusmod</div>
    </div>
    ';
}
