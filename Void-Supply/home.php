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


    <!-- Style -->

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- BANNER -->
     <section class="main-banner">
      <img src="img/banner1.jpg" alt="Main Banner" class="banner-image" />
      <div class="banner-text">
        <h1>NEW COLLECTION 2025</h1>
        <p>Elevate your style with VOID SUPPLY</p>
        <a href="#new-arrival" class="banner-btn">Show More</a>
      </div>
    </section>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a class="navbar-logo" href="#" aria-label="store logo">
        <img src="img/logo1.png" width="108" height="56" />
      </a>
      <div class="navbar-nav">
        <a href="#new-arrival">New Arrival</a>
        <a href="#hoodie">Hoodie</a>
        <a href="#shirt">T-Shirt</a>
        <a href="#contact">Contact Us</a>
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
            <a href="auth/logout.php" class="logout">
                <i data-feather="log-out" width="16" height="16"></i>
                Logout
            </a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Product Card Carrousel -->
     <!-- NEW ARRIVAL -->

    <section class="product" id="new-arrival">
      <h2 class="product-category">new arrival</h2>
      <button class="pre-btn"><img src="img/arrow.png" alt="" /></button>
      <button class="nxt-btn"><img src="img/arrow.png" alt="" /></button>
      <div class="product-container">
        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img
              src="../Void-Supply/img/Tshirt.jpg"
              class="product-thumb"
              alt=""
            />
            <button
              class="card-btn"
              onclick="window.location.href='../Void-Supply/keranjang/index.html'"
            >
              Add Cart
            </button>
          </div>
          <div class="product-info">
            <h2 class="product-brand">T-Shirt</h2>
            <span class="price">Rp.100.000</span
            ><span class="actual-price">Rp.200.000</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img
              src="../Void-Supply/img/hoodie.jpg"
              class="product-thumb"
              alt=""
            />
            <button class="card-btn">add to cart</button>
          </div>

          <div class="product-info">
            <h2 class="product-brand">Hoodie</h2>
            <span class="price">Rp.250.000</span
            ><span class="actual-price">Rp.500.000</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img
              src="../Void-Supply/img/long sleeve.jpg"
              class="product-thumb"
              alt=""
            />
            <button class="card-btn">add to cart</button>
          </div>

          <div class="product-info">
            <h2 class="product-brand">Long Sleeve</h2>
            <span class="price">Rp.70.000</span
            ><span class="actual-price">Rp.140.000</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img
              src="../Void-Supply/img/cargo pants.jpg"
              class="product-thumb"
              alt=""
            />
            <button class="card-btn">add to cart</button>
          </div>
          <div class="product-info">
            <h2 class="product-brand">Cargo Pants</h2>
            <span class="price">Rp.150.000</span
            ><span class="actual-price">Rp.300.000</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img
              src="../Void-Supply/img/short.jpg"
              class="product-thumb"
              alt=""
            />
            <button class="card-btn">add to cart</button>
          </div>
          <div class="product-info">
            <h2 class="product-brand">short</h2>
            <span class="price">Rp.50.000</span
            ><span class="actual-price">Rp.100.000</span>
          </div>
        </div>
      </div>
    </section>

         <!-- HOODIE -->

    <section class="product" id="hoodie">
      <h2 class="product-category">hoodie</h2>
      <button class="pre-btn"><img src="img/arrow.png" alt="" /></button>
      <button class="nxt-btn"><img src="img/arrow.png" alt="" /></button>
      <div class="product-container">
        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img
              src="../Void-Supply/img/Tshirt.jpg"
              class="product-thumb"
              alt=""
            />
            <button
              class="card-btn"
              onclick="window.location.href='../Void-Supply/keranjang/index.html'"
            >
              Add Cart
            </button>
          </div>
          <div class="product-info">
            <h2 class="product-brand">T-Shirt</h2>
            <span class="price">Rp.100.000</span
            ><span class="actual-price">Rp.200.000</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img
              src="../Void-Supply/img/hoodie.jpg"
              class="product-thumb"
              alt=""
            />
            <button class="card-btn">add to cart</button>
          </div>

          <div class="product-info">
            <h2 class="product-brand">Hoodie</h2>
            <span class="price">Rp.250.000</span
            ><span class="actual-price">Rp.500.000</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img
              src="../Void-Supply/img/long sleeve.jpg"
              class="product-thumb"
              alt=""
            />
            <button class="card-btn">add to cart</button>
          </div>

          <div class="product-info">
            <h2 class="product-brand">Long Sleeve</h2>
            <span class="price">Rp.70.000</span
            ><span class="actual-price">Rp.140.000</span>
          </div>

        </div>
      </div>
    </section>

         <!-- T-Shirt -->

    <section class="product" id="shirt">
      <h2 class="product-category">t-Shirt</h2>
      <button class="pre-btn"><img src="img/arrow.png" alt="" /></button>
      <button class="nxt-btn"><img src="img/arrow.png" alt="" /></button>
      <div class="product-container">
        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img
              src="../Void-Supply/img/Tshirt.jpg"
              class="product-thumb"
              alt=""
            />
            <button
              class="card-btn"
              onclick="window.location.href='../Void-Supply/keranjang/index.html'"
            >
              Add Cart
            </button>
          </div>
          <div class="product-info">
            <h2 class="product-brand">T-Shirt</h2>
            <span class="price">Rp.100.000</span
            ><span class="actual-price">Rp.200.000</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img
              src="../Void-Supply/img/hoodie.jpg"
              class="product-thumb"
              alt=""
            />
            <button class="card-btn">add to cart</button>
          </div>

          <div class="product-info">
            <h2 class="product-brand">Hoodie</h2>
            <span class="price">Rp.250.000</span
            ><span class="actual-price">Rp.500.000</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img
              src="../Void-Supply/img/long sleeve.jpg"
              class="product-thumb"
              alt=""
            />
            <button class="card-btn">add to cart</button>
          </div>

          <div class="product-info">
            <h2 class="product-brand">Long Sleeve</h2>
            <span class="price">Rp.70.000</span
            ><span class="actual-price">Rp.140.000</span>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <span class="discount-tag">50% off</span>
            <img
              src="../Void-Supply/img/cargo pants.jpg"
              class="product-thumb"
              alt=""
            />
            <button class="card-btn">add to cart</button>
          </div>
          <div class="product-info">
            <h2 class="product-brand">Cargo Pants</h2>
            <span class="price">Rp.150.000</span
            ><span class="actual-price">Rp.300.000</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Navbar End -->

    <!-- Feather Icons -->

  </body>
    <footer>
    <div class="socials" id= "contact">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="credit">
      <p><a href="">Void Supply</a>. | &copy; 2025.</p>
    </div>
  </footer>
  <script src="script/script.js"></script>
</html>
