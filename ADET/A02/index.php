<?php
$page = $_GET['page'] ?? 'home'; 
$valid_pages = ['home', 'trending', 'watch'];

if (!in_array($page, $valid_pages)) {
  $page = 'home'; 
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JamTube</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="icon" href="img/icon.png">
</head>

<body>

  <nav class="yt-header navbar navbar-expand-lg navbar-light px-3">
    <a class="logo navbar-brand me-4" href="?page=home">JamTube</a>
    </button>

    <div class="collapse navbar-collapse" id="ytNavbar">
      <form class="yt-search d-flex mx-auto my-2 my-lg-0" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>

      <div class="d-flex ms-auto">
        <button class="btn btn-light me-2">Upload</button>
        <button class="btn btn-light">Profile</button>
      </div>
    </div>
  </nav>

  <nav class="navbar bg-light d-lg-none">
    <div class="container-fluid">
      <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
        ☰ Menu
      </button>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="row">
      <nav class="col-lg-2 d-none d-lg-flex flex-column p-3 sidebar">
        <h5 class="mb-4">🎬 <strong>JamTube</strong></h5>

        <a href="?page=home" class="sidebar-link <?= $page == 'home' ? 'active' : '' ?>">
          <i class="bi bi-house-door-fill me-2"></i> Home
        </a>
        <a href="?page=trending" class="sidebar-link <?= $page == 'trending' ? 'active' : '' ?>">
          <i class="bi bi-fire me-2"></i> Trending
        </a>
        <a href="?page=watch" class="sidebar-link <?= $page == 'watch' ? 'active' : '' ?>">
          <i class="bi bi-clock-history me-2"></i> Watch Later
        </a>

        <div class="mt-auto text-muted small pt-4 text-center">
          &copy; 2025 JamTube
        </div>
      </nav>

      <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileSidebar"
        aria-labelledby="mobileSidebarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="mobileSidebarLabel">🎬 JamTube</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
          <a href="?page=home" class="sidebar-link <?= $page == 'home' ? 'active' : '' ?>">
            <i class="bi bi-house-door-fill me-2"></i> Home
          </a>
          <a href="?page=trending" class="sidebar-link <?= $page == 'trending' ? 'active' : '' ?>">
            <i class="bi bi-fire me-2"></i> Trending
          </a>
          <a href="?page=watch" class="sidebar-link <?= $page == 'watch' ? 'active' : '' ?>">
            <i class="bi bi-clock-history me-2"></i> Watch Later
          </a>
        </div>
      </div>

      <main class="col-12 col-lg-10 p-3">
        <?php include("shared/" . $page . ".php"); ?>
      </main>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>