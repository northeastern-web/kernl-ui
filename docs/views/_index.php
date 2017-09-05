<?php $part = (isset($_GET['part']) ? $_GET['part'] : null); ?>

<?php if (!$part) : ?>
  <section class="section">
    <div class="g-row">
      <div class="g-col --12@xs">
        <div class="k_page-subtitle ta--c p--t-1@xs p--b-1@xs">
          <h2 class="k_logo k_logo--home p--b-0@xs"><b>kernl</b>(ui)
          <?= "<span class='fs--sm fw--300' style='letter-spacing: -1px;'>" . getVersion() . "</span>"; ?></h2>
          <p class="text-style-block">A scalable and modular front-end framework<br>
          for efficiently building Northeastern University web interfaces.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="section p--t-2@xs k_bg-light">
    <div class="g-row">
      <?php foreach (getKernlFiles() as $file) : ?>
        <div class="g-col --12@xs --6@sm --3@md --2@xl">
          <div class="card card--overlay card--middle card--sg-home">
            <a class="card__link" href="/?part=<?= $file; ?>">
              <div class="card__graphic"></div>
              <div class="card__body">
                <h4 class="card__title"><?= $file; ?></h4>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

<?php else : ?>
  <?php include'docs/views/parts/'.$part.'.php'; ?>

<?php endif; ?>
