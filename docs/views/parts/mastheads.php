<!-- start base masthead -->

<header class="masthead -megamenu">
  <a class="masthead_logo" href="#">
    <img class="masthead_image" alt="Logo" src="/docs/images/logo.png">
  </a>
  <div class="nav_content">
    <button type="button" class="nav_handle hidden-up@d">
      <span class="sr-only">Menu</span>
    </button>
  </div>
  <nav class="nav" data-navigation-handle=".nav_handle" data-navigation-content=".nav_content">
    <div class="w-100 d-flex justify-between hidden-up@d">
      <a class="masthead_logo pl-1" href="#">
        <img class="masthead_image" alt="Logo" src="/docs/images/logo.png">
      </a>
      <button type="button" class="nav_handle hidden-up@d mr-1">
        <span class="sr-only">Close Menu</span>
      </button>
    </div>
    <div class="input_enclosed -search bg-gray-50 mb-0h@t hidden-up@d pl-1">
      <label class="sr-only">Search</label>
      <input type="text" placeholder="Search for meaning">
      <button type="submit" class="btn">Go</button>
    </div>
<?php
/* 
// standard nav list
    <ul class="nav_list">
      <li class="nav_item">
        <a class="nav_link" href="#">Lorem Ipsum</a>
      </li>
      <li class="nav_item +children">
        <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Bibendum</a>
        <ul class="nav_sublist" aria-expanded="false">
          <li class="nav_back"><a href="#">Bibendum</a></li>
          <li class="nav_subitem">
            <a class="nav_sublink" href="#">Quam Vulputate Nibh</a>
          </li>
          <li class="nav_subitem">
            <a class="nav_sublink" href="#">Tortor Fusce</a>
          </li>
        </ul>
      </li>
      <li class="nav_item +children">
        <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Pudgi Homunculi</a>
        <ul class="nav_sublist" aria-expanded="false">
          <li class="nav_back"><a href="#">Pudgi Homunculi</a></li>
          <li class="nav_subitem">
            <a class="nav_sublink" href="#">Malesuada Bibendum</a>
          </li>
          <li class="nav_subitem">
            <a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a>
          </li>
          <li class="nav_subitem +children">
            <a class="nav_sublink" href="#" aria-haspopup="true" aria-expanded="false">Venenatis Pharetra Sit Dolor</a>
            <ul class="nav_sublist" aria-expanded="false">
              <li class="nav_back"><a href="#">Venenatis Pharetra Sit Dolor</a></li>
              <li class="nav_subitem">
                <a class="nav_sublink" href="#">Mollis Aliquam</a>
              </li>
              <li class="nav_subitem">
                <a class="nav_sublink" href="#">Ut Porttitor</a>
              </li>
              <li class="nav_subitem">
                <a class="nav_sublink" href="#">Leo Dolor</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="nav_item +children">
        <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Nucleus</a>
        <ul class="nav_sublist" aria-expanded="false">
          <li class="nav_back"><a href="#">Malesuada Nucleus</a></li>
          <li class="nav_subitem">
            <a class="nav_sublink" href="#">Quam Vulputate Nibh</a>
          </li>
          <li class="nav_subitem">
            <a class="nav_sublink" href="#">Tortor Fusce</a>
          </li>
        </ul>
      </li>
      <li class="nav_item +icon hidden-down@t">
        <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="9.5" cy="9.5" r="6.5"/><path d="M18 18l-3.2-3.2"/></svg>
        </a>
      </li>
    </ul>
<?php 
*/ 
?>
<?php 
// megamenu list
?>

  <ul class="nav_list">
    <li class="nav_item +children">
      <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Lorem Ipsum</a>
      <ul class="nav_sublist" aria-expanded="false" data-depth="0">
        <li class="nav_back"><a href="#">Lorem Ipsum</a></li>
        <li class="nav_subitem +children">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Bibendum</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Malesuada Bibendum</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="nav_subitem +children">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Tortor Fusce</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Tortor Fusce</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
          </ul>
        </li>
        <li class="nav_subitem +children">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Quam Vulputate Nibh</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="nav_subitem +children -feature">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Bibendum Mattis Dapibus</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Vulputate Nibh Quam</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="nav_item +children">
      <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Bibendum</a>
      <ul class="nav_sublist" aria-expanded="false" data-depth="0">
        <li class="nav_back"><a href="#">Bibendum</a></li>
        <li class="nav_subitem +children">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Tortor Fusce</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Tortor Fusce</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
          </ul>
        </li>
        <li class="nav_subitem +children">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Quam Vulputate Nibh</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
          </ul>
        </li>
        <li class="nav_subitem +children">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Bibendum</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Malesuada Bibendum</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="nav_subitem +children -feature">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Purus Magna Pellentesque</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Purus Magna Pellentesque</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Vulputate Nibh Quam</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="nav_item +children">
      <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Pudgi Homunculi</a>
      <ul class="nav_sublist" aria-expanded="false" data-depth="0">
        <li class="nav_back"><a href="#">Pudgi Homunculi</a></li>
        <li class="nav_subitem +children">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Quam Vulputate Nibh</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="nav_subitem +children">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Bibendum</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Malesuada Bibendum</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="nav_subitem +children">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Tortor Fusce</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Tortor Fusce</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
          </ul>
        </li>
        <li class="nav_subitem +children -feature">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Vulputate Nibh Quam</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Vulputate Nibh Quam</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="nav_item +children">
      <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Nucleus</a>
      <ul class="nav_sublist" aria-expanded="false" data-depth="0">
        <li class="nav_back"><a href="#">Malesuada Nucleus</a></li>
        <li class="nav_subitem +children">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Bibendum</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Malesuada Bibendum</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="nav_subitem +children">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Quam Vulputate Nibh</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
          </ul>
        </li>
        <li class="nav_subitem +children">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Mollis Elit</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Mollis Elit</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
          </ul>
        </li>
        <li class="nav_subitem +children -feature">
          <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Dapibus Ornare Tellus</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="1">
            <li class="nav_back"><a href="#">Dapibus Ornare Tellus</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Vulputate Nibh Quam</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
            <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="nav_item +icon hidden-down@t">
      <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="9.5" cy="9.5" r="6.5"/><path d="M18 18l-3.2-3.2"/></svg>
      </a>
    </li>
  </ul>

  </nav>
</header>
<main id="main_content">
  <div class="section bg-img -hero -center">
    <div class="section_header">
      <h2 class="section_title">{ <i>Example Hero</i> }</h2>
    </div>
  </div>
</main>
