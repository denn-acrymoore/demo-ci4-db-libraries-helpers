<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<?= helper('array'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>Array Helper</h1>
    </div>
  </div>

  <br>

  <!-- DOT_ARRAY_SEARCH($TARGET, $ARRAY) -->
  <div class="row">
    <div class="col">
      <h3>dot_array_search($target, $data)</h3>
      <?php
      $array = [
        'level_1' => [
          'level_2a' => [
            'level_3' => 999
          ],
          'level_2b' => [
            'level_3' => 1234
          ]
        ]
      ];

      d($array);
      ?>
      <p>dot_array_search('level_1.level_2a.level_3', $array): <?= dot_array_search('level_1.level_2a.level_3', $array); ?></p>
      <p>dot_array_search('level_1.level_2b.level_3', $array): <?= dot_array_search('level_1.level_2b.level_3', $array); ?></p>
      <p>dot_array_search('level_1.*.level_3', $array): <?= dot_array_search('level_1.*.level_3', $array); ?> </p>
    </div>
  </div>

  <br>

  <!-- ARRAY_DEEP_SEARCH($KEY, $ARRAY) -->
  <div class="row">
    <div class="col">
      <h3>array_deep_search($key, $array)</h3>
      <?php
      $array = [
        'level_1' => [
          'level_2a' => [
            'level_3a' => 999
          ],
          'level_2b' => [
            'level_3b' => 1234
          ],
          'level_2c' => [
            'level_3b' => 420
          ]
        ]
      ];

      d($array);
      ?>
      <p>array_deep_search('level_3a', $array): <?= array_deep_search('level_3a', $array); ?></p>
      <p>array_deep_search('level_3b', $array): <?= array_deep_search('level_3b', $array); ?></p>
    </div>
  </div>

  <br>

  <!-- ARRAY_SORT_BY_MULTIPLE_KEYS($ARRAY, $SORTCOLUMNS) -->
  <div class="row">
    <div class="col">
      <h3>array_sort_by_multiple_keys($array, $sortColumns)</h3>
      <?php
      $array = [
        0 => [
          'nama'  => 'Tono',
          'id'    => [
            'kantor'    => 3
          ],
          'gaji'  => 79000
        ],
        1 => [
          'nama'  => 'Rini',
          'id'    => [
            'kantor'    => 2
          ],
          'gaji'  => 1000000000
        ],
        2 => [
          'nama'  => 'Andi',
          'id'    => [
            'kantor'    => 2
          ],
          'gaji'  => 99999
        ],
      ];

      d($array);

      $sortColumns = [
        'id.kantor' => SORT_ASC,
        'gaji'      => SORT_DESC
      ];

      d($sortColumns);
      ?>
      <p>array_sort_by_multiple_keys($array, $sortColumns): </p>
      <?php
      array_sort_by_multiple_keys($array, $sortColumns);
      d($array);
      ?>
    </div>
  </div>

  <br>

  <!-- ARRAY_FLATTEN_WITH_DOTS($ARRAY, $PREPEND) -->
  <div class="row">
    <div class="col">
      <h3>array_flatten_with_dots($array, $prepend)</h3>
      <?php
      $array = [
        'level_1' => [
          'level_2a' => [
            'level_3a' => 999
          ],
          'level_2b' => [
            'level_3b' => 1234
          ],
          'level_2c' => [
            'level_3b' => 420
          ]
        ]
      ];

      d($array);
      ?>
      <p>array_flatten_with_dots($array): </p>
      <?php
      $flattened = array_flatten_with_dots($array);
      d($flattened);
      ?>
      <p>array_flatten_with_dots($array, 'foo_'): </p>
      <?php
      $flattened = array_flatten_with_dots($array, 'foo_');
      d($flattened);
      ?>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>