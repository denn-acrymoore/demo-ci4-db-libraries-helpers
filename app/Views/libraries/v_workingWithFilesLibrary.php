<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>Working With Files Library</h1>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col">
      <h3>Getting a File instance</h3>
      <p>$file = new \CodeIgniter\Files\File(__DIR__.'test-files/subfolder1/test-working-with-file.txt', true);</p>
      <?php
      $file = new \CodeIgniter\Files\File(__DIR__ . '\..\..\..\public\test-files\subfolder1\test-working-with-file.txt', true);
      ?>

    </div>
  </div>

  <br>

  <!-- FUNCTIONALITY OF $FILE -->
  <div class="row">
    <div class="col">
      <h3>Functionality of $file:</h3>
      <p>$file->isWritable() ? $file->openFile('rw+') : 'Is Not Writable'= <?= $file->isWritable() ? $file->openFile('rw+') : 'Is Not Writable'; ?></p>
      <p>$file->getBasename(): <?= $file->getBasename(); ?></p>
      <p>$file->getRandomName(): <?= $file->getRandomName(); ?></p>
      <p>$file->move(__DIR__ . '\..\..\..\public\test-files\subfolder2'):
        <?php $file->move(__DIR__ . '\..\..\..\public\test-files');
        ?></p>
    </div>
  </div>



  <?= $this->endSection(); ?>