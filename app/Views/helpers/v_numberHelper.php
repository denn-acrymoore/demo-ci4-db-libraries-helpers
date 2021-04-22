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

  <!-- IMG($SRC, $TREAT_AS_ROUTED_URI_STRING=FALSE, $ADDITIONAL_ATTRIBUTES) -->
  <div class="row">
    <div class="col">
      <h3>img($src, $treatAsRoutedURIString=false, $additionalAttributes)</h3>
      <p>img('images/memes/Business_Intensifies.jpg', false, ['width' => 200]): </p>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>