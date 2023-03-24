<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid w-75">
      <a class="navbar-brand fw-bold fs-4" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'Home') ? 'active fw-semibold' : ' ' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'Update') ? 'active fw-semibold' : ' ' }}" href="/update">Update</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>