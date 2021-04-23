<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<?= helper('date'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>Date Helper</h1>
    </div>
  </div>

  <br>

  <!-- NOW($TIMEZONE=NULL) -->
  <div class="row">
    <div class="col">
      <h3>now($timezone=null)</h3>
      <p>now(): <?= now(); ?></p>
      <p>now('America/Chicago'): <?= now('America/Chicago'); ?></p>
      <p>now('Australia/Victoria'): <?= now('Australia/Victoria'); ?></p>
      <p>now('Asia/Jakarta'): <?= now('Asia/Jakarta'); ?></p>
      <p>now('UTC'): <?= now('UTC'); ?></p>

    </div>
  </div>

  <br>

  <!-- TIMEZONE_SELECT($CLASS='', $DEFAULT='', $WHAT=DateTimeZone::ALL, $COUNTRY=NULL) -->
  <div class="row">
    <div class="col">
      <h3>timezone_select($class='', $default='', $what=DateTimeZone::ALL, $country=null</h3>
      <p>timezone_select():</p>
      <p><?= timezone_select(); ?></p>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>