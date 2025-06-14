<?php
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        $result = mysqli_query($conn, "SELECT email FROM user WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        if ($key === hash('sha256', $row['email'])) {
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $row['nama']; // ini opsional, kalo kamu butuh nama
        }
    }
}

// kalau masih belum login, redirect ke login page
if (!isset($_SESSION["login"])) {
    header("Location: auth/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Void Supply</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="script/script.js"></script>


    <!-- Style -->

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a class="navbar-logo" href="#" aria-label="store logo">
        <img src="img/logo1.png" width="108" height="56" />
      </a>
      <div class="navbar-nav">
        <a href="#new-arrival">New Arrival</a>
        <a href="#hoodie">Hoodie</a>
        <a href="#shirt">T-Shirt</a>
        <a href="contact">Contact Us</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="cart"><i data-feather="shopping-bag"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        <div class="dropdown">
            <div id="user-icon" class="dropdown-toggle" style="display: flex; align-items: center; gap: 8px;">
                <i data-feather="user"></i>
                <span class="username-text">
                    <?php echo isset($_SESSION["nama"]) ? htmlspecialchars($_SESSION["nama"]) : "User"; ?>
                </span>
            </div>

          <div class="dropdown-content">
            <a href="profile.html">
                <i data-feather="user" width="16" height="16"></i>
                Profile
            </a>
            <a href="auth/logout.php" class="logout">
                <i data-feather="log-out" width="16" height="16"></i>
                Logout
            </a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Product Card Carrousel -->

    <section class="product">
      <h2 class="product-category">best selling</h2>
      <button class="pre-btn"><img src="img/arrow.png" alt="" /></button>
      <button class="nxt-btn"><img src="img/arrow.png" alt="" /></button>
      <div class="product-container">
        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="img/card1.jpg" class="product-thumb" alt="" />
            <button class="card-btn">add to cart</button>
          </div>

          <div class="product-info">
            <h2 class="product-brand">T-Shirt</h2>
            <p class="product-short-description">
              a short line about the cloth..
            </p>
            <span class="price">$20</span><span class="actual-price">$40</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="img/card2.jpg" class="product-thumb" alt="" />
            <button class="card-btn">add to cart</button>
          </div>

          <div class="product-info">
            <h2 class="product-brand">Hoodie</h2>
            <p class="product-short-description">
              a short line about the cloth..
            </p>
            <span class="price">$20</span><span class="actual-price">$40</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="img/card3.jpg" class="product-thumb" alt="" />
            <button class="card-btn">add to cart</button>
          </div>

          <div class="product-info">
            <h2 class="product-brand">Long Sleeve</h2>
            <p class="product-short-description">
              a short line about the cloth..
            </p>
            <span class="price">$20</span><span class="actual-price">$40</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="img/card4.jpg" class="product-thumb" alt="" />
            <button class="card-btn">add to cart</button>
          </div>
          <div class="product-info">
            <h2 class="product-brand">Cargo Pants</h2>
            <p class="product-short-description">
              a short line about the cloth..
            </p>
            <span class="price">$20</span><span class="actual-price">$40</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="img/card5.jpg" class="product-thumb" alt="" />
            <button class="card-btn">add to cart</button>
          </div>
          <div class="product-info">
            <h2 class="product-brand">short</h2>
            <p class="product-short-description">
              a short line about the cloth..
            </p>
            <span class="price">$20</span><span class="actual-price">$40</span>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="img/card6.jpg" class="product-thumb" alt="" />
            <button class="card-btn">add to cart</button>
          </div>
          <div class="product-info">
            <h2 class="product-brand">brand</h2>
            <p class="product-short-description">
              a short line about the cloth..
            </p>
            <span class="price">$20</span><span class="actual-price">$40</span>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="img/card7.jpg" class="product-thumb" alt="" />
            <button class="card-btn">add to cart</button>
          </div>
          <div class="product-info">
            <h2 class="product-brand">brand</h2>
            <p class="product-short-description">
              a short line about the cloth..
            </p>
            <span class="price">$20</span><span class="actual-price">$40</span>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="img/card8.jpg" class="product-thumb" alt="" />
            <button class="card-btn">add to cart</button>
          </div>
          <div class="product-info">
            <h2 class="product-brand">brand</h2>
            <p class="product-short-description">
              a short line about the cloth..
            </p>
            <span class="price">$20</span><span class="actual-price">$40</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="img/card9.jpg" class="product-thumb" alt="" />
            <button class="card-btn">add to cart</button>
          </div>
          <div class="product-info">
            <h2 class="product-brand">brand</h2>
            <p class="product-short-description">
              a short line about the cloth..
            </p>
            <span class="price">$20</span><span class="actual-price">$40</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img src="img/card10.jpg" class="product-thumb" alt="" />
            <button class="card-btn">add to cart</button>
          </div>

          <div class="product-info">
            <h2 class="product-brand">brand</h2>
            <p class="product-short-description">
              a short line about the cloth..
            </p>
            <span class="price">$20</span><span class="actual-price">$40</span>
          </div>
        </div>
      </div>
    </section>
    <!-- Navbar End -->

    <!-- Feather Icons -->

    <!-- Feather Icons -->

  </body>
</html>
