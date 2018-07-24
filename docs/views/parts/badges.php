<div class="section">
  <div class="row">
    <div class="col w--1/2">
      <a href="#" class="badge">Inline Badge</a>
      <a href="#" class="badge bc--black">Inline Badge</a>
      <a href="#" class="badge bg--red">Inline Badge</a>
      <a href="#" class="badge bc--blue">Inline Badge</a>
      <a href="#" class="badge bg--purple br--pill">Inline Badge</a>
    </div>
    <div class="col w--1/2">
      <div class="badge bc--black">
        <i data-feather="settings"></i>
        Inline Badge
      </div>
      <div class="badge bg--red">
        <i data-feather="video"></i>
        Inline Badge
      </div>
      <div class="badge bc--blue">
        <i data-feather="video"></i>
        Inline Badge
      </div>
      <div class="badge bg--purple br--pill --right">
        Inline Badge
        <i data-feather="settings"></i>
      </div>
    </div>
  </div>
  <div class="row">
    <?php $i = 1; while ($i < 4) : ?>
      <div class="col w--1/3@t">
        <div class="badge__wrapper bg--img">
          <div
            data-component="badge"
            class="badge pos--absolute pin--c<?= $i == 1 ? ' bg--white-alpha' : ''; ?><?= $i == 2 ? ' bg--red' : ''; ?><?= $i == 3 ? ' bg--black' : ''; ?>">
              <a href="#">Badge (Link)</a>
              <i class="__icon icon--video"></i>
          </div>
        </div>
      </div>
    <?php $i++; endwhile; ?>
    <?php $i = 4; while ($i < 7) : ?>
      <div class="col w--1/3@t">
        <div class="badge__wrapper bg--img">
          <div
            data-component="badge"
            class="badge pos--absolute pin--xc <?= $i == 4 ? ' bg--white-alpha' : ''; ?><?= $i == 5 ? ' bg--red' : ''; ?><?= $i == 6 ? ' bg--black' : ''; ?>">
            Badge Center
          </div>
        </div>
      </div>
    <?php $i++; endwhile; ?>
    <?php $i = 7; while ($i < 10) : ?>
      <div class="col w--1/3@t">
        <div class="badge__wrapper bg--img">
          <div
            data-component="badge"
            class="badge pos--absolute pin--t pin--r br--pill mt--0h mr--0h<?= $i == 8 ? ' bg--white-alpha' : ''; ?><?= $i == 9 ? ' bg--red' : ''; ?><?= $i == 7 ? ' bg--black' : ''; ?>">
            Badge Right (Pill)
          </div>
        </div>
      </div>
    <?php $i++; endwhile; ?>
  </div>
</section>

<section class="section">
  Sometimes we'll want to use an <div class="badge bg--red">Inline Badge</div> here or there.
</section>
