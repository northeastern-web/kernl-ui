<?php $part = (isset($_GET['part']) ? $_GET['part'] : null); ?>
<?php include 'functions.php'; ?>

<!doctype html>
<html id="kernl">
  <?php include 'resources/views/_head.php'; ?>
  <body class="chrm<?= $part ? ' part--' . $part : ' home'; ?>">
    <?php include 'resources/views/_header.php'; ?>

    <div class="k_wrap" id="main_content" role="document">
      <main class="k_main" role="document">
        <?php include 'resources/views/_index.php'; ?>
      </main>
      <?php include 'resources/views/_nav.php'; ?>
    </div>

    <?php include 'resources/views/_footer.php'; ?>
  </body>
</html>
