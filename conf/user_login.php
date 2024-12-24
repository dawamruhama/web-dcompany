<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    if (empty($username) || empty($password)) {
        header('Location: ../login.php?error=empty_fields');
        exit();
    }

    $query = "SELECT * FROM tb_user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['username'] = $user['username'];
            header('Location: ../index.php'); 
            exit();
        } else {
            header('Location: ../login_pelamar.php?error=invalid_password');
            exit();
        }
    } else {
        header('Location: ../login_pelamar.php?error=invalid_username');
        exit();
    }
} else {
    header('Location: ../login_pelamar.php');
    exit();
}