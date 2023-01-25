<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d16d567c69.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/contactUs.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-primary fw-bold" href="index.php">BookList</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-center text-cust mt-3">Contact With Us</h1>

        <div class="d-flex justify-content-evenly mt-5 row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group mb-3">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="email" placeholder="Name" name="name" value="" required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="" required>
                    </div>
                </div>
                <textarea class="form-control mb-3" rows="10" placeholder="Your Message" name="message" required></textarea>
                <button class="btn bg-cust text-light col-12">Send</button>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <ul class="contact-list">
                    <li class="list-item"><i class="ms-5 fa fa-map-marker fa-2x"><span class="contact-text space">Sylhet, Bangladesh</span></i></li>

                    <li class="list-item "><i class=" ms-5 fa fa-phone fa-2x"><span class="contact-text space"><a href="">01712345678</a></span></i></li>

                    <li class="list-item"><i class="ms-5 fa fa-envelope fa-2x"><span class="contact-text space"><a href="">bookcheckList@gmail.com</a></span></i></li>
                    <hr>
                    <hr>
                    <div class="d-flex justify-content-evenly">

                        <li><a href="" target="_blank" class="contact-icon">
                                <i class="fa fa-github fa-2x color-cust" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="" target="_blank" class="contact-icon">
                                <i class="fa fa-twitter fa-2x color-cust" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="" target="_blank" class="contact-icon">
                                <i class="fa fa-instagram fa-2x color-cust" aria-hidden="true"></i></a>
                        </li>

                    </div>
                    <hr>
                    <hr>
                </ul>
            </div>


        </div>

    </div>
</body>

</html>