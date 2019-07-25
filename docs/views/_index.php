<?php $part = (isset($_GET['part']) ? $_GET['part'] : null); ?>

<?php if (!$part) : ?>
  <section class="section">
    <div class="row">
      <div class="col">
        <div class="k_page-subtitle ta-c pt-2 pb-1">
          <h2 class="k_logo k_logo--home pb-0"><b>kernl</b>(ui)
          <?= "<span class='fs-sm fw-300' style='letter-spacing: -1px;'>" . getVersion() . "</span>"; ?></h2>
          <p class="text-style-block mb-0">A scalable and modular front-end framework<br>
          for efficiently building Northeastern University web interfaces.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="section pt-2 k_bg-light --full">
    <div class="row">
      <?php foreach (getKernlFiles() as $file) : ?>
        <div class="col w-1/3@t w-1/4@d w-20@w">
          <div class="card -overlay -middle --sg-home">
            <a class="card_link" href="<?= $url; ?>/?part=<?= $file; ?>">
              <div class="card_media"></div>
              <div class="card_body">
                <h4 class="card_title"><?= $file; ?></h4>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

<?php else : ?>
  <?php include 'docs/views/parts/'.$part.'.php'; ?>

<?php endif; ?>
