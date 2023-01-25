<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookList</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d16d567c69.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/index.css">


    <style>
        nav {
            background: linear-gradient(rgba(35, 43, 85, 0.75),
                    rgba(35, 43, 85, 0.95));
            position: relative;
        }

        nav li :hover {
            background-color: grey;

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
                        <a class="nav-link active text-white" aria-current="page" href="#science">Science Fiction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#thriller">Thriller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#drama">Drama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#adventure">Adventure</a>
                    </li>



                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="contactUs.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="login.php">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="top">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1500">
                    <img src="./media/c1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img src="./media/c2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img src="./media/c4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div id="science" class="mt-2 mb-5">
        <h1 class="text-center mt-4 mb-5">Science Fiction</h1>
        <div class="container ">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card" id="science1" style="width: 18rem;">
                        <img src="./media/Cosmos.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">Dan Brown</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 250tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card" id="science2" style="width: 18rem;">
                        <img src="./media/artemis.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">Andy Weir</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 350tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card" id="science3" style="width: 18rem;">
                        <img src="./media/1984.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">George Orwell</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 350tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card" id="science3" style="width: 18rem;">
                        <img src="./media/1984.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">George Orwell</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 350tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
    <hr>
    <div id="thriller" class="mt-5 mb-5">
        <h1 class="text-center mt-5 mb-5">Thrillers</h1>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img src="./media/body.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">Bheket Kaya</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 200tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img src="./media/digital.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">Dan Brown</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 900tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img src="./media/night.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">Cassy Kristie</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 700tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <hr>
    <div id="drama" class="mt-5 mb-5">

        <h1 class="text-center mt-5 mb-5">Drama</h1>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img src="./media/drama6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">Margaret Atwood</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 9050tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img src="./media/drama5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">G Evans</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 800tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img src="./media/drama6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">J R Morgan</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 750tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <hr>
    <div id="adventure" class="mt-5 mb-5">
        <h1 class="text-center mt-5 mb-5">Adventures</h1>
        <div class="container">
            <div class="row g-5">



                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img src="./media/adventure4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">Andrwe Hamburg</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 300tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img src="./media/adventure1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">Tim Probert</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 150tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <img src="./media/adventure6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3 class="text-center">A S King</h3>
                            </div>
                            <div class="row justify-content-center">
                                <p class="text-center">Price 400tk</p>
                            </div>
                            <div class="row justify-content-center">
                                <a href="home.php"><button type="submit" class="btn btn-primary">Add to BookList</button></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-2">
            <div class="col-lg-6 col-sm-12 col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./media/drama1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./media/drama3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./media/drama2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-12 mt-5 pt-5 text-justify">
                <h1 class="text-primary fw-bold ">Best Sellers of the Week</h1>
                <p class="text-justify">Thes are the Best-selling books of the week. The estimated number of copies sold of each book are more than 100, rather than the number of books printed or currently owned. Comics and textbooks are not included in this list. The books are listed according to the highest sales estimate as reported in reliable, independent sources. Get your copy, or save to list inorder to get the book as soon as possible. Highest sold number of books in a week. Get your chanse to meet the authors in a meet and greet session.</p>
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