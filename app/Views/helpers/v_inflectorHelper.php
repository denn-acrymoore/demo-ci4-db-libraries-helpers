<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<?= helper('inflector'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>Inflector Helper</h1>
    </div>
  </div>

  <br>

  <!-- SINGULAR($STRING) -->
  <div class="row">
    <div class="col">
      <h3>singular($string)</h3>
      <?php $string = 'zebra crosses'; ?>
      <p>$string: <?= $string; ?></p>
      <p>singular($string): <?= singular($string); ?></p>
    </div>
  </div>

  <br>

  <!-- PLURAL($STRING) -->
  <div class="row">
    <div class="col">
      <h3>plural($string)</h3>
      <?php $string = 'pastry'; ?>
      <p>$string: <?= $string; ?></p>
      <p>plural($string): <?= plural($string); ?></p>
    </div>
  </div>

  <br>

  <!-- COUNTER($COUNT, $STRING) -->
  <div class="row">
    <div class="col">
      <h3>counted($count, $string)</h3>
      <?php
      $count  = 999;
      $string = 'calory';
      ?>
      <p>$count: <?= $count; ?></p>
      <p>$string: <?= $string; ?></p>
      <p>counted($count, $string): <?= counted($count, $string); ?></p>
    </div>
  </div>

  <br>

  <!-- CAMELIZE($STRING) -->
  <div class="row">
    <div class="col">
      <h3>camelize($string)</h3>
      <?php $string1 = 'my_project_file'; ?>
      <p>$string1: <?= $string1; ?></p>
      <p>camelize($string1): <?= camelize($string1); ?></p>

      <br>

      <?php $string2 = 'My Project File'; ?>
      <p>$string2: <?= $string2; ?></p>
      <p>camelize($string2): <?= camelize($string2); ?></p>
    </div>
  </div>

  <br>

  <!-- PASCALIZE($STRING) -->
  <div class="row">
    <div class="col">
      <h3>pascalize($string)</h3>
      <?php $string1 = 'my_project_file'; ?>
      <p>$string1: <?= $string1; ?></p>
      <p>pascalize($string1): <?= pascalize($string1); ?></p>

      <br>

      <?php $string2 = 'my project file'; ?>
      <p>$string2: <?= $string2; ?></p>
      <p>pascalize($string2): <?= pascalize($string2); ?></p>
    </div>
  </div>

  <br>

  <!-- UNDERSCORE($STRING) -->
  <div class="row">
    <div class="col">
      <h3>underscore($string)</h3>
      <?php $string = 'my       stuff     -                    file'; ?>
      <!-- NOTE: php akan otomatis buang whitespace berlebih di dalam string -->

      <p>$string: <?= htmlspecialchars($string); ?></p>
      <p>underscore($string): <?= underscore($string); ?></p>
    </div>
  </div>

  <br>

  <!-- HUMANIZE($STRING, $SEPARATOR) -->
  <div class="row">
    <div class="col">
      <h3>humanize($string, $separator)</h3>
      <?php
      $string1    = 'sensitive_file_don\'t_look';
      $string2    = 'sensitive*file*don\'t*look';
      $separator  = '*';
      ?>
      <p>$string1: <?= $string1; ?></p>
      <p>humanize($string1): <?= humanize($string1); ?></p>

      <br>

      <p>$string2: <?= $string2; ?></p>
      <p>$separator: <?= $separator; ?></p>
      <p>humanize($string2, $separator): <?= humanize($string2, $separator); ?></p>
    </div>
  </div>

  <br>

  <!-- IS_PLURALIZABLE($STRING) -->
  <div class="row">
    <div class="col">
      <h3>is_pluralizable($string)</h3>
      <?php
      $string1 = 'information';
      $string2 = 'apple';
      $string3 = 'apples';
      ?>
      <p>$string1: <?= $string1; ?></p>
      <p>is_pluralizable($string1): <?= is_pluralizable($string1) ? 'iya' : 'kagak'; ?></p>

      <br>

      <p>$string2: <?= $string2; ?></p>
      <p>is_pluralizable($string2): <?= is_pluralizable($string2) ? 'iya' : 'kagak'; ?></p>

      <br>

      <p>$string3: <?= $string3; ?></p>
      <p>is_pluralizable($string3): <?= is_pluralizable($string3) ? 'iya' : 'kagak'; ?></p>
    </div>
  </div>

  <br>

  <!-- DASHERIZE($STRING) -->
  <div class="row">
    <div class="col">
      <h3>dasherize($string)</h3>
      <?php $string = 'this_is_sparta'; ?>
      <p>$string: <?= $string; ?></p>
      <p>dasherize($string): <?= dasherize($string); ?></p>
    </div>
  </div>

  <br>

  <!-- ORDINAL($INTEGER) -->
  <div class="row">
    <div class="col">
      <h3>ordinal($integer)</h3>
      <?php
      $integer1 = 1;
      $integer2 = 2;
      $integer3 = 3;
      $integer4 = 4;
      $integer5 = 21;
      ?>
      <p>$integer1: <?= $integer1; ?></p>
      <p>ordinal($integer1): <?= ordinal($integer1); ?></p>

      <br>

      <p>$integer2: <?= $integer2; ?></p>
      <p>ordinal($integer2): <?= ordinal($integer2); ?></p>

      <br>

      <p>$integer3: <?= $integer3; ?></p>
      <p>ordinal($integer3): <?= ordinal($integer3); ?></p>

      <br>

      <p>$integer4: <?= $integer4; ?></p>
      <p>ordinal($integer4): <?= ordinal($integer4); ?></p>

      <br>

      <p>$integer5: <?= $integer5; ?></p>
      <p>ordinal($integer5): <?= ordinal($integer5); ?></p>
    </div>
  </div>

  <br>

  <!-- ORDINALIZE($INTEGER) -->
  <div class="row">
    <div class="col">
      <h3>ordinalize($integer)</h3>
      <?php
      $integer1 = 1;
      $integer2 = 2;
      $integer3 = 3;
      $integer4 = 4;
      $integer5 = 21;
      ?>
      <p>$integer1: <?= $integer1; ?></p>
      <p>ordinalize($integer1): <?= ordinalize($integer1); ?></p>

      <br>

      <p>$integer2: <?= $integer2; ?></p>
      <p>ordinalize($integer2): <?= ordinalize($integer2); ?></p>

      <br>

      <p>$integer3: <?= $integer3; ?></p>
      <p>ordinalize($integer3): <?= ordinalize($integer3); ?></p>

      <br>

      <p>$integer4: <?= $integer4; ?></p>
      <p>ordinalize($integer4): <?= ordinalize($integer4); ?></p>

      <br>

      <p>$integer5: <?= $integer5; ?></p>
      <p>ordinalize($integer5): <?= ordinalize($integer5); ?></p>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>