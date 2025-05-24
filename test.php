<?php
// index.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Urban Farm - Fresh & Co</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


  <style>
    :root {
      --primary: #2E3B8E;
      --secondary: #1E90D6;
      --accent: #54B948;
      --light-bg: #FFFFFF;
      --text-dark: #222;
    }
    body {
      background-color: var(--light-bg);
      color: var(--text-dark);
      padding-top: 70px;
      font-family: 'Segoe UI', sans-serif;
    }
    .navbar {
      background-color: var(--primary);
    }
    .nav-link {
      color: #fff !important;
    }
    .navbar-brand, .nav-link { color: #fff !important; }
    .hero {
      background: var(--secondary);
      color: #fff;
      padding: 4rem 2rem;
      text-align: center;
    }
    .hero .btn-primary {
      background-color: var(--accent);
      border: none;
    }
    .btn-outline-primary {
      border-color: var(--primary);
      color: var(--primary);
    }
    .btn-outline-primary:hover {
      background-color: var(--primary);
      color: #fff;
    }
    footer { background: var(--primary); color: #fff; padding: 2rem 0; }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="assets/images/logo-sans-arriere-plan.png"
           alt="Urban Farm Fresh & Co"
           class="d-inline-block align-text-top"
           width="80"
           height="auto">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navContent">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item me-3">
          <a class="nav-link position-relative" href="cart.php">
            <!-- Using Bootstrap icon for cart -->
            <i class="bi bi-basket"></i>
            <?= isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0 ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">
            <!-- Using Bootstrap icon for user profile -->
            <i class="bi bi-person-circle fa-lg"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="hero">
  <div class="container">
    <h1 class="display-4">Fraîcheur locale, goût naturel</h1>
    <p class="lead">Produits 100 % naturels, directement de notre ferme à votre table.</p>
    <a href="#products" class="btn btn-primary btn-lg">Voir nos produits</a>
  </div>
</section>

<!-- Products -->
<section class="container my-5" id="products">
  <h2 class="mb-4 text-center">Nos Meilleures Ventes</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- Sample Card 1 -->
    <div class="col">
      <div class="card h-100">
        <img src="products/juices/justest.jpg" class="card-img-top" alt="Juice">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Jus Bio</h5>
          <p class="card-text flex-grow-1">100% naturel frais et sans sucre ajouté.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold" style="color: var(--accent);">15 DH/kg</span>
            <a href="#" class="btn btn-outline-primary">Ajouter</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Repeat for other products… -->
         <div class="col">
      <div class="card h-100">
        <img src="products/juices/justest.jpg" class="card-img-top" alt="Juice">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Jus Bio</h5>
          <p class="card-text flex-grow-1">100% naturel frais et sans sucre ajouté.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold" style="color: var(--accent);">15 DH/kg</span>
            <a href="#" class="btn btn-outline-primary">Ajouter</a>
          </div>
        </div>
      </div>
    </div>
        <div class="col">
      <div class="card h-100">
        <img src="products/juices/justest.jpg" class="card-img-top" alt="Juice">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Jus Bio</h5>
          <p class="card-text flex-grow-1">100% naturel frais et sans sucre ajouté.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold" style="color: var(--accent);">15 DH/kg</span>
            <a href="#" class="btn btn-outline-primary">Ajouter</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="text-center">
  <div class="container">
    <p>&copy; 2025 Urban Farm – Livraison de produits frais à Rabat</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
