<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"
      href="#"
      hx-get="/data/home.php"
      hx-trigger="click"
      hx-target="#mainContent"
      style="cursor: pointer">HTMX</a>

    <button class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"
      id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item me-2">
          <a class="btn btn-sm btn-secondary text-white"
            hx-get="/data/example1.php"
            hx-trigger="click"
            hx-target="#mainContent"
            style="cursor: pointer">Simple Ajax</a>
        </li>
        <li class="nav-item me-2">
          <a class="btn btn-sm btn-secondary text-white"
            hx-get="/data/mousehover.php"
            hx-trigger="click"
            hx-target="#mainContent"
            style="cursor: pointer">Mouse Hover</a>
        </li>
        <li class="nav-item me-2">
          <a class="btn btn-sm btn-secondary text-white"
            hx-get="/data/clicktoedit.php"
            hx-trigger="click"
            hx-target="#mainContent"
            style="cursor: pointer">Click to Edit</a>
        </li>
      </ul>
    </div>
  </div>
</nav>