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
    <div class="col w-1/3@t p--y-2">
      <div class="btn_group">
        <a class="btn px-0h py-0h" href="javascript:PODShare('facebook', '<?php echo SHARE_URL; ?>', 555, 350)">
          <i class="-thin ma-0" data-feather="facebook"></i>
        </a>
        <a class="btn px-0h py-0h" href="javascript:PODShare('twitter', '<?php echo SHARE_URL; ?>', 520, 442)">
          <i class="-thin ma-0" data-feather="twitter"></i>
        </a>
        <a class="btn px-0h py-0h" href="javascript:PODShare('linkedin', '<?php echo SHARE_URL; ?>', 550, 442)">
          <i class="-thin ma-0" data-feather="linkedin"></i>
        </a>
        <a class="btn px-0h py-0h" id="podshare_email" href="javascript:PODShare('email', '<?php echo SHARE_URL; ?>', 100, 100)">
          <i class="-thin ma-0" data-feather="mail"></i>
        </a>
      </div>
    </div>
  </div>
</section>
