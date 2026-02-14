<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Explore luxury jewelry collections including gold, diamond, bridal, and men's accessories. Handcrafted premium pieces for every occasion.">
  <meta name="keywords" content="jewelry, gold jewelry, diamond jewelry, bridal jewelry, rings, necklaces, bracelets">
  <meta name="author" content="eternaJewels">
  <title> Collections</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap"
    rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <!-- Navbar -->
  <header class="bg-white border-b border-gray-100 sticky top-10 z-50">
    <nav class="max-w-7xl mx-auto px-6 relative">

      <!-- Top Bar -->
      <div class="flex h-16 items-center justify-between">

        <!-- Logo -->
        <a href="index.html" class="text-2xl font-serif text-gray-900">
          Eterna <span class="text-amber-600">Jewels</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center space-x-10 text-gray-700">
          <a href="index.html" class="hover:text-amber-600">Home</a>
          <a href="shop.php" class="hover:text-amber-600">Shop</a>
          <a href="collections.php" class="hover:text-amber-600">Collections</a>
          <a href="about.html" class="hover:text-amber-600">About</a>
          <a href="contact.html" class="hover:text-amber-600">Contact</a>
        </div>

        <!-- Icons + Hamburger (Top Navbar only) -->
        <div class="flex items-center space-x-4 text-gray-700 text-lg">

          <!-- Icons (always visible) -->
          <a href="#"><i class="fa-solid fa-magnifying-glass hover:text-amber-600"></i></a>
          <a href="adminlogin.php"><i class="fa-regular fa-user hover:text-amber-600"></i></a>
          <a href="#"><i class="fa-solid fa-cart-shopping hover:text-amber-600"></i></a>

          <!-- Hamburger (mobile only) -->
          <button id="menuBtn" class="lg:hidden text-2xl">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>

      </div>

      <!-- Mobile Menu (ONLY LINKS, NO ICONS) -->
      <div id="mobileMenu"
        class="hidden lg:hidden absolute top-16 left-0 w-full bg-white border-t border-gray-100 shadow-lg">
        <div class="px-6 py-6 space-y-4 text-gray-700 font-medium">
          <a href="index.html" class="block hover:text-amber-600">Home</a>
          <a href="shop.php" class="block hover:text-amber-600">Shop</a>
          <a href="collections.php" class="block hover:text-amber-600">Collections</a>
          <a href="about.html" class="block hover:text-amber-600">About</a>
          <a href="contact.html" class="block hover:text-amber-600">Contact</a>
        </div>
      </div>

    </nav>
  </header>
  <!-- Marquee -->
  <div class="marquee top-marquee bg-white py-1 "
    style="position: fixed;  top: 0; left: 0; width: 100%; z-index: 9999;">
    <marquee style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" behavior="scroll" direction="left">
      Welcome to Eterna Jewels - Discover the Art of True Luxury | Exclusive Offers | Handcrafted Jewelry • Premium Gold
      & Diamonds • Exclusive Designs • Limited Edition Pieces • Shop the Latest Arrivals | New Arrivals Weekly
    </marquee>
  </div>
  <!-- Collection Banner -->
  <section class="collection-banner">
    <div class="banner-overlay"
      style="background: url(./admin/images/b3.jpg )center/cover no-repeat;margin-top:20px;height:auto;"></div>
    <div class="banner-content">
      <h1 style="color: rgb(39, 26, 3); text-align: center;padding-top: 110px;">𝗘𝗦𝗦𝗘𝗡𝗧𝗜𝗔𝗟 𝗝𝗘𝗪𝗘𝗟𝗟𝗘𝗥𝗬
        𝗖𝗢𝗟𝗟𝗘𝗖𝗧𝗜𝗢𝗡 </h1><br>
      <div class="hero-buttons">
        <a href="shop.php" class="btn-primary">Shop Now</a>
        <a href="collections.php" class="btn-secondary">Explore Collections</a>
      </div>

    </div>
  </section>

  <!-- Collection Sections -->

  <section id="bridal" class="collection-section">
    <div class="container">
      <h2>𝗝𝗘𝗪𝗘𝗟𝗟𝗘𝗥𝗬 𝗖𝗢𝗟𝗟𝗘𝗖𝗧𝗜𝗢𝗡</h2>

      <div class="product-grid">
        <?php
        include './config/db.php';

        $sql = "SELECT * FROM `productss` WHERE  category = 'bridal'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div data-aos="zoom-out" class="product-card">
              <a href="product.php?id=<?php echo $row['id']; ?>">
                <img src="./admin/images/<?php echo $row['image']; ?>" alt="<?php echo $row['Name']; ?>">

                <h3>
                  <?php echo $row['Name']; ?>
                </h3>

                <p>Rs.
                  <?php echo number_format($row['price'], 2); ?>
                </p>
                <button class="btn-add" onclick="location.href='cart.html'">
                  <i class="fa-solid fa-cart-shopping"></i>
                  Buy Now
                </button>

            </div></a>
        <?php
          }
        } else {
          echo "<p>No products found.</p>";
        }
        ?>


      </div>
    </div>
  </section>

  <section id="gold" class="collection-section">
    <div class="container">
      <h2>𝗚𝗢𝗟𝗗 𝗘𝗦𝗦𝗘𝗡𝗧𝗜𝗔𝗟𝗦</h2>

      <div class="product-grid">
        <?php
        include './config/db.php';

        $sql = "SELECT * FROM `productss` WHERE  category = 'gold'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div data-aos="zoom-out" class="product-card">
              <a href="product.php?id=<?php echo $row['id']; ?>">
                <img src="./admin/images/<?php echo $row['image']; ?>" alt="<?php echo $row['Name']; ?>">

                <h3>
                  <?php echo $row['Name']; ?>
                </h3>

                <p>Rs.
                  <?php echo number_format($row['price'], 2); ?>
                </p>
                <button class="btn-add" onclick="location.href='cart.html'">
                  <i class="fa-solid fa-cart-shopping"></i>
                  Buy Now </button>

            </div></a>
        <?php
          }
        } else {
          echo "<p>No products found.</p>";
        }
        ?>


      </div>
    </div>
  </section>
  <section id="diamond" class="collection-section">
    <div class="container">
      <h2>𝗗𝗜𝗔𝗠𝗢𝗡𝗗 𝗘𝗗𝗜𝗧𝗜𝗢𝗡</h2>

      <div class="product-grid">
        <?php
        include './config/db.php';

        $sql = "SELECT * FROM `productss` WHERE  category = 'diamond'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div data-aos="zoom-out" class="product-card">
              <a href="product.php?id=<?php echo $row['id']; ?>">
                <img src="./admin/images/<?php echo $row['image']; ?>" alt="<?php echo $row['Name']; ?>">

                <h3>
                  <?php echo $row['Name']; ?>
                </h3>

                <p>Rs.
                  <?php echo number_format($row['price'], 2); ?>
                </p>
                <button class="btn-add" onclick="location.href='cart.html'">
                  <i class="fa-solid fa-cart-shopping"></i>
                  Buy Now </button>

            </div></a>
        <?php
          }
        } else {
          echo "<p>No products found.</p>";
        }
        ?>


      </div>
    </div>
  </section>

  <section id="mens" class="collection-section">
    <div class="container">
      <h2>𝗠𝗘𝗡𝗦 𝗟𝗨𝗫𝗨𝗥𝗬</h2>

      <div class="product-grid">
        <?php
        include './config/db.php';

        $sql = "SELECT * FROM `productss` WHERE  category = 'mens'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div data-aos="zoom-out" class="product-card">
              <a href="product.php?id=<?php echo $row['id']; ?>">
                <img src="./admin/images/<?php echo $row['image']; ?>" alt="<?php echo $row['Name']; ?>">

                <h3>
                  <?php echo $row['Name']; ?>
                </h3>

                <p>Rs.
                  <?php echo number_format($row['price'], 2); ?>
                </p>

                <button class="btn-add" onclick="location.href='product.php'">
                  <i class="fa-solid fa-cart-shopping"></i>
                  Buy Now </button>

            </div></a>
        <?php
          }
        } else {
          echo "<p>No products found.</p>";
        }
        ?>


      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-6">
      <div>
        <h3 class="font-bold text-lg mb-4">Eterna Jewels</h3>
        <p>Handcrafted luxury jewelry for every occasion.</p>
      </div>
      <div>
        <h3 class="font-bold text-lg mb-4">Quick Links</h3>
        <ul>
          <li><a href="index.html" class="hover:text-amber-600">Home</a></li>
          <li><a href="shop.php" class="hover:text-amber-600">Shop</a></li>
          <li><a href="collections.php" class="hover:text-amber-600">Collections</a></li>
          <li><a href="about.html" class="hover:text-amber-600">About</a></li>
          <li><a href="contact.html" class="hover:text-amber-600">Contact</a></li>
        </ul>
      </div>
      <div>
        <h3 class="font-bold text-lg mb-4">Policies</h3>
        <ul>
          <li><a href="terms.html" class="hover:text-amber-600">Terms & Conditions</a></li>
          <li><a href="refund.html" class="hover:text-amber-600">Refund Policy</a></li>
          <li><a href="privacy.html" class="hover:text-amber-600">Privacy Policy</a></li>
          <li><a href="shipping.html" class="hover:text-amber-600">Shipping Policy</a></li>
        </ul>
      </div>
      <div>
        <h3 class="font-bold text-lg mb-4">Newsletter</h3>
        <p>Subscribe for exclusive offers and updates</p>
        <input type="email" placeholder="Your Email" class="mt-2 px-3 py-2 rounded text-gray-900 w-full">
        <button class="mt-2 bg-amber-600 text-white px-4 py-2 rounded hover:bg-amber-700">Subscribe</button>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>

</body>

</html>