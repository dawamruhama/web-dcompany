<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D Company - Home</title>
  <link href="assets/img/logo-d1.png" rel="icon">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
  <header class="navbar sticky-top navbar-expand-lg navbar-dark main-nav">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ms-auto py-2">
          <li class="nav-item">
            <a class="nav-link active px-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="form.php">Daftar Lamaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="perusahaan.php">Info Loker</a>
          </li>
        </div>
      </div>
      <?php if (isset($_SESSION['username'])): ?>
        <a class="btn btn-danger px-2" href="logout.php" role="button">Logout</a>
      <?php else: ?>
        <a class="btn btn-secondary px-2" href="login.php" role="button">Login</a>
      <?php endif; ?>
    </div>

  </header>
  <section class="main-biru">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-6 text-center align-self-center">
          <div class="">
            <h2>Selamat Datang di <span>D Company</span><span></span></h2>
            <p>
              MULAI KARIR MU BERSAMA D COMPANY
            </p>
          </div>
        </div>
        <div class="col-lg-6 text-center align-self-senter">
          <div class="px -4 py -5">
            <img src="assets/img/logo-d.png" class="px-6 py-6 w-100" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="main-kolaborasi">
    <div class="container py-5">
      <h2 class="text-center main-judul">
        D COMPANY
      </h2>
      <p class="text-center">
        Membantu pencari kerja menemukan karier yang tepat adalah prioritas utama kami, karena dengan menemukan pekerjaan yang sesuai, kehidupan menjadi lebih sejahtera, dan produktivitas pun meningkat
      </p>
    </div>
  </section>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>