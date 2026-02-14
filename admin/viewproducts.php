<?php
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location:login.php");
    exit();
}
?>



<?php
include "../config/db.php"; // Include DB connection
$result = mysqli_query($con, "SELECT * FROM productss ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
            font-size: 32px;
            font-weight: 800px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #2c3e50;
            color: #fff;
            text-transform: uppercase;
        }

        tr:hover {
            background: #f1f1f1;
        }

        img {
            border-radius: 6px;
            object-fit: cover;
        }

        .btn {
            padding: 6px 12px;
            text-decoration: none;
            color: #fff;
            border-radius: 4px;
            font-size: 14px;
        }

        .edit {
            background: #f39c12;
        }

        .edit:hover {
            background: #d68910;
        }

        .delete {
            background: #e74c3c;
        }

        .delete:hover {
            background: #c0392b;
        }

        .add {
            background: #27ae60;
            margin-bottom: 20px;
            display: inline-block;
        }

        .add:hover {
            background: #1e8449;
        }
    </style>
</head>

<body>
    <?php
    include "../config/db.php";

    // DELETE
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($con, "DELETE FROM productss WHERE id='$id'");
    }

    $result = mysqli_query($con, "SELECT * FROM productss ORDER BY id DESC");
    ?>






    <h2>All Products</h2>


    <table>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Description</th>
            <th colspan="2">Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><img src="images/<?php echo $row['image']; ?>" width="90" height="90"></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><a class="btn edit" href="dashboard.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
                <td><a class="btn delete" href="viewproducts.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to delete this product?')" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition">
                        Delete
                    </a></td>
            </tr>
        <?php } ?>

    </table>





</body>

</html>