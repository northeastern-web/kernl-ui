<?php
$part = filter_var($_GET['part'], FILTER_SANITIZE_STRING);
$part = (isset($part) ? $part : null);
include 'functions.php';
?>

<!doctype html>
<html id="kernl">
<?php include 'docs/views/_head.php'; ?>

<body class="chrm<?= $part ? ' part--' . $part : ' home'; ?>">
    <?php include 'docs/views/_header.php'; ?>

    <div class="k_wrap" id="main_content" role="document">
        <main class="k_main main" role="document">
            <?php include 'docs/views/_index.php'; ?>
        </main>
        <?php include 'docs/views/_nav.php'; ?>
    </div>

    <?php include 'docs/views/_footer.php'; ?>
</body>

</html>
