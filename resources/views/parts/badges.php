<section class="section">
  <div class="g-row">
    <?php $i = 1; while ($i < 4) : ?>
      <div class="g-col --12@xs --4@md">
        <div class="badge__wrapper +bgimg">
          <div
            data-component="badge"
            class="badge --left<?= $i == 2 ? ' --transparent' : ''; ?><?= $i == 3 ? ' --dark' : ''; ?>">
              <a href="#">Badge (Link)</a>
              <i class="badge__icon ion-ios-videocam"></i>
          </div>
        </div>
      </div>
    <?php $i++; endwhile; ?>
    <?php $i = 4; while ($i < 7) : ?>
      <div class="g-col --12@xs --4@md">
        <div class="badge__wrapper +bgimg">
          <div
            data-component="badge"
            class="badge --center<?= $i == 4 ? ' --transparent' : ''; ?><?= $i == 5 ? ' --dark' : ''; ?>">
            Badge Center
          </div>
        </div>
      </div>
    <?php $i++; endwhile; ?>
    <?php $i = 7; while ($i < 10) : ?>
      <div class="g-col --12@xs --4@md">
        <div class="badge__wrapper +bgimg">
          <div
            data-component="badge"
            class="badge --right --pill<?= $i == 9 ? ' --transparent' : ''; ?><?= $i == 7 ? ' --dark' : ''; ?>">
            Badge Right (Pill)
          </div>
        </div>
      </div>
    <?php $i++; endwhile; ?>
  </div>
</section>
