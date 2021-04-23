<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<?= helper('xml'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>XML Helper</h1>
    </div>
  </div>

  <br>

  <!-- XML_CONVERT($STR, $PROTECT_ALL=FALSE) -->
  <div class="row">
    <div class="col">
      <h3>xml_convert($str, $protectAll=false)</h3>
      <p>
        NOTE: <br>
        - Fungsi ini akan menjaga karakter - karakter XML dengan cara mengubah tanda & <> ' " dan - sehingga tidak dibaca oleh HTML sebagai sebuah elemen HTML.
      </p>

      <br>

      <p>
        <b>xml_convert("<?= htmlspecialchars('<books> <school-book> "Science & Philosophy (&#123;)( &foo; )" </school-book> </books>'); ?>"):</b>
        <br>
        <?= xml_convert('<books> <school-book> "Science & Philosophy (&#123;)( &foo; )" </school-book> </books>'); ?>
      </p>

      <br>

      <p>
        <b>htmlspecialchars(xml_convert("<?= htmlspecialchars('<books> <school-book> "Science & Philosophy (&#123;)( &foo; )" </school-book> </books>'); ?>")):</b>
        <br>
        <?= htmlspecialchars(xml_convert('<books> <school-book> "Science & Philosophy (&#123;)( &foo; )" </school-book> </books>')); ?>
      </p>
    </div>
  </div>

  <br>

  <!-- XML_CONVERT($STR, $PROTECT_ALL=TRUE) -->
  <div class="row">
    <div class="col">
      <h3>xml_convert($str, $protectAll=true)</h3>
      <p>
        <b>xml_convert("<?= htmlspecialchars('<books> <school-book> "Science & Philosophy (&#123;)( &foo; )" </school-book> </books>'); ?>", true):</b>
        <br>
        <?= xml_convert('<books> <school-book> "Science & Philosophy (&#123;)( &foo; )" </school-book> </books>', true); ?>
      </p>

      <br>

      <p>
        <b>htmlspecialchars(xml_convert("<?= htmlspecialchars('<books> <school-book> "Science & Philosophy (&#123;)( &foo; )" </school-book> </books>'); ?>", true)):</b>
        <br>
        <?= htmlspecialchars(xml_convert('<books> <school-book> "Science & Philosophy (&#123;)( &foo; )" </school-book> </books>', true)); ?>
      </p>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>