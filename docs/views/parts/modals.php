<section class="section">
  <div class="row">
    <div class="col --12@xs --4@md">
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
        <a class="btn --lg" href="#" data-size="full" data-toggle="modal" data-target="#modal_base">Modal lg</a>
      </p>

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

    </div>

    <div class="col --12@xs --4@md">
      <header class="k_section__header">Dark</header>
      <p class="modal-demo ta--c">
        <a class="btn --xs bg--transparent-dark" href="#" data-size="sm" data-toggle="modal" data-target="#modal_dark">Modal sm</a>
        <a class="btn --sm bg--transparent-dark" href="#" data-size="base" data-toggle="modal" data-target="#modal_dark">Modal</a><br>
        <a class="btn bg--transparent-dark" href="#" data-size="lg" data-toggle="modal" data-target="#modal_dark">Modal lg</a>
        <a class="btn --lg bg--transparent-dark" href="#" data-size="full" data-toggle="modal" data-target="#modal_dark">Modal full</a>
      </p>

      <div class="modal --dark fade" id="modal_dark" tabindex="-1" role="dialog" aria-labelledby="modal_dark_label" aria-hidden="true">
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
              <button type="button" class="btn --transparent --light">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="col --12@xs --4@md">
      <header class="k_section__header">Contact</header>
      <p class="modal-demo ta--c">
        <a class="btn --xs bg--gray-200" href="#" data-size="sm" data-toggle="modal" data-target="#modal_contact">Contact sm</a>
        <a class="btn --sm bg--gray-200" href="#" data-size="base" data-toggle="modal" data-target="#modal_contact">Contact</a><br>
        <a class="btn bg--gray-200" href="#" data-size="lg" data-toggle="modal" data-target="#modal_contact">Contact lg</a>
        <a class="btn --lg bg--gray-200" href="#" data-size="full" data-toggle="modal" data-target="#modal_contact">Contact full</a>
      </p>

      <div class="modal --contact fade" id="modal_contact" tabindex="-1" role="dialog" aria-labelledby="modal_contact_label" aria-hidden="true">
        <div class="__dialog" role="document">
          <div class="__content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="__icon" data-feather="x-circle"></i>
            </button>
            <div class="row">
              <div class="col --12@xs --4@md">
                <div class="__image__wrapper">
                  <img class="__image" src="//farm2.staticflickr.com/1672/23697640273_90b5c92b84_z_d.jpg" alt="">
                </div>
                <div class="__body">
                  <p class="--contact__info"><a href="#">d.m.davenport@northeastern.edu</a><br>
                  617.373.5555</p>
                </div>
              </div>
              <div class="col --12@xs --8@md">
                <div class="__body --contact__bio">
                  <h3 class="--contact__name">David Mary Davenport</h3>
                  <p class="--contact__title">Curabitur Blandit Tempus Porttitor<br>
                  Egestas Eget Quam, Venenatis</p>
                  <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
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
  <header class="k_section__header">Full-Screen Search</header>
  <div class="row">
    <div class="col --12@xs">
      <div class="ta--c py--1@xs py--3@md">
        <a href="#" data-toggle="modal" data-target="#modal_search">
          <i data-feather="search"></i>
        </a>
      </div>
      <?php include $_SERVER["DOCUMENT_ROOT"] . '/docs/views/partials/_modal-search.php'; ?>
    </div>
  </div>
</section>
