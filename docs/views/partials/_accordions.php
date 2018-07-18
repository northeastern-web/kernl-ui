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
      <div class="col pb--1">
        <header class="k_section__header">' . $variant . ' Accordion</header>
        <div id="accordion_' . $id . '" class="accordion ' . $acc_class . '">
          <div class="__item">
            <div class="__title --active"
                 data-toggle="#toggle_' . $id . 'a"
                 data-group="#accordion_' . $id . '"
                 aria-expanded="true">
              Play me some accordion!
            </div>
            <div class="__content --visible" id="toggle_' . $id . 'a" data-target>
              <div class="__copy">
                <p>To show an open panel by default, include the class <code>--visible</code> with <code>__content</code>. Omit <code>--visible</code> to load the accordion with all panels closed.</p>
                <p>Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
              </div>
            </div>
          </div>
          <div class="__item">
            <div class="__title"
                 data-toggle="#toggle_' . $id . 'b"
                 data-group="#accordion_' . $id . '"
                 aria-expanded="false">
                  Do you want to play some polka?
            </div>
            <div class="__content" id="toggle_' . $id . 'b" data-target>
              <div class="__copy">
                <h3>With a Heading Now</h3>
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                <p>Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
              </div>
            </div>
          </div>
          <div class="__item">
            <div class="__title"
                 data-toggle="#toggle_' . $id . 'c"
                 data-group="#accordion_' . $id . '"
                 aria-expanded="false">
                  Roll out the barrel!
            </div>
            <div class="__content" id="toggle_' . $id . 'c" data-target>
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