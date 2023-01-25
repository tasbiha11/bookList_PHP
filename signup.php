<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Checklist</title>

    <link rel="stylesheet" href="./css/login.css">
    <script src="./js/reg.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        span {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="frame-signup">
            <div class="nav">
                <ul class="links">
                    <li class="login-active"><a class="btn" href="login.php">Log in</a></li>
                    <li class="login-active"><a href="signup.php" class="btn">Sign up</a></li>
                </ul>
            </div>

            <form action="insert.php" method="post" onsubmit="return formValidation()" class="form-login">
                <div>
                    <label for="s_uname" class="text-light">Username</label>
                    <input type="text" class="form-styling" name="s_username" id="s_uname" placeholder="Enter username" />
                    <span id="error_u"></span>
                </div>

                <div>
                    <label for="s_pass" class="text-white">Password</label>
                    <input id="s_pass" class="form-styling" type="password" name="s_pass" placeholder="Enter password" />
                    <span id="error_p"></span>
                </div>

                <div>
                    <label for="s_cpass" class="text-white">Confirm Password</label>
                    <input id="s_cpass" class="form-styling" type="text" name="s_conpass" placeholder="Enter password" />
                    <span id="error_cp"></span>
                </div>

                <div>
                    <label for="s_email" class="text-light">Email</label>
                    <input id="s_email" class="form-styling" type="text" name="s_email" placeholder="Enter email" />
                    <span id="error_e"></span>
                </div>

                <div>
                    <label for="s_mob" class="text-light">Mobile</label>
                    <input id="s_mob" class="form-styling" type="text" name="s_mobile" placeholder="Enter mobile" />
                    <span id="error_m"></span>
                </div>

                <button type="submit" class="btn btn-primary col-12 mt-2" name="submit-button" id="sub-btn">Register</button>
            </form>
        </div>


    </div>

</body>

</html>