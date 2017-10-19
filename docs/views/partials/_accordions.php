<?php

/*
 * int $id             id of instance
 * str $variant        name of variant
 * str $section_class  css classes assigned to section 
 * str $acc_classes    css classes assigned to accordion
 */

function accordion($id, $variant, $section_classes, $acc_class) {
  $section_class = ' ' . $section_classes;
  echo '
  <section class="section' . $section_class . '">
    <div class="row">
      <div class="col --12@xs pb--1@xs">
        <header class="k_section__header">' . $variant . ' Accordion</header>
        <div id="accordion_' . $id . '" class="l__grid__copy accordion ' . $acc_class . '">
          <div class="__item">
            <div class="__title"
                 data-toggle="collapse"
                 data-parent="#accordion_' . $id . '"
                 data-target="#toggle_' . $id . 'a"
                 aria-expanded="false">
              Play me some accordion!
            </div>
            <div class="collapse show" id="toggle_' . $id . 'a">
              <div class="__copy">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                <p>Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
              </div>
            </div>
          </div>
          <div class="__item">
            <div class="__title collapsed"
                 data-toggle="collapse"
                 data-parent="#accordion_' . $id . '"
                 data-target="#toggle_' . $id . 'b"
                 aria-expanded="false">
                  Do you want to play some polka?
            </div>
            <div class="collapse" id="toggle_' . $id . 'b">
              <div class="__copy">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                <p>Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
              </div>
            </div>
          </div>
          <div class="__item">
            <div class="__title collapsed"
                 data-toggle="collapse"
                 data-parent="#accordion_' . $id . '"
                 data-target="#toggle_' . $id . 'c"
                 aria-expanded="false">
                  Roll out the barrel!
            </div>
            <div class="collapse" id="toggle_' . $id . 'c">
              <div class="__copy">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                <p>Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>';
}
?>