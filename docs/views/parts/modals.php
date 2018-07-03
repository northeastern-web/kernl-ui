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
          <i data-feather="x-circle"></i>
        </button>
      </div>
<!-- 
      <div class="modal fade" id="modal_base" tabindex="-1" role="dialog" aria-labelledby="modal_base_label" aria-hidden="true">
        <div class="__dialog" role="document">
          <div class="__content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="__icon" data-feather="x-circle"></i>
            </button>
            <div class="__header">
              <h4 class="__title" id="modal_base_label">Modal-lay-hee-hoo!</h4>
            </div>
            <div class="__body">
              <p>Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus.</p>
            </div>
            <div class="__footer">
              <button type="button" class="btn" data-dismiss="modal">Close</button>
              <button type="button" class="btn --transparent">Save changes</button>
            </div>
          </div>
        </div>
      </div>
 -->
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
          <i data-feather="x-circle"></i>
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

      <div class="modal --grid fade" id="modal_grid" tabindex="-1" role="dialog" aria-labelledby="modal_grid_label" aria-hidden="true">
        <div class="__dialog" role="document">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="__icon" data-feather="x-circle"></i>
          </button>
          <div class="__content">
            <div class="row">
              <div class="col w--1/3@t">
                <div class="__graphic"></div>
              </div>
              <div class="col w--2/3@t">
                <div class="__header">
                  <h3 class="__title">David Mary Davenport</h3>
                  <p class="__subtitle">Curabitur Blandit Tempus Porttitor<br>
                  Egestas Eget Quam, Venenatis</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col w--1/3@t">
                <div class="__meta">
                  <p><a href="#">d.m.davenport@northeastern.edu</a><br>
                  617.373.5555</p>
                  <!-- <ul class="ls--none">
                    <li><a href="#">d.m.davenport@northeastern.edu</a></li>
                    <li><a href="#">617.373.5555</a></li>
                  </ul> -->
                </div>
              </div>
              <div class="col w--2/3@t">
                <div class="__body">
                  <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                  <p>Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
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
      <?php include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_modal-search.php'; ?>
    </div>
  </div>
</section>
