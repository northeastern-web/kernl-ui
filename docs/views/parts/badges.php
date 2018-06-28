<div class="section">
  <div class="row">
    <?php $i = 1; while ($i < 4) : ?>
      <div class="col w--1/3@t">
        <div class="badge__wrapper bg--img">
          <div
            data-component="badge"
            class="badge --left<?= $i == 2 ? ' bg--red' : ''; ?><?= $i == 3 ? ' bg--black' : ''; ?>">
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
            class="badge --center<?= $i == 4 ? ' bg--red' : ''; ?><?= $i == 5 ? ' bg--black' : ''; ?>">
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
            class="badge --right br--pill<?= $i == 9 ? ' bg--red' : ''; ?><?= $i == 7 ? ' bg--black' : ''; ?>">
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
