<?php
session_start();
include('config.php');

$name = mysqli_real_escape_string($koneksi, $_POST['fullname']);
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);
$confirm_password = mysqli_real_escape_string($koneksi, $_POST['confirm_password']);

if ($password !== $confirm_password) {
    header('Location:../register.php?error=1');
    exit();
}

$password_hash = password_hash($password, PASSWORD_BCRYPT);

$query_check = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username'");
if (mysqli_num_rows($query_check) > 0) {
    header('Location:../register.php?error=2');
    exit();
}
$query_check = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email'");
if (mysqli_num_rows($query_check) > 0) {
    header('Location:../register.php?error=2');
    exit();
}

$query_insert = "INSERT INTO tb_user (nama, username, email, password) VALUES ('$name', '$username', '$email', '$password_hash')";
if (mysqli_query($koneksi, $query_insert)) {
    header('Location:../login.php?success=1');
} else {
    header('Location:../register.php?error=3');
}
