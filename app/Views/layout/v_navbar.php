<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Demo CodeIgniter 4</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= $activeNav == 'home' ? 'active' : ''; ?>">
        <a class="nav-link" href="<?= base_url('/'); ?>">Home</a>
      </li>
      <li class="nav-item dropdown <?= str_contains($activeNav, 'helper') ? 'active' : ''; ?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Helpers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item <?= $activeNav == 'array-helper' ? 'active' : ''; ?>" href="/helpers/array-helper">Array Helper</a>

          <a class="dropdown-item <?= $activeNav == 'cookie-helper' ? 'active' : ''; ?>" href="/helpers/cookie-helper">Cookie Helper</a>

          <a class="dropdown-item <?= $activeNav == 'date-helper' ? 'active' : ''; ?>" href="/helpers/date-helper">Date Helper</a>

          <a class="dropdown-item <?= $activeNav == 'filesystem-helper' ? 'active' : ''; ?>" href="/helpers/filesystem-helper">Filesystem Helper</a>

          <a class="dropdown-item <?= $activeNav == 'form-helper' ? 'active' : ''; ?>" href="/helpers/form-helper">Form Helper</a>

          <a class="dropdown-item <?= $activeNav == 'html-helper' ? 'active' : ''; ?>" href="/helpers/html-helper">HTML Helper</a>

          <a class="dropdown-item <?= $activeNav == 'inflector-helper' ? 'active' : ''; ?>" href="/helpers/inflector-helper">Inflector Helper</a>

          <a class="dropdown-item <?= $activeNav == 'number-helper' ? 'active' : ''; ?>" href="/helpers/number-helper">Number Helper</a>

          <a class="dropdown-item <?= $activeNav == 'security-helper' ? 'active' : ''; ?>" href="/helpers/security-helper">Security Helper</a>

          <a class="dropdown-item <?= $activeNav == 'test-helper' ? 'active' : ''; ?>" href="/helpers/test-helper">Test Helper</a>

          <a class="dropdown-item <?= $activeNav == 'text-helper' ? 'active' : ''; ?>" href="/helpers/text-helper">Text Helper</a>

          <a class="dropdown-item <?= $activeNav == 'url-helper' ? 'active' : ''; ?>" href="/helpers/url-helper">URL Helper</a>

          <a class="dropdown-item <?= $activeNav == 'xml-helper' ? 'active' : ''; ?>" href="/helpers/xml-helper">XML Helper</a>
        </div>
      </li>
    </ul>
  </div>
</nav>