<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<?= helper('text'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>Text Helper</h1>
    </div>
  </div>

  <br>

  <!-- RANDOM_STRING($TYPE='ALNUM', $LEN=8) -->
  <div class="row">
    <div class="col">
      <h3>random_string($type='alnum', $len=8)</h3>
      <p><b>random_string('alpha'): </b><?= random_string('alpha'); ?></p>
      <p><b>random_string('alnum'): </b><?= random_string('alnum'); ?></p>
      <p><b>random_string(): </b><?= random_string(); ?></p>
      <p><b>random_string('basic') -> based on mt_rand() ($len ignored): </b><?= random_string('basic'); ?></p>
      <p><b>random_string('numeric'): </b><?= random_string('numeric'); ?></p>
      <p><b>random_string('nozero'): </b><?= random_string('nozero'); ?></p>
      <p><b>random_string('md5') -> based on md5() (fixed length of 32): </b><?= random_string('md5'); ?></p>
      <p><b>random_string('sha1') -> based on sha1() (fixed length of 40): </b><?= random_string('sha1'); ?></p>
      <p><b>random_string('crypto') -> based on random_bytes(): </b><?= random_string('crypto'); ?></p>
    </div>
  </div>

  <br><br>

  <!-- INCREMENT_STRING($STR, $SEPARATOR='_', $FIRST=1) -->
  <div class="row">
    <div class="col">
      <h3>increment_string($str, $separator='_', $first=1)</h3>
      <p><b>increment_string('file'): </b><?= increment_string('file'); ?></p>
      <p><b>increment_string('file', '-', 3): </b><?= increment_string('file', '-', 3); ?></p>
      <p><b>increment_string('file', '-', -9): </b><?= increment_string('file', '-', -9); ?></p>
      <p><b>increment_string('file_4'): </b><?= increment_string('file_4'); ?></p>
      <p><b>increment_string('file-4', '-'): </b><?= increment_string('file-4', '-'); ?></p>
      <p><b>increment_string('file-4', '-', 2): </b><?= increment_string('file-4', '-', 2); ?></p>
    </div>
  </div>

  <br><br>

  <!-- ALTERNATOR($ARGS) -->
  <div class="row">
    <div class="col">
      <h3>alternator($args)</h3>
      <p><b>alternator('string one', 'string two', 'string three') x 10 times: </b><br>
        <?php for ($i = 0; $i < 10; $i++) : ?>
          <?= alternator('string one', 'string two', 'string three'); ?><br>
        <?php endfor; ?>
      </p>

      <p><b>alternator('a', 'b', 'c', 'd') x 10 times: </b><br>
        <?php for ($i = 0; $i < 10; $i++) : ?>
          <?= alternator('a', 'b', 'c', 'd'); ?><br>
        <?php endfor; ?>
      </p>
    </div>
  </div>

  <br><br>

  <!-- WORD_LIMITER($STR, $LIMIT=100, $END_CHAR='&#8230;') -->
  <div class="row">
    <div class="col">
      <h3>word_limiter($str, $limit=100, $endChar='&#8230' -> Ini ellipsis)</h3>
      <p><b>word_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 5): </b><br>
        <?= word_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 5); ?>
      </p>
    </div>
  </div>

  <br><br>

  <!-- CHARACTER_LIMITER($STR, $LIMIT=100, $END_CHAR='&#8230;') -->
  <div class="row">
    <div class="col">
      <h3>character_limiter($str, $limit=100, $endChar='&#8230' -> Ini ellipsis)</h3>
      <p>NOTE: Integritas kata tetap dijaga sehingga tidak ada kata yang terpotong.</p>
      <br>
      <p><b>character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 4): </b><br>
        <?= character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 4); ?>
      </p>
      <p><b>character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 5): </b><br>
        <?= character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 5); ?>
      </p>
      <p><b>character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 7): </b><br>
        <?= character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 7); ?>
      </p>
      <p><b>character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 8): </b><br>
        <?= character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 8); ?>
      </p>
    </div>
  </div>

  <br><br>

  <!-- CHARACTER_LIMITER($STR, $LIMIT=100, $END_CHAR='&#8230;') -->
  <div class="row">
    <div class="col">
      <h3>character_limiter($str, $limit=100, $endChar='&#8230' -> Ini ellipsis)</h3>
      <p>NOTE: Integritas kata tetap dijaga sehingga tidak ada kata yang terpotong.</p>
      <br>
      <p><b>character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 4): </b><br>
        <?= character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 4); ?>
      </p>
      <p><b>character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 5): </b><br>
        <?= character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 5); ?>
      </p>
      <p><b>character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 7): </b><br>
        <?= character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 7); ?>
      </p>
      <p><b>character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 8): </b><br>
        <?= character_limiter('Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 8); ?>
      </p>
    </div>
  </div>

  <br><br>

  <!-- WORD_CENSOR($STR, $ARR_OF_CENSORED_WORDS, $REPLACEMENT='') -->
  <div class="row">
    <div class="col">
      <h3>word_censor($str, $arrOfCensoredWords, $replacement='')</h3>
      <?php
      $arrOfCensoredWords = ['darn', 'sucks', 'golly', 'phooey'];
      d($arrOfCensoredWords);
      ?>
      <p><b>word_censor('Darn it, that sucks PHOOEY.', $arrOfCensoredWords, '[redacted]'): </b><br>
        <?= word_censor('Darn it, that sucks PHOOEY.', $arrOfCensoredWords, '[redacted]'); ?>
      </p>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>