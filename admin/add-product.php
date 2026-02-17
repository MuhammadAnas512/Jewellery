<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Add Product</title>
</head>

<body>

    <?php
    include "../config/db.php";

    // INSERT PRODUCT
    if (isset($_POST['btn-add'])) {
        $name = $_POST['Name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description'];

        $imgname = $_FILES['image']['name'];
        $imgloc  = $_FILES['image']['tmp_name'];
        move_uploaded_file($imgloc, "images/" . $imgname);

        $sql = "INSERT INTO productss (image,name,price,category,description) 
            VALUES ('$imgname','$name','$price','$category','$description')";
        mysqli_query($con, $sql);
        header("location:dashboard.php");
        exit();
    }

    // UPDATE PRODUCT
    if (isset($_POST['btn-update'])) {
        $id = $_POST['id'];
        $name = $_POST['Name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description'];

        if (!empty($_FILES['image']['name'])) {
            $imgname = $_FILES['image']['name'];
            $imgloc  = $_FILES['image']['tmp_name'];
            move_uploaded_file($imgloc, "images/" . $imgname);

            $sql = "UPDATE productss SET 
                image='$imgname', name='$name', price='$price', category='$category', description='$description' 
                WHERE id='$id'";
        } else {
            $sql = "UPDATE productss SET 
                name='$name', price='$price', category='$category', description='$description'
                WHERE id='$id'";
        }

        mysqli_query($con, $sql);
        header("location:viewproducts.php");
        exit();
    }


    if (isset($_POST['btn-sub'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `users`(email,password) values('$email','$password')";
        mysqli_query($con, $sql);
        header("location:../collections.php");
        exit();
    }





    ?>



</body>

</html>