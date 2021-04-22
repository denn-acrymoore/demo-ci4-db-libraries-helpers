<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<?= helper('number'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>Number Helper</h1>
    </div>
  </div>

  <br>

  <!-- NUMBER_TO_SIZE($NUM_OF_BYTES, $PRECISION=1, $LOCALE=NULL) -->
  <div class="row">
    <div class="col">
      <h3>number_to_size($num_of_bytes, $precision=1, $locale=null)</h3>
      <p>number_to_size(4928104) = <?= number_to_size(4928104); ?></p>
      <p>number_to_size(4928104, 2) = <?= number_to_size(4928104, 2); ?></p>
      <p>number_to_size(4928104, 3) = <?= number_to_size(4928104, 3); ?></p>

      <br>

      <p>number_to_size(4928104, 1, 'en_US') = <?= number_to_size(4928104, 1, 'en_US'); ?></p>
      <p>number_to_size(4928104, 1, 'fr_FR') = <?= number_to_size(4928104, 1, 'fr_FR'); ?></p>
      <p>number_to_size(4928104, 1, 'fr_fr') = <?= number_to_size(4928104, 1, 'fr_fr'); ?></p>
      <p>number_to_size(4928104, 1, 'id') = <?= number_to_size(4928104, 1, 'id'); ?></p>

      <br>

      <p>number_to_size(1811384811861181618) = <?= number_to_size(1811384811861181618); ?></p>
      <p>number_to_size(1811384811861181618, 2) = <?= number_to_size(1811384811861181618, 2); ?></p>
      <p>number_to_size(1811384811861181618, 3) = <?= number_to_size(1811384811861181618, 3); ?></p>
    </div>
  </div>

  <br>

  <!-- NUMBER_TO_AMOUNT($NUM_OF_BYTES, $PRECISION=0, $LOCALE=NULL) -->
  <div class="row">
    <div class="col">
      <h3>number_to_amount($num_of_bytes, $precision=0, $locale=null)</h3>
      <p>number_to_amount(4928104) = <?= number_to_amount(4928104); ?></p>
      <p>number_to_amount(4928104, 1) = <?= number_to_amount(4928104, 1); ?></p>
      <p>number_to_amount(4928104, 2) = <?= number_to_amount(4928104, 2); ?></p>
      <p>number_to_amount(4928104, 3) = <?= number_to_amount(4928104, 3); ?></p>
      <p>number_to_amount(4928104, 4) = <?= number_to_amount(4928104, 4); ?></p>
      <p>number_to_amount(4928104, 4, 'en_US') = <?= number_to_amount(4928104, 4, 'en_US'); ?></p>
      <p>number_to_amount(4928104, 4, 'fr_FR') = <?= number_to_amount(4928104, 4, 'fr_FR'); ?></p>
      <p>number_to_amount(4928104, 4, 'id') = <?= number_to_amount(4928104, 4, 'id'); ?></p>
    </div>
  </div>

  <br>

  <!-- NUMBER_TO_CURRENCY($NUM_OF_BYTES, $CURRENCY, $LOCALE=NULL, $FRACTION=0) -->
  <div class="row">
    <div class="col">
      <h3>number_to_currency($num_of_bytes, $currency, $locale=null, $fraction=0)</h3>
      <p>number_to_currency(1234.56, 'USD') = <?= number_to_currency(1234.56, 'USD'); ?></p>
      <p>number_to_currency(1234.56, 'EUR') = <?= number_to_currency(1234.56, 'EUR'); ?></p>
      <p>number_to_currency(1234.56, 'GBP') = <?= number_to_currency(1234.56, 'GBP'); ?></p>
      <p>number_to_currency(1234.56, 'IDR') = <?= number_to_currency(1234.56, 'IDR'); ?></p>
      <p>number_to_currency(1234.56, 'JPY') = <?= number_to_currency(1234.56, 'JPY'); ?></p>
      <p>number_to_currency(1234.56, 'INR') = <?= number_to_currency(1234.56, 'INR'); ?></p>
      <p>number_to_currency(1234.56, 'MYR') = <?= number_to_currency(1234.56, 'MYR'); ?></p>
    </div>
  </div>

  <br>

  <!-- NUMBER_TO_ROMAN($NUM) -->
  <div class="row">
    <div class="col">
      <h3>number_to_roman($num)</h3>
      <p>NOTE: Fungsi ini hanya mendukung angka dari 1 hingga 3999 implisit. Jika diluar rentang ini, maka fungsi ini akan mengembalikan null</p>

      <br>

      <p>number_to_roman(0) = <?= number_to_roman(0); ?></p>
      <p>number_to_roman(1) = <?= number_to_roman(1); ?></p>
      <p>number_to_roman(1234) = <?= number_to_roman(1234); ?></p>
      <p>number_to_roman(3999) = <?= number_to_roman(3999); ?></p>
      <p>number_to_roman(4000) = <?= number_to_roman(4000); ?></p>
    </div>
  </div>

</div>

</div>

<?= $this->endSection(); ?>