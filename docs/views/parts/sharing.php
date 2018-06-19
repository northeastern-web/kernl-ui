<?php
function url_elements() {
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
  return urlencode($protocol.$url);
}
define( 'SHARE_URL', url_elements() );
?>

<section class="section">
  <div class="row">
    <div class="col --12@xs --4@md p--y-2@xs">
      <header class="k_section__header">Base</header>
      <ul class="share">
        <li>
          <a href="javascript:PODShare('facebook', '<?php echo SHARE_URL; ?>', 555, 350)">
            <i class="__icon feather --thin" data-feather="facebook"></i>
          </a>
          </a>
        </li>
        <li>
          <a href="javascript:PODShare('twitter', '<?php echo SHARE_URL; ?>', 520, 442)">
            <i class="__icon feather --thin" data-feather="twitter"></i>
          </a>
        </li>
        <li>
          <a href="javascript:PODShare('linkedin', '<?php echo SHARE_URL; ?>', 550, 442)">
            <i class="__icon feather --thin" data-feather="briefcase"></i>
          </a>
        </li>
        <li>
          <a id="podshare_email" href="javascript:PODShare('email', '<?php echo SHARE_URL; ?>', 100, 100)">
            <i class="__icon feather --thin" data-feather="mail"></i>
          </a>
        </li>
      </ul>
    </div>

    <div class="col --12@xs --4@md p--y-2@xs">
      <header class="k_section__header">Stacked</header>
      <ul class="share --stacked">
        <li>
          <a href="javascript:PODShare('facebook', '<?php echo SHARE_URL; ?>', 555, 350)">
            <i class="__icon feather --thin" data-feather="facebook"></i>
          </a>
        </li>
        <li>
          <a href="javascript:PODShare('twitter', '<?php echo SHARE_URL; ?>', 520, 442)">
            <i class="__icon feather --thin" data-feather="twitter"></i>
          </a>
        </li>
        <li>
          <a href="javascript:PODShare('linkedin', '<?php echo SHARE_URL; ?>', 550, 442)">
            <i class="__icon feather --thin" data-feather="briefcase"></i>
          </a>
        </li>
        <li>
          <a id="podshare_email" href="javascript:PODShare('email', '<?php echo SHARE_URL; ?>', 100, 100)">
            <i class="__icon feather --thin" data-feather="mail"></i>
          </a>
        </li>
      </ul>
    </div>

    <div class="col --12@xs --4@md p--y-2@xs">
      <header class="k_section__header">Flex/Responsive</header>
      <ul class="share --flex">
        <li>
          <a href="javascript:PODShare('facebook', '<?php echo SHARE_URL; ?>', 555, 350)">
            <i class="__icon feather --thin" data-feather="facebook"></i>
          </a>
        </li>
        <li>
          <a href="javascript:PODShare('twitter', '<?php echo SHARE_URL; ?>', 520, 442)">
            <i class="__icon feather --thin" data-feather="twitter"></i>
          </a>
        </li>
        <li>
          <a href="javascript:PODShare('linkedin', '<?php echo SHARE_URL; ?>', 550, 442)">
            <i class="__icon feather --thin" data-feather="briefcase"></i>
          </a>
        </li>
        <li>
          <a id="podshare_email" href="javascript:PODShare('email', '<?php echo SHARE_URL; ?>', 100, 100)">
            <i class="__icon feather --thin" data-feather="mail"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>
