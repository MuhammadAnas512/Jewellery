<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>


    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>


    <?php
    include "../config/db.php";

    // Initialize variables
    $id = "";
    $name = "";
    $price = "";
    $category = "";
    $description = "";
    $image = "";
    $flag = false;

    // Check if edit mode
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $flag = true;

        $res = mysqli_query($con, "SELECT * FROM productss WHERE id='$id'");
        $row = mysqli_fetch_assoc($res);

        if ($row) {
            $name        = $row['Name'];
            $price       = $row['price'];
            $category    = $row['category'];
            $description = $row['description'];
            $image       = $row['image'];
        }
    }
    ?>





    <h2 class="text text-center text-white ">Admin Dashboard</h2>

    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
        <form action="add-product.php" method="POST" enctype="multipart/form-data"
            class="bg-white shadow-2xl rounded-2xl p-10 w-full max-w-lg space-y-6">

            <input type="hidden" name="id" value="<?php echo $id ?>">

            <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Admin Dashboard</h2>
            <div class="flex flex-col">


                <?php if ($flag && !empty($image)) { ?>
                    <!-- Show existing image -->
                    <img src="images/<?php echo $image; ?>" width="150" class="rounded mb-2">
                    <p class="text-sm text-gray-500 mb-1"></p>
                <?php } ?>
                <label class="mb-2 text-gray-700 font-semibold">Product Image</label>
                <input type="file" name="image" value="<?php echo $image ?> "
                    class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-2 text-gray-700 font-semibold">Product Name</label>
                <input type="text" name="Name" required value="<?php echo $name ?>"
                    class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>


            <div class="flex flex-col">
                <label class="mb-2 text-gray-700 font-semibold">Price</label>
                <input type="text" name="price" required value="<?php echo $price ?>"
                    class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-2 text-gray-700 font-semibold">Description</label>
                <input type="text" name="description" required value="<?php echo $description ?>"
                    class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="flex flex-col">
                <label class="mb-2 text-gray-700 font-semibold">Category</label>
                <input type="text" name="category" required value="<?php echo $category ?>"
                    class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>


            <!-- Submit -->
            <div class="flex justify-center text-center space-x-4 mb-6  ">
                <button type="submit" class="bg-gradient-to-r from-purple-600 to-pink-500 text-white font-bold py-3 px-8 rounded-full shadow-lg hover:scale-105 transition-transform cursor-pointer"><a href="http://localhost:8080/dynamic/admin/viewproducts.php">View Products</a></button>

                <?php if (!$flag) { ?>
                    <button type="submit" name="btn-add" class="bg-gradient-to-r from-purple-600 to-pink-500 text-white font-bold py-3 px-8 rounded-full shadow-lg hover:scale-105 transition-transform cursor-pointer">Add Product</button>
                <?php } else { ?>
                    <button type="submit" name="btn-update" class="bg-gradient-to-r from-purple-600 to-pink-500 text-white font-bold py-3 px-8 rounded-full shadow-lg hover:scale-105 transition-transform cursor-pointer">Update Product</button>
                <?php } ?>
                <a href="logout.php" class="bg-gradient-to-r from-purple-600 to-pink-500     text-white font-bold py-3 px-8 rounded-full shadow-lg hover:scale-105 transition-transform cursor-pointer">
                    Logout
                </a>
            </div>




        </form>
    </div>

</body>

</html>