<?php

include 'config.php';
$l_username = $_POST['l_username'];
$l_pass = $_POST['l_pass'];

$_result = mysqli_query($conn, "SELECT * FROM `registered` WHERE username='$l_username' And password='$l_pass'");

if (mysqli_num_rows($_result)) {
    session_start();
    $_SESSION['username'] = $l_username;
    echo "<script>location.href='home.php'</script>";
} else {
    echo "<script>alert('Incorrect username and password')</script>";
    echo "<script>location.href='login.php'</script>";
}
