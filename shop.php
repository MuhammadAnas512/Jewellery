<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Shop our exclusive luxury jewelry collection. Handcrafted gold, diamond, and bridal pieces for every occasion.">
  <meta name="keywords" content="jewelry shop, luxury jewelry, gold jewelry, diamond jewelry, bridal jewelry">
  <meta name="author" content="VelvetJewels">

  <title>Shop</title>
  <link rel="stylesheet" href="style.css">

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
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
      <div
        id="mobileMenu"
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
  <div class="marquee top-marquee bg-white py-1 " style="position: fixed;  top: 0; left: 0; width: 100%; z-index: 9999;">
    <marquee style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" behavior="scroll" direction="left">
      Welcome to Eterna Jewels - Discover the Art of True Luxury | Exclusive Offers | Handcrafted Jewelry • Premium Gold & Diamonds • Exclusive Designs • Limited Edition Pieces • Shop the Latest Arrivals | New Arrivals Weekly
    </marquee>
  </div>

  <!-- Shop Banner -->
  <section class="collection-banner" style="background: url('https://cdn.shopify.com/s/files/1/0333/7460/1355/files/001-Jewellery12.jpg?v=1706798616')center/cover no-repeat;">
    <div class="banner-overlay"></div>
    <div class="banner-content" style="text-align: left;">
      <h1 style="color: rgb(255, 255, 255); padding-top: 0px;text-align: center;">𝗗𝗘𝗟𝗜𝗖𝗔𝗧𝗘 𝗗𝗘𝗦𝗜𝗚𝗡𝗦 𝗘𝗡𝗗𝗟𝗘𝗦𝗦 𝗕𝗘𝗔𝗨𝗧𝗬</h1>
      <p style="color: rgb(255, 255, 255); font-family: Verdana, Geneva, Tahoma, sans-serif; text-align: center; ">Discover handcrafted pieces that blend tradition with modern elegance</p><br>
      <div class="hero-buttons">
        <a href="shop.php" class="btn-primary">Shop Now</a>
        <a href="collections.php" class="btn-secondary">Explore Collections</a>
      </div>
    </div>

  </section>

  <!-- Featured Products Section -->
  <section id="featured" class="collection-section">
    <div class="container">
      <h2 style="text-align: center;">𝗘𝘅𝗰𝗹𝘂𝘀𝗶𝘃𝗲 𝗖𝗼𝗹𝗹𝗲𝗰𝘁𝗶𝗼𝗻</h2>
      <div class="product-grid">
        <?php
        include './config/db.php';

        $sql = "SELECT * FROM `productss` ";
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
              </a>
              <button class="btn-add" onclick="location.href='collections.php'">
                <i class="fa-solid fa-cart-shopping"></i>
                Buy Now </button>

            </div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


  <script src="script.js"></script>
  <script>
    const menuBtn = document.getElementById("menuBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>