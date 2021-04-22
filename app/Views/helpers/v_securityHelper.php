<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<?= helper('security'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>Security Helper</h1>
    </div>
  </div>

  <br>

  <!-- SANITIZE_FILENAME($FILENAME) -->
  <div class="row">
    <div class="col">
      <h3>sanitize_filename($filename)</h3>
      <p>NOTE: <br>
        - Ini merupakan singkatan dari fungsi \Config\Services::security()->sanitizeFilename di dalam Security Library. <br>
        - Fungsi ini digunakan untuk mencegah akses ilegal ke file di directory lainnya, dan gangguan keamanan lainnya (simbol yang tidak seharusnya, dll).
      </p>

      <br>

      <p>sanitize_filename("/directory/'haha.png'/<?= htmlspecialchars('<br>'); ?>"): </p>
      <p><?= sanitize_filename("/directory/'haha.png'/<br>"); ?></p>

      <br>

      <p>\Config\Services::security()->sanitizeFilename("/directory/'haha.png'/<?= htmlspecialchars('<br>'); ?>'"): </p>
      <p><?= \Config\Services::security()->sanitizeFilename("/directory/'haha.png'/<br>"); ?></p>
    </div>
  </div>

  <br>

  <!-- STRIP_IMAGE_TAGS($STR) -->
  <div class="row">
    <div class="col">
      <h3>strip_image_tags($str)</h3>
      <p>strip_image_tags("<?= htmlspecialchars("<img src='images/haha.png'>"); ?>"): </p>
      <p><?= strip_image_tags("<img src='images/haha.png'>"); ?></p>
    </div>
  </div>

  <br>

  <!-- ENCODE_PHP_TAGS($STR) -->
  <div class="row">
    <div class="col">
      <h3>encode_php_tags($str)</h3>
      <p>encode_php_tags("<?= htmlspecialchars('<?php echo $virus; ?>'); ?>"): </p>
      <p><?= encode_php_tags('<?php echo $virus; ?>'); ?></p>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>