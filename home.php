<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "<script>location.href='home.php'</script>";
} else {
    echo "<script>alert('Login to add Books')</script>";
    echo "<script>location.href='index.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/d16d567c69.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/home.css">
    <style>
        nav {
            background: linear-gradient(rgba(35, 43, 85, 0.75),
                    rgba(35, 43, 85, 0.95));
        }
    </style>
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
                        <a class="nav-link active text-white" aria-current="page" href="profile.php">Profile</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="contactUs.php">Contact
                            Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="cart.php">View List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="about.php">About</a>
                    </li>

                </ul>
                <div class="d-flex">
                    <button class="btn btn-outline-warning text-white" type="submit"><a href="logout.php">Logout</a></button>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                <form action="productInsert.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <h3 class="text-center text-light">Insert Books to Buy</h3>
                    </div>
                    <div class="mb-3">
                        <label for="prductname" class=" text-light">Book Name:</label>
                        <input type="text" class="form-control" name="book_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="prductname" class=" text-light">Author Name:</label>
                        <input type="text" class="form-control" name="author_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class=" text-light">Price:</label>
                        <input type="text" class="form-control" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class=" text-light">Cover:</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <button type="Submit" class="btn btn-primary col-12 mt-2">Add to Cart</button>

                </form>

            </div>

        </div>

    </div>
    <div class="footer-basic mt-5">
        <footer>
            <div class="social"><a href="#"> <i class="fa fa-twitter fa-2x color-cust" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-facebook fa-2x color-cust" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram fa-2x color-cust" aria-hidden="true"></i></a>

            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>

                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">BookList © 2022</p>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>