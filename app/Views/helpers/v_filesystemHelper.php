<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<?= helper('filesystem'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>Filesystem Helper</h1>
    </div>
  </div>

  <br>

  <!-- DIRECTORY_MAP($SOURCE_DIR, $DIRECTORY_DEPTH, $HIDDEN) -->
  <div class="row">
    <div class="col">
      <h3>directory_map($sourceDir, $directoryDepth=0, $hidden=false)</h3>
      <p>NOTE: Path selalu relatif terhadap index.php </p>
      <p>directory_map('./images'): </p>
      <?php d(directory_map('./images')); ?>

      <br>

      <p>directory_map('./images', 1, true): </p>
      <?php d(directory_map('./images', 1, false)); ?>
    </div>
  </div>

  <br>

  <!-- GET_FILENAMES($SOURCE_DIR, $INCLUDE_PATH) -->
  <div class="row">
    <div class="col">
      <h3>get_filenames($sourceDir, $include_path=false)</h3>
      <p>NOTE: Path selalu relatif terhadap index.php </p>
      <p>get_filenames('./images'): </p>
      <?php d(get_filenames('./images')); ?>

      <br>

      <p>get_filenames('./images', true): </p>
      <?php d(get_filenames('./images', true)); ?>
    </div>
  </div>

  <br>

  <!-- SYMBOLIC_PERMISSIONS($PERMISSIONS) -->
  <div class="row">
    <div class="col">
      <h3>symbolic_permissions($permissions)</h3>
      <p>NOTE: fileperms() milik php sendiri </p>

      <br>

      <?php
      $permissions = fileperms('./images/memes')
      ?>

      <p>$permissions = fileperms('./images/memes'): <?= $permissions; ?></p>
      <p>symbolic_permissions($permissions): <?= symbolic_permissions($permissions); ?></p>

      <br>

      <?php
      $permissions = fileperms('./images/memes/Business_Intensifies.jpg')
      ?>

      <p>$permissions = fileperms('./images/memes/Business_Intensifies.jpg'): <?= $permissions; ?></p>
      <p>symbolic_permissions($permissions): <?= symbolic_permissions($permissions); ?></p>
    </div>

  </div>

  <?= $this->endSection(); ?>