<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<?= helper('test'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>Test Helper</h1>
    </div>
  </div>

  <br>

  <!-- FAKE($MODEL, ARRAY $OVERRRIDES=NULL) -->
  <div class="row">
    <div class="col">
      <h3>fake($model, array $overrides=null)</h3>
      <p>$user = fake('App\Models\UserModel')</p>
      <?php
      $user = fake('App\Models\UserModel');
      ?>
    </div>
  </div>

  <?= $this->endSection(); ?>