<?php
include 'config.php';
$id = $_GET['id'];

$deleteQuery = "DELETE FROM `books` WHERE id='$id'";

mysqli_query($conn, $deleteQuery);

header("location:home.php");
