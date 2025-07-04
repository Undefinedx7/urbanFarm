<?php
// index.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Urban Farm - Produits Frais & Locaux</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
  <style>
    :root {
      --primary: #2e3b8e;
      --secondary: #1e90d6;
      --accent: #54b948;
      --light-bg: #ffffff;
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
    .nav-link, .navbar-brand {
      color: #fff !important;
    }
    .hero {
      background: url('assets/images/farm-hero.jpg') center/cover no-repeat;
      color: #fff;
      text-shadow: 1px 1px 5px #000;
      padding: 6rem 2rem;
      text-align: center;
    }
    .hero h1 {
      font-weight: 700;
    }
    .hero .btn-primary {
      background-color: var(--accent);
      border: none;
    }
    .card {
      border: none;
      transition: transform .2s;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
    .badge-sale {
      position: absolute;
      top: 10px;
      right: 10px;
      background: var(--accent);
      color: #fff;
    }
    .btn-outline-primary {
      border-color: var(--primary);
      color: var(--primary);
    }
    .btn-outline-primary:hover {
      background-color: var(--primary);
      color: #fff;
    }
    footer {
      background: var(--primary);
      color: #fff;
      padding: 2rem 0;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="assets/images/logo-sans-arriere-plan.png" alt="Urban Farm Fresh & Co" width="80">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navContent">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item me-3">
          <a class="nav-link position-relative" href="cart.php">
            <i class="bi bi-basket fs-5"></i>
            <span class="badge bg-danger position-absolute top-0 start-100 translate-middle badge-pill">
              <?= isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0 ?>
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">
            <i class="bi bi-person-circle fs-5"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero d-flex flex-column justify-content-center align-items-center text-center">
  <div class="container">
    <h1 class="display-4">Du champ à votre assiette</h1>
    <p class="lead mb-4">Des produits bio, locaux et livrés chez vous à Rabat.</p>
    <a href="#products" class="btn btn-primary btn-lg px-4">Découvrir les produits</a>
  </div>
</section>

<!-- Product Highlights -->
<section class="container my-5" id="products">
  <h2 class="mb-4 text-center">Nos Meilleures Ventes</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- Product Card -->
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
    <!-- Repeat cards as needed -->
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
    <p class="mb-0">&copy; 2025 Urban Farm – Livraison de produits frais à Rabat</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
