<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap"
    rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <header class="bg-white border-b border-gray-100 fixed top-10 z-50 w-full">
    <nav class="max-w-7xl mx-auto px-6 relative">

      <!-- Top Bar -->
      <div class="flex h-16 items-center justify-between">

        <!-- Logo -->
        <a href="index.html" class="text-2xl font-serif text-gray-900">
          Eterna <span class="text-amber-600">Jewels</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center space-x-10 text-gray-700">
          <a href="index.html" class="hover:text-amber-600 hover:decoration-none">Home</a>
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
  <section>
    <section class="min-h-screen flex items-center justify-center">

      <div class="bg-white p-8 rounded-3xl shadow-lg w-full max-w-md border border-black">
        <h2 class="text-2xl font-bold text-center text-black mb-6">Login</h2>

        <form action="./admin/add-product.php" method="POST" class="space-y-5">

          <div>
            <label class="block text-sm font-medium text-black mb-1">
              Email
            </label>
            <input type="text" name="email" placeholder="Enter your Email"
              class="w-full px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
          </div>

          <div>
            <label class="block text-sm font-medium text-black mb-1">
              Password
            </label>
            <input type="password" name="password" placeholder="Enter your password"
              class="w-full px-4 py-2 border border-black rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
          </div>

          <div>
            <input type="submit" name="btn-sub" value="Login"
              class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 active:scale-95 transition duration-200 cursor-pointer font-semibold">
          </div>

        </form>
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