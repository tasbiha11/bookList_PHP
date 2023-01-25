<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "<script>location.href='cart.php'</script>";
} else {
    echo "<script>alert('Do not access through URL')</script>";
    echo "<script>location.href='index.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .table-cust {
            background: linear-gradient(rgba(35, 43, 85, 0.75),
                    rgba(35, 43, 85, 0.95));

        }

        nav {
            background: linear-gradient(rgba(35, 43, 85, 0.75),
                    rgba(35, 43, 85, 0.95));
            position: relative;
        }

        nav li :hover {
            background-color: grey;

        }
    </style>
    <link rel="stylesheet" href="./css/cart.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="index.php">BookList</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="contactUs.php">Contact Us</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    <div class="container ">
        <h1 class="text-center text-primary fw-bold mb-3 mt-5">Your BookList</h1>
        <table class="table table-cust text-light">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Book</th>
                    <th scope="col">Author</th>
                    <th scope="col">Price</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $allData = mysqli_query($conn, "SELECT * FROM `books`");
                while ($row = mysqli_fetch_array($allData)) {
                    echo "<tr>
                                <td>$row[id]</td>
                                <td>$row[bookName]</td>
                                <td>$row[authorName]</td>
                                <td>$row[price]</td>
                                <td><img src='$row[cover]' width='100px' height='100px'></td>
                                <td><a class='btn btn-warning' href='update.php? id=$row[id]'>Update</a></td>
                                <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Delete</a></td>
                            </tr>";
                }
                ?>
            </tbody>
        </table>


    </div>
</body>

</html>