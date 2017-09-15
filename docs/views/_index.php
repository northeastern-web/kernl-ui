<?php $part = (isset($_GET['part']) ? $_GET['part'] : null); ?>

<?php if (!$part) : ?>
  <section class="section">
    <div class="row">
      <div class="col --12@xs">
        <div class="k_page-subtitle ta--c pt--2@xs pb--1@xs">
          <h2 class="k_logo k_logo--home pb--0@xs"><b>kernl</b>(ui)
          <?= "<span class='fs--sm fw--300' style='letter-spacing: -1px;'>" . getVersion() . "</span>"; ?></h2>
          <p class="text-style-block mb--0@xs">A scalable and modular front-end framework<br>
          for efficiently building Northeastern University web interfaces.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="section pt--2@xs k_bg-light">
    <div class="row">
      <?php foreach (getKernlFiles() as $file) : ?>
        <div class="col --12@xs --6@sm --3@md --2@xl">
          <div class="card --overlay --middle --sg-home">
            <a class="__link" href="/?part=<?= $file; ?>">
              <div class="__graphic"></div>
              <div class="__body">
                <h4 class="__title"><?= $file; ?></h4>
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
