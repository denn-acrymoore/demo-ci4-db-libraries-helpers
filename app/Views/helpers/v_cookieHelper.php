<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<?= helper('cookie'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>Cookie Helper</h1>
    </div>
  </div>

  <br>

  <!-- SET_COOKIE($NAME, $VALUE='', $EXPIRE='', $DOMAIN='', $PATH='/', $PREFIX='', $HTTPSONLY=FALSE, $HIDEFROMJS=FALSE, $SAMESITE='config/App.php') -->
  <div class="row">
    <div class="col">
      <h3>set_cookie($name, $value='', $expire='', $domain='', $path='/', $prefix='', $httpsOnly=false, $hideFromJs=false, $sameSite='config/App.php')</h3>
      <p>set_cookie('username', 'John Doe', 60)</p>
      <?php set_cookie('username', 'John Doe', 60); ?>

      <p>set_cookie('color', 'Blue', 60)</p>
      <?php set_cookie('color', 'Blue', 60); ?>
    </div>
  </div>

  <br>

  <!-- GET_COOKIE($INDEX, $XSSCLEAN=FALSE) -->
  <div class="row">
    <div class="col">
      <h3>get_cookie($index, $xssClean=false)</h3>
      <p>get_cookie('username', true): <?= get_cookie('username', true); ?></p>
      <p>get_cookie('color', true): <?= get_cookie('color', true); ?></p>
    </div>
  </div>

  <br>

  <!-- DELETE_COOKIE($NAME, $DOMAIN='', $PATH='/', $PREFIX='') -->
  <div class="row">
    <div class="col">
      <h3>delete_cookie($name, $domain='', $path='/', $prefix='')</h3>
      <p>delete_cookie('username')</p>
      <?php //delete_cookie('username')
      ?>

      <p>delete_cookie('color')</p>
      <?php //delete_cookie('color')
      ?>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>