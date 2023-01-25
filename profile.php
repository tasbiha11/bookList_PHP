<?php

include 'config.php';
session_start();
if (isset($_SESSION['username'])) {
    echo "<script>location.href='profile.php'</script>";
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
    <title>User Profile</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        html,
        body * {
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            background:
                linear-gradient(rgba(246, 247, 249, 0.8),
                    rgba(246, 247, 249, 0.8)),
                url(https://res.cloudinary.com/dxfq3iotg/image/upload/v1564049481/bg-clouds.jpg) no-repeat center center fixed;
            background-size: cover;

        }

        form {
            background: linear-gradient(rgba(35, 43, 85, 0.75),
                    rgba(35, 43, 85, 0.95));
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border: 2px solid white;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-primary fw-bold" href="home.php">BookList</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="row justify-content-center mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="updateProfile.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <h3 class="text-center text-light">User Profile</h3>
                    </div>
                    <?php
                    $sql = "SELECT * FROM registered WHERE username='{$_SESSION["username"]}'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                            <div class="mb-3">
                                <label for="username" class=" text-light">Username:</label>
                                <input type="text" value="<?php echo $row['username'] ?>" class="form-control" name="username" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="email" class=" text-light">Email:</label>
                                <input type="text" value="<?php echo $row['email'] ?>" class="form-control" name="email" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class=" text-light">Mobile:</label>
                                <input type="text" value="<?php echo $row['mobile'] ?>" class="form-control" name="mobile" disabled>
                            </div>


            </div>


            </form>
        </div>
    </div>
<?php
                        }
                    }
?>

</form>
</body>

</html>