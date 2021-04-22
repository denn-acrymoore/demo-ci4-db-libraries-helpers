<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>URL Helper</h1>
    </div>
  </div>

  <br>

  <!-- SITE_URL() -->
  <div class="row">
    <div class="col">
      <h3>site_url()</h3>
      <p>site_url(): <?= site_url(); ?></p>
      <p>site_url('/apalah'): <?= site_url('/apalah'); ?></p>
    </div>
  </div>

  <br>

  <!-- BASE_URL() -->
  <div class="row">
    <div class="col">
      <h3>base_url()</h3>
      <p>base_url(): <?= base_url(); ?></p>
      <p>base_url('/apalah'): <?= base_url('/apalah'); ?></p>
    </div>
  </div>

  <br>

  <!-- CURRENT_URL() -->
  <div class="row">
    <div class="col">
      <h3>current_url()</h3>
      <p>current_url(): <?= current_url(); ?></p>
      <p>base_url(uri_string()): <?= base_url(uri_string()); ?></p>
    </div>
  </div>

  <br>

  <!-- PREVIOUS_URL() -->
  <div class="row">
    <div class="col">
      <h3>previous_url()</h3>
      <p>previous_url(): <?= previous_url(); ?></p>
    </div>
  </div>

  <br>

  <!-- URI_STRING() -->
  <div class="row">
    <div class="col">
      <h3>uri_string()</h3>
      <p>uri_string(): <?= uri_string(); ?></p>
      <p>uri_string(true): <?= uri_string(true); ?></p>
      <!-- NOTE: 
          - uri_string(true) akan berikan path saja dari Current URL relatif
            terhadap base_url() .
          - Tambahkan /helpers/ pada base url di file .env untuk melihat perbedaannya. -->
    </div>
  </div>

  <br>

  <!-- INDEX_PAGE() -->
  <div class="row">
    <div class="col">
      <h3>index_page()</h3>
      <p>index_page(): <?= index_page(); ?></p>
    </div>
  </div>

  <br>

  <!-- ANCHOR() -->
  <div class="row">
    <div class="col">
      <h3>anchor()</h3>
      <p>anchor('/helpers/url-helper', 'Click Me', ['title' => 'Ini title']): <?= anchor('/helpers/url-helper', 'Click Me', ['title' => 'Ini title']); ?></p>
    </div>
  </div>

  <br>

  <!-- AUTO_LINK($STR, $TYPE, $POPUP) -->
  <div class="row">
    <div class="col">
      <h3>auto_link($str, $type, $popup)</h3>
      <?php
      $str = 'www.website.co.id tono@website.com';
      ?>
      <p>$str: <?= $str; ?></p>
      <p>auto_link($str, 'url', false): <?= auto_link($str, 'url', false); ?></p>
      <p>auto_link($str, 'email', false): <?= auto_link($str, 'email', false); ?></p>
      <p>auto_link($str, 'both', true): <?= auto_link($str, 'both', true); ?></p>
    </div>
  </div>

  <br>

  <!-- URL_TITLE($STR, $SEPARATOR, $LOWERCASE) -->
  <div class="row">
    <div class="col">
      <h3>url_title($str, $separator, $lowercase)</h3>
      <?php
      $str = 'Game Of Throne';
      ?>
      <p>$str: <?= $str; ?></p>
      <p>url_title($str, '-', true) <?= url_title($str, '-', true) ?></p>
      <p>url_title($str, '_', false) <?= url_title($str, '_', false) ?></p>
      <p>url_title($str) <?= url_title($str) ?></p>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>