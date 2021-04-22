<?= $this->extend('layout/v_template'); ?>

<?= $this->section('content'); ?>

<?= helper('html'); ?>

<div class="container">

  <!-- TITLE -->
  <div class="row">
    <div class="col text-center">
      <h1>HTML Helper</h1>
    </div>
  </div>

  <br>

  <!-- IMG($SRC, $TREAT_AS_ROUTED_URI_STRING=FALSE, $ADDITIONAL_ATTRIBUTES) -->
  <div class="row">
    <div class="col">
      <h3>img($src, $treatAsRoutedURIString=false, $additionalAttributes)</h3>
      <p>img('images/memes/Business_Intensifies.jpg', false, ['width' => 200]): </p>
      <?= img('images/memes/Business_Intensifies.jpg', false, [
        'width' => 200
      ]); ?>

      <br><br>

      <p>img('images/memes/Business_Intensifies.jpg', true, ['width' => 200]): </p>
      <?= img('images/memes/Business_Intensifies.jpg', true, [
        'width' => 200
      ]); ?>

      <br><br>

      <p>img('/helpers/html-helper/memes', true, ['width' => 200]): </p>
      <?= img('/helpers/html-helper/memes', true, [
        'width' => 200
      ]); ?>
    </div>
  </div>

  <br>

  <!-- LINK_TAG($HREF, $REL, $TYPE, $TITLE,  $MEDIA, $INDEXPAGE, $HREFLANG) -->
  <div class="row">
    <div class="col">
      <h3>link_tag($href, $rel='stylesheet', $type='text/css', $title, $media, $indexpage=false, $hreflang)</h3>

      <p>link_tag('#'): </p>
      <p><?= htmlspecialchars(link_tag('#')) ?></p>

      <br>

      <p>link_tag('css/myStyle.css', 'stylesheet', 'text/css', 'Ini Title'): </p>
      <p><?= htmlspecialchars(link_tag('css/myStyle.css', 'stylesheet', 'text/css', 'Ini Title')) ?></p>
    </div>
  </div>

  <br>

  <!-- SCRIPT_TAG($SRC, $TREAT_AS_ROUTED_URI_STRING=FALSE) -->
  <div class="row">
    <div class="col">
      <h3>script_tag($src, $treatAsRoutedURIString=false)</h3>

      <p>script_tag('js/myJs.js'): </p>
      <p><?= htmlspecialchars(script_tag('js/myJs.js')) ?></p>
    </div>
  </div>

  <br>

  <!-- UL($LIST, $ATTRIBUTES='') -->
  <div class="row">
    <div class="col">
      <h3>ul($list, $attributes='')</h3>

      <?php
      $list = [
        'color' => ['red', 'blue', 'yellow', 'green', 'orange', 'purple'],
        'size'  => [
          'small'   => ['xxs', 'xs', 's'],
          'medium'  => ['m'],
          'large'   => ['l', 'xl', 'xxl']
        ]
      ];
      $attributes = [
        'class' => 'list-group'
      ];

      d($list);
      d($attributes);
      ?>

      <p>ul($list, $attributes): </p>
      <p><?= ul($list, $attributes) ?></p>
    </div>
  </div>

  <br>

  <!-- OL($LIST, $ATTRIBUTES='') -->
  <div class="row">
    <div class="col">
      <h3>ol($list, $attributes='')</h3>

      <?php
      $list = [
        'color' => ['red', 'blue', 'yellow', 'green', 'orange', 'purple'],
        'size'  => [
          'small'   => ['xxs', 'xs', 's'],
          'medium'  => ['m'],
          'large'   => ['l', 'xl', 'xxl']
        ]
      ];
      $attributes = [
        'class' => 'list-group'
      ];

      d($list);
      d($attributes);
      ?>

      <p>ol($list, $attributes): </p>
      <p><?= ol($list, $attributes) ?></p>
    </div>
  </div>

  <br>

  <!-- VIDEO($SRC, $UNSUPPORTED_MESSAGE='', $ATTRIBUTES='', $TRACKS=[], $TREAT_AS_ROUTED_URI_STRING=FALSE) -->
  <div class="row">
    <div class="col">
      <h3>video($src, $unsupportedMessage='', $attributes='', $tracks=[], $threatAsRoutedURIString=false)</h3>

      <p>video('videos/ULTRA DRAGON DREAM FEET.mp4', 'Your browser does not support the video tag', 'width="640" height="360" controls'): </p>
      <p><?= video('videos/ULTRA DRAGON DREAM FEET.mp4', 'Your browser does not support the video tag', 'width="640" height="360" controls'); ?></p>
    </div>
  </div>

</div>

<?= $this->endSection(); ?>