<?php
include 'config.php';

$s_username = $_POST['s_username'];
$s_pass = $_POST['s_pass'];
$s_conpass = $_POST['s_conpass'];
$s_email = $_POST['s_email'];
$s_mobile = $_POST['s_mobile'];

$username_pattern = "/[A-Za-z .]{3,20}/";
$mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@%&*#£])).{6,20}/";
$email_pattern = "/(cse|eee|law)_\d{10}@lus.ac.bd/";


$duplicate_username = mysqli_query($conn, "SELECT * FROM `registered` WHERE username='$s_username'");

if (mysqli_num_rows($duplicate_username) > 0) {
    echo "<script>alert('Username Already Taken')</script>";
    echo "<script>location.href='signup.php'</script>";
} else if (!preg_match($username_pattern, $s_username)) {
    echo "<script>alert('Invalid Username!')</script>";
    echo "<script>location.href='signup.php'</script>";
} else if (!preg_match($pass_pattern, $s_pass)) {
    echo "<script>alert('Password not Strong enough!')</script>";
    echo "<script>location.href='signup.php'</script>";
} else if ($s_pass !== $s_conpass) {
    echo "<script>alert('Password not matched')</script>";
    echo "<script>location.href='signup.php'</script>";
} else if (!preg_match($email_pattern, $s_email)) {
    echo "<script>alert('LU email required!')</script>";
} else if (!preg_match($mobile_pattern, $s_mobile)) {
    echo "<script>alert('BD phone number only!')</script>";
    echo "<script>location.href='signup.php'</script>";
} else {
    $insert_query = "INSERT INTO `registered`(`username`, `password`, `email`, `mobile`) VALUES ('$s_username','$s_pass','$s_email','$s_mobile')";
    if (!mysqli_query($conn, $insert_query)) {
        echo "<script>alert('Not Inserted!')</script>";
    } else {
        echo "<script>alert('Inserted !')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}
