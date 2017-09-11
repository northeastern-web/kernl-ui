<?php
function url_elements() {
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
  return urlencode($protocol.$url);
}
define( 'SHARE_URL', url_elements() );
?>

<section class="section">
  <div class="g-row">
    <div class="g-col --12@xs --6@md p--y-2@xs">
      <header class="k_section__header">Base</header>
      <ul class="share-buttons">
        <li>
          <a href="javascript:PODShare('facebook', '<?php echo SHARE_URL; ?>', 555, 350)">
            <i class="ion ion-social-facebook"></i></a>
          </a>
        </li>
        <li>
          <a href="javascript:PODShare('twitter', '<?php echo SHARE_URL; ?>', 520, 442)">
            <i class="ion ion-social-twitter"></i>
          </a>
        </li>
        <li>
          <a href="javascript:PODShare('linkedin', '<?php echo SHARE_URL; ?>', 550, 442)">
            <i class="ion ion-social-linkedin"></i>
          </a>
        </li>
        <li>
          <a id="podshare_email" href="javascript:PODShare('email', '<?php echo SHARE_URL; ?>', 100, 100)">
            <i class="ion ion-email"></i>
          </a>
        </li>
      </ul>
    </div>
    <div class="g-col --12@xs --6@md p--y-2@xs">
      <header class="k_section__header">Stacked</header>
      <ul class="share-buttons share-buttons--stacked">
        <li>
          <a href="javascript:PODShare('facebook', '<?php echo SHARE_URL; ?>', 555, 350)">
            <i class="ion ion-social-facebook"></i></a>
          </a>
        </li>
        <li>
          <a href="javascript:PODShare('twitter', '<?php echo SHARE_URL; ?>', 520, 442)">
            <i class="ion ion-social-twitter"></i>
          </a>
        </li>
        <li>
          <a href="javascript:PODShare('linkedin', '<?php echo SHARE_URL; ?>', 550, 442)">
            <i class="ion ion-social-linkedin"></i>
          </a>
        </li>
        <li>
          <a id="podshare_email" href="javascript:PODShare('email', '<?php echo SHARE_URL; ?>', 100, 100)">
            <i class="ion ion-email"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>
