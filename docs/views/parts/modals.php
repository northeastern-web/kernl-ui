<section class="section">
  <header class="k_section__header">Modals</header>

  <div class="row">
    <div class="col w-1/3@t">
      <a class="btn" id="modal_trigger_1" href="#modal_1" data-swap-target="#modal_1" data-toggle="modal">Modal 1</a>
      <div class="modal" id="modal_1" tabindex="-1" role="dialog" aria-labelledby="modal_trigger_1" aria-hidden="true">
        <div class="modal_screen" toggle-dismiss></div>
        <div class="modal_body bg-white">
          <h2>Modal 1</h2>
          <p>Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        </div>
        <button type="button" class="modal_close" toggle-dismiss aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <a class="btn" id="modal_trigger_2" href="#modal_2" data-swap-target="#modal_2" data-toggle="modal">Modal 2</a>
      <div class="modal" id="modal_2" tabindex="-1" role="dialog" aria-labelledby="modal_trigger_2" aria-hidden="true">
        <div class="modal_screen" toggle-dismiss></div>
        <div class="modal_body bg-beige">
          <h2 class="ta-c">Modal 2</h2>
          <div class="row">
            <div class="col w-1/2">
              <p>Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
            </div>
            <div class="col w-1/2">
              <p>Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
            </div>
          </div>
        </div>
        <button type="button" class="modal_close" toggle-dismiss aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      </div>

      <a class="btn" id="modal_trigger_search" href="#modal_search" data-swap-target="#modal_search" data-toggle="modal">Modal Search</a>
      <div class="modal" id="modal_search" tabindex="-1" role="dialog" aria-labelledby="modal_trigger_search" aria-hidden="true">
        <div class="modal_screen" toggle-dismiss></div>
        <div class="modal_body">
          <form action="" method="">
            <div class="input_enclosed -dark -line">
              <label for="modalSearch" class="sr-only">Search</label>
              <input autocomplete="off" class="fs-d3 fw-300 has-autofocus" name="s" type="search" id="modalSearch" aria-describedby="modalSearch" placeholder="Search by keyword">
              <button type="submit" class="btn">Go</button>
            </div>
          </form>
        </div>
        <button type="button" class="modal_close" toggle-dismiss aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
</section>
