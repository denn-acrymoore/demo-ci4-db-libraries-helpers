<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<?= helper('form'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>Form Helper</h1>
    </div>
  </div>

  <br>

  <!-- ESC($STRING) -->
  <div class="row">
    <div class="col">
      <h3>esc($string)</h3>
      <?php
      $string = 'This is a string with a "quoted" text';
      ?>
      <p>NOTE: </p>
      <p>- esc() bukan bagian dari form helper sehingga tidak perlu load form helper terlebih dahulu.</p>
      <p>- Fungsi - fungsi di dalam form helper akan otomatis melakukan esc() bila nilai yang diberikan dalam bentuk associative array.</p>

      <br>

      <p>$string: <?= $string; ?></p>
      <p>esc($string): <?= esc($string); ?></p>
      <p>htmlspecialchars(esc($string)): <?= htmlspecialchars(esc($string)); ?></p>
    </div>
  </div>

  <br>

  <!-- CONTOH FORM -->
  <div class="row">
    <div class="col">
      <h3>Contoh Form yang dibuat dengan Form Helper</h3>
      <?php
      $action = '#';
      $attributes = [
        'class' => 'form',
        'id'    => 'myForm'
      ];
      ?>
      <?= form_open($action, $attributes); ?>

      <label for="email">Email: </label>
      <?= form_input([
        'name'        => 'email',
        'id'          => 'email',
        'placeholder' => 'Insert Email'
      ], '', null, 'email'); ?>

      <br><br>

      <label for="password">Password: </label>
      <?= form_password([
        'name'        => 'password',
        'id'          => 'password',
        'placeholder' => 'Insert Password'
      ]); ?>

      <br><br>

      <label for="shirts-size">T-Shirt Size: </label>
      <?= form_dropdown('shirts-size', [
        'small'   => 'Small Shirt',
        'medium'  => 'Medium Shirt',
        'large'   => 'Large Shirt',
        'xlarge'  => 'Extra Large Shirt'
      ], 'large'); ?>

      <br><br>

      <label for="shirts-color">T-Shirt Color: </label>
      <?= form_multiselect('shirts-color', [
        'red'     => 'Red',
        'green'   => 'Green',
        'blue'    => 'Blue',
        'yellow'  => 'Yellow',
        'orange'  => 'Orange',
        'purple'  => 'Purple'
      ], ['red', 'green']); ?>

      <br><br>

      <label for="payment-method">Payment Method: </label>
      <br>
      <?= form_radio([
        'name'  => 'payment-method',
        'id'    => 'cash-payment'
      ], 'cash', false); ?>
      <label for="cash-payment">Cash</label>

      <?= form_radio([
        'name'  => 'payment-method',
        'id'    => 'debit-payment'
      ], 'debit', false); ?>
      <label for="debit-payment">Debit</label>

      <?= form_radio([
        'name'  => 'payment-method',
        'id'    => 'credit-payment'
      ], 'credit', false); ?>
      <label for="credit-payment">Credit</label>

      <br><br>

      <?= form_submit("mySubmit", "Submit Post!"); ?>

      <br><br>

      <?= form_close(); ?>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>