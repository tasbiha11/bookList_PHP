<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookList</title>
    <link rel="stylesheet" href="./css/login.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="top">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-primary fw-bold" href="index.php">BookList</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </nav>
    </div>
    <div class="container">

        <div class="frame">
            <div class="nav">
                <ul class="links">
                    <li class="login-active"><a class="btn" href="login.php">Log in</a></li>
                    <li class="login-active"><a href="signup.php" class="btn">Sign up</a></li>
                </ul>
            </div>

            <form class="form-login" action="loginAction.php" method="post">
                <label for="username" class="text-light">Username</label>
                <input class="form-styling" type="text" name="l_username" placeholder="Enter username" />
                <label for="password" class="text-white">Password</label>
                <input class="form-styling" type="password" name="l_pass" placeholder="Enter password" />
                <button type="submit" class="btn btn-primary col-12 mt-2">Login</button>
            </form>
        </div>


    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>