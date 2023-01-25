<?php
include 'config.php';
$book_name = $_POST['book_name'];
$author_name = $_POST['author_name'];
$price = $_POST['price'];
$image = $_FILES['image'];

$imageLocation = $image['tmp_name'];
$imageName = $image['name']; //bookName.png

$image_des = "image/" . $imageName; //path

move_uploaded_file($imageLocation, $image_des);

$insertProductQuery = "INSERT INTO `books`(`bookName`, `authorName`, `price`, `cover`) VALUES ('$book_name','$author_name','$price','$image_des')";

if (!mysqli_query($conn, $insertProductQuery)) {
    echo "<script>alert('Book is not inserted !')</script>";
    echo "<script>location.href='home.php'</script>";
} else {
    echo "<script>alert('Book is INSERTED !')</script>";
    echo "<script>location.href='home.php'</script>";
}
