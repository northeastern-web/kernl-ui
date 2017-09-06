<section class="section">
  <header class="k_section__header">Interior Nav</header>
  <div class="row">
    <div class="hidden--up@md ta--c p--t-2@xs">
      <button class="nav--interior__toggler btn btn--sm"><i class="ion-android-funnel"></i> Page Menu</button>
    </div>
    <div class="col --12@xs --3@md">
      <nav class="nav nav--interior">
        <ul class="nav__list">
          <li class="nav__item">
            <a class="nav__link" href="#">Page</a>
          </li>
          <li class="nav__item nav__item--active">
            <a class="nav__link" href="#">Page</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#">Page</a>
          </li>
          <li class="nav__item nav__item--haschildren">
            <a class="nav__link" href="#">Parent Page</a>
            <ul class="nav__child-list">
              <li class="nav__child-item">
                <a class="nav__child-link" href="#">Child Tab A</a>
              </li>
              <li class="nav__child-item">
                <a class="nav__child-link" href="#">Child Tab B</a>
              </li>
              <li class="nav__child-item">
                <a class="nav__child-link" href="#">Child Tab C</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <div class="col --12@xs g-9@md p--t-2@xs">
      <h2>Page Content Here</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
      <h3>Change the viewport width</h3>
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue.</p>
    </div>
  </div>
</section>

<section class="section">
  <header class="k_section__header">Tabbed Nav</header>
  <div class="row">
    <div class="col --12@xs p--t-2@xs">
      <nav class="nav nav--tabbed">
        <ul class="nav__list">
          <li class="nav__item nav-item">
            <a class="nav__link active" data-toggle="tab" href="#tab_1">Tab 1</a>
          </li>
          <li class="nav__item nav-item">
            <a class="nav__link" data-toggle="tab" href="#tab_2">Tab 2</a>
          </li>
          <li class="nav__item nav-item">
            <a class="nav__link" data-toggle="tab" href="#tab_3">Tab 3</a>
          </li>
          <li class="nav__item nav-item nav__item--haschildren">
            <a class="nav__link" data-toggle="tab" href="#tab_4">Tab 4 Parent</a>
            <ul class="nav__child-list">
              <li class="nav__child-item">
                <a class="nav__child-link" data-toggle="tab" href="#tab_4a">Child Tab A</a>
              </li>
              <li class="nav__child-item">
                <a class="nav__child-link" data-toggle="tab" href="#tab_4b">Child Tab B</a>
              </li>
              <li class="nav__child-item">
                <a class="nav__child-link" data-toggle="tab" href="#tab_4c">Child Tab C</a>
              </li>
            </ul>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            <h3>Content 1</h3>
            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
          <div class="tab-pane" id="tab_2">
            <h3>Content 2</h3>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="tab-pane" id="tab_3">
            <h3>Content 3</h3>
            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
          </div>
          <div class="tab-pane p--t-2@md" id="tab_4">
            <h3>Content 4</h3>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
          </div>
          <div class="tab-pane p--t-2@md" id="tab_4a">
            <h3>Content 4a</h3>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
          </div>
          <div class="tab-pane p--t-2@md" id="tab_4b">
            <h3>Content 4b</h3>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod.</p>
          </div>
          <div class="tab-pane p--t-2@md" id="tab_4c">
            <h3>Content 4c</h3>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Donec sed odio dui. Curabitur blandit tempus porttitor. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
        </div>
      </nav>
    </div>
  </div>
</section>

<section class="section">
  <header class="k_section__header">Tabbed Nav with Borders</header>
  <div class="row">
    <div class="col --12@xs p--t-2@xs">
      <nav class="nav nav--tabbed nav--tabbed--border">
        <ul class="nav__list">
          <li class="nav__item nav-item">
            <a class="nav__link active" data-toggle="tab" href="#tab_10">Tab 1</a>
          </li>
          <li class="nav__item nav-item">
            <a class="nav__link" data-toggle="tab" href="#tab_20">Tab 2</a>
          </li>
          <li class="nav__item nav-item">
            <a class="nav__link" data-toggle="tab" href="#tab_30">Tab 3</a>
          </li>
          <li class="nav__item nav-item nav__item--haschildren">
            <a class="nav__link" data-toggle="tab" href="#tab_40">Tab 4 Parent</a>
            <ul class="nav__child-list">
              <li class="nav__child-item">
                <a class="nav__child-link" data-toggle="tab" href="#tab_40a">Child Tab A</a>
              </li>
              <li class="nav__child-item">
                <a class="nav__child-link" data-toggle="tab" href="#tab_40b">Child Tab B</a>
              </li>
              <li class="nav__child-item">
                <a class="nav__child-link" data-toggle="tab" href="#tab_40c">Child Tab C</a>
              </li>
            </ul>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_10">
            <h3>Content 1</h3>
            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
          <div class="tab-pane" id="tab_20">
            <h3>Content 2</h3>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="tab-pane" id="tab_30">
            <h3>Content 3</h3>
            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
          </div>
          <div class="tab-pane p--t-2@xs" id="tab_40">
            <h3>Content 4</h3>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
          </div>
          <div class="tab-pane p--t-2@xs" id="tab_40a">
            <h3>Content 4a</h3>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
          </div>
          <div class="tab-pane p--t-2@xs" id="tab_40b">
            <h3>Content 4b</h3>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod.</p>
          </div>
          <div class="tab-pane p--t-2@xs" id="tab_40c">
            <h3>Content 4c</h3>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Donec sed odio dui. Curabitur blandit tempus porttitor. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
        </div>
      </nav>
    </div>
  </div>
</section>

<section class="section">
  <header class="k_section__header m--b-2@xs">Pagination</header>
  <nav class="nav--pagination" aria-label="Page navigation">
    <ul class="nav--pagination__list">
      <li class="nav--pagination__item">
        <a class="nav--pagination__link" href="#" aria-label="Previous">
          <span aria-hidden="true" class="ion-ios-arrow-thin-left"></span>
          <span class="sr--only">Previous</span>
        </a>
      </li>
      <li class="nav--pagination__item"><a class="nav--pagination__link" href="#">1</a></li>
      <li class="nav--pagination__item"><a class="nav--pagination__link" href="#">2</a></li>
      <li class="nav--pagination__item"><a class="nav--pagination__link active" href="#">3</a></li>
      <li class="nav--pagination__item"><a class="nav--pagination__link" href="#">4</a></li>
      <li class="nav--pagination__item"><a class="nav--pagination__link" href="#">5</a></li>
      <li class="nav--pagination__item">
        <a class="nav--pagination__link" href="#" aria-label="Next">
          <span aria-hidden="true" class="ion-ios-arrow-thin-right"></span>
          <span class="sr--only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</section>
