<?php
session_start();
include "../config/db.php";

$message = "";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $result = mysqli_query($con, "SELECT * FROM admins WHERE email='$email' AND password='$password'");
    $a = mysqli_num_rows($result);
    if ($a > 0) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['email'] = $email;
        header("Location:dashboard.php");

        exit();
    } else {
        header("Location:login.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Admin Login</title>
</head>

<body>

    <form method="POST"
        class="max-w-lg mx-auto mt-40 bg-white p-12 rounded-3xl shadow-2xl border border-black-800">

        <h2 class="text-3xl font-bold mb-6 text-center text-gray-800">
            Admin Login
        </h2>

        <?php if ($message) { ?>
            <p class="bg-red-100 text-red-600 px-4 py-2 rounded-lg mb-4 text-sm border border-red-200">
                <?php echo $message; ?>
            </p>
        <?php } ?>

        <input type="email"
            name="email"
            placeholder="Email"
            required
            class="w-full border border-black-500 px-4 py-3 mb-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200">

        <input type="password"
            name="password"
            placeholder="Password"
            required
            class="w-full border border-black-300 px-4 py-3 mb-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition duration-200">

        <button type="submit"
            name="login"
            class="w-full bg-gradient-to-r from-purple-600 to-pink-500 text-white py-3 rounded-lg font-semibold hover:from-purple-700 hover:to-pink-600 transition duration-300 shadow-md">
            Login
        </button>

    </form>









    </form>


</body>

</html>