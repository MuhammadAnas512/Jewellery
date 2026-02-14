<?php
include "config/db.php";

if (!isset($_GET['id'])) {
    echo "No product selected!";
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM productss WHERE id='$id'";
$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) == 0) {
    echo "Product not found!";
    exit();
}

$product = mysqli_fetch_assoc($res);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['Name']; ?> | Eterna Jewels</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body class="bg-white text-gray-900 font-[Roboto]">

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
                    <a href="adminlogin.html"><i class="fa-regular fa-user hover:text-amber-600"></i></a>
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

    <!-- Breadcrumb -->
    <div class="max-w-7xl mx-auto px-6 py-4 text-sm text-gray-500">
        <a href="index.html "> Home </a> <a href="collections.php">/ Collections /</a> <span class="text-gray-900"><?php echo $product['Name']; ?></span>
    </div>

    <!-- Product Section -->
    <section class="max-w-7xl mx-auto px-6 py-12 grid lg:grid-cols-2 gap-12">

        <!-- Left: Image Gallery -->
        <div>
            <img src="admin/images/<?php echo $product['image']; ?>" class="w-full h-[520px] object-cover rounded-lg mb-4">
            <div class="grid grid-cols-4 gap-4">

            </div>
        </div>

        <!-- Right: Product Info -->
        <div class="flex flex-col justify-between">
            <div>
                <h1 class="font-[Playfair_Display] text-3xl font-semibold mb-4"><?php echo $product['Name']; ?></h1>
                <p class="text-xl text-amber-600 font-medium mb-6">Rs. <?php echo number_format($product['price'], 2); ?></p>

                <!-- Quantity -->
                <div class="mb-6">
                    <h4 class="font-medium mb-2">Quantity</h4>
                    <div class="flex items-center border w-max rounded">
                        <button id="dec" class="px-4 py-2">-</button>
                        <span id="qty" class="px-4">1</span>
                        <button id="inc" class="px-4 py-2">+</button>
                    </div>
                </div>



                <!-- Details -->
                <div class="mt-8 space-y-4 text-gray-600">
                    <p><strong>Description:</strong> <?php echo $product['description']; ?></p>
                    <p><strong>Material:</strong> <?php echo $product['material'] ?? 'Premium quality'; ?></p>
                    <p><strong>Care:</strong> <?php echo $product['care'] ?? 'Keep away from moisture and perfumes'; ?></p>
                </div>

                <br>
                <!-- CTA -->
                <div class="flex gap-4">
                    <button class="flex-1 bg-black text-white py-4 rounded-lg hover:bg-amber-500 transition">BUY NOW</button>
                    <button class="flex-1 border border-black py-4 rounded-lg hover:bg-amber-500 transition bg-black text-white ">ADD TO CART</button>
                </div>
            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 mt-16">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-6">
            <div>
                <h3 class="font-bold text-lg mb-4">Eterna Jewels</h3>
                <p>Handcrafted luxury jewelry for every occasion.</p>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-amber-600">Home</a></li>
                    <li><a href="#" class="hover:text-amber-600">Shop</a></li>
                    <li><a href="#" class="hover:text-amber-600">Collections</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-4">Policies</h3>
                <ul class="space-y-2">
                    <li>Refund Policy</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold text-lg mb-4">Newsletter</h3>
                <input type="email" placeholder="Email" class="w-full px-3 py-2 rounded text-black mb-2">
                <button class="bg-amber-600 w-full py-2 rounded">Subscribe</button>
            </div>
        </div>
    </footer>

    <script>
        let qty = 1;
        const qtyEl = document.getElementById('qty');
        document.getElementById('inc').addEventListener('click', () => {
            qty++;
            qtyEl.innerText = qty;
        });
        document.getElementById('dec').addEventListener('click', () => {
            if (qty > 1) qty--;
            qtyEl.innerText = qty;
        });
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