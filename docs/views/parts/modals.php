<section class="section">
  <div class="row">
    <div class="col w--1/3@t">
      <header class="k_section__header">Base</header>
      <?php
        /**
         * data-size attribute used only for docs/demo.
         * do not use in development or production.
         */
      ?>
      <p class="modal-demo ta--c">
        <a class="btn --xs" href="#" data-size="sm" data-toggle="modal" data-target="#modal_base">Modal sm</a>
        <a class="btn --sm" href="#" data-size="base" data-toggle="modal" data-target="#modal_base">Modal</a><br>
        <a class="btn" href="#" data-size="lg" data-toggle="modal" data-target="#modal_base">Modal lg</a>
        <a class="btn --lg" href="#" data-size="xl" data-toggle="modal" data-target="#modal_base">Modal xl</a>
      </p>

      <div class="modal"
           id="modal_base"
           tabindex="-1"
           role="dialog"
           aria-labelledby="modal_base_label"
           aria-hidden="true">
        <div class="__screen" data-dismiss="modal"></div>
        <div class="__content bg--white">
          <p>Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

          <p>Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue.</p>

          <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas faucibus mollis interdum. Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue.</p>

          <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Donec id elit non mi porta gravida at eget metus.</p>
        </div>
        <button type="button" class="__close" data-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
    </div>

    <div class="col w--1/3@t">
      <header class="k_section__header">Dark</header>
      <p class="modal-demo ta--c">
        <a class="btn --xs bg--transparent-dark" href="#" data-size="sm" data-toggle="modal" data-target="#modal_dark">Modal sm</a>
        <a class="btn --sm bg--transparent-dark" href="#" data-size="base" data-toggle="modal" data-target="#modal_dark">Modal</a><br>
        <a class="btn bg--transparent-dark" href="#" data-size="lg" data-toggle="modal" data-target="#modal_dark">Modal lg</a>
        <a class="btn --lg bg--transparent-dark" href="#" data-size="xl" data-toggle="modal" data-target="#modal_dark">Modal xl</a>
      </p>


      <div class="modal"
           id="modal_dark"
           tabindex="-1"
           role="dialog"
           aria-labelledby="modal_base_label"
           aria-hidden="true">
        <div class="__screen" data-dismiss="modal"></div>
        <div class="__content bg--black">
          <p>Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

          <p>Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue.</p>

          <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas faucibus mollis interdum. Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue.</p>

          <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Donec id elit non mi porta gravida at eget metus.</p>
        </div>
        <button type="button" class="__close" data-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

    </div>

    <div class="col w--1/3@t">
      <header class="k_section__header">Grid</header>
      <p class="modal-demo ta--c">
        <a class="btn --xs bg--gray-200" href="#" data-size="sm" data-toggle="modal" data-target="#modal_grid">Grid sm</a>
        <a class="btn --sm bg--gray-200" href="#" data-size="base" data-toggle="modal" data-target="#modal_grid">Grid</a><br>
        <a class="btn bg--gray-200" href="#" data-size="lg" data-toggle="modal" data-target="#modal_grid">Grid lg</a>
        <a class="btn --lg bg--gray-200" href="#" data-size="xl" data-toggle="modal" data-target="#modal_grid">Grid xl</a>
      </p>
      <div class="modal"
           id="modal_grid"
           tabindex="-1"
           role="dialog"
           aria-labelledby="modal_base_label"
           aria-hidden="true">
        <div class="__screen" data-dismiss="modal"></div>
        <div class="__content bg--white pa--0 section --nogutters">

          <div class="row">
            <div class="col mx--auto w--2/3@t">
              <div class="w--1/3@d f--r@d pt--2h@t ml--1@d mb--1@d ta--c">
                <img class="w--100 w--90@t w--100@d" src="docs/images/random/337869.jpg" alt="image">
              </div>
              <div class="__body">
                <h2 class="__title">David Mary Davenport</h2>
                <p class="__subtitle">Curabitur Blandit Tempus Porttitor<br>
                Egestas Eget Quam, Venenatis</p>
                <div class="__meta">
                  <p><a href="#">d.m.davenport@northeastern.edu</a><br>
                  617.373.5555</p>
                </div>
                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <p>Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla.</p>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="__close" data-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

    </div>
  </div>
</section>

<section class="section k_bg-light">
  <header class="k_section__header">Full-Screen (Example: Search)</header>
  <div class="row">
    <div class="col">
      <div class="modal-demo ta--c py--1 py--3@t">
        <a href="#" data-toggle="modal" data-size="full" data-target="#modal_search">
          <i data-feather="search"></i>
        </a>
      </div>
      <?php include 'docs/views/partials/_modal-search.php'; ?>
    </div>
  </div>
</section>
