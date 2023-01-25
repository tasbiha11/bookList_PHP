<?php
include 'config.php';

$id = $_GET['id'];

$dataFetchQuery = "SELECT * FROM `books` WHERE id='$id'";
$record = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($record);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Update</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        form {
            background:
                linear-gradient(rgba(35, 43, 85, 0.75),
                    rgba(35, 43, 85, 0.95));
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border: 2px solid white;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="updateAction.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <h3 class="text-center text-light">Update Books</h3>
                    </div>
                    <div class="mb-3">
                        <label for="bookName" class=" text-light">Book Name:</label>
                        <input type="text" class="form-control" name="bookName" value="<?php echo $data['bookName'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="authorName" class=" text-light">AuthorName:</label>
                        <input type="text" class="form-control" name="authorName" value="<?php echo $data['authorName'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="price" class=" text-light">Price:</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $data['price'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="cover" class=" text-light">Cover:</label>
                        <input type="file" class="form-control" name="cover" value="<?php echo $data['cover'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <img src="<?php echo $data['cover'] ?>" alt="Image" width="100px" height="100px">
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    </div>
                    <button type="Submit" class="btn btn-success text-light fw-bold col-12">Update</button>

                </form>
            </div>

        </div>
    </div>
</body>

</html>