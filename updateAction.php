<?php
include 'config.php';
$id = $_POST['id'];
$updateName = $_POST['bookName'];
$updateAuthor = $_POST['authorName'];
$updatePrice = $_POST['price'];
$updateCover = $_FILES['cover'];

$imageLocation = $updateCover['tmp_name'];
$imageName = $updateCover['name'];

$image_des = "image/" . $imageName;

move_uploaded_file($imageLocation, $image_des);
$updateQuery = "UPDATE `books` SET `bookName`='$updateName',`authorName`='$updateAuthor',`price`='$updatePrice',`cover`='$image_des' WHERE id='$id'";

if (!mysqli_query($conn, $updateQuery)) {
    echo "<script>alert('Book Cart is not UPDATED !')</script>";
    echo "<script>location.href='home.php'</script>";
} else {
    echo "<script>alert('Book Cart is is UPDATED !')</script>";
    echo "<script>location.href='cart.php'</script>";
}


// echo $id;
