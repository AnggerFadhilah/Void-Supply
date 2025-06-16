<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>[not login yet] Void Supply</title>

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
    <!-- Navbar Start -->
    <nav class="navbar">
      <a class="navbar-logo" href="#" aria-label="store logo">
        <img src="img/logo1.png" width="108" height="56" />
      </a>
      <div class="navbar-nav">
        <a href="#new-arrival">New Arrival</a>
        <a href="#contact">Contact Us</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="cart"><i data-feather="shopping-bag"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        <div class="dropdown">
            <div id="user-icon" class="dropdown-toggle" style="display: flex; align-items: center; gap: 8px;">
                <i data-feather="user"></i>
            </div>

          <div class="dropdown-content">
            <a href="auth/login.php">
                <i data-feather="log-in" width="16" height="16"></i>
                Login
            </a>
          </div>
        </div>
      </div>
    </nav>

        <!-- BANNER -->
     <section class="main-banner">
      <img src="img/banner1.jpg" alt="Main Banner" class="banner-image" />
      <div class="banner-text">
        <h1>NEW COLLECTION 2025</h1>
        <p>Elevate your style with VOID SUPPLY</p>
        <a href="auth/login.php" class="banner-btn">Show More</a>
      </div>
    </section>

    <!-- Product Card Carrousel -->


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
              onclick="window.location.href='../Void-Supply/detail/tshirt.html'"
            />
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
              onclick="window.location.href='../Void-Supply/detail/hoodie.html'"
            />
            
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
              onclick="window.location.href='../Void-Supply/detail/long.html'"
            />
            
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
              onclick="window.location.href='../Void-Supply/detail/cargo.html'"
            />
            
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
              onclick="window.location.href='../Void-Supply/detail/short.html'"
            />
            
          </div>
          <div class="product-info">
            <h2 class="product-brand">short</h2>
            <span class="price">Rp.50.000</span
            ><span class="actual-price">Rp.100.000</span>
          </div>
        </div>
      </div>
    </section>
    <!-- Navbar End -->



  </body>

  <footer>
    <div class="socials" id="contact">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="credit">
      <pv><a href="">Void Supply</a>. | &copy; 2025.</pv>
    </div>
  </footer>
  <script src="script/script.js"></script>
</html>
