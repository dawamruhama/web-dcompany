<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// load data json
$jsonData = file_get_contents('database/lowongan.json');
$lowonganList = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Perusahaan - D Company</title>
    <link rel="icon" href="assets/img/logo-d1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">D Company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">Daftar Lamaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="perusahaan.php">Info Loker</a>
                    </li>
                    <li class="nav-item">
                        <?php if (isset($_SESSION['username'])): ?>
                            <a class="btn btn-danger px-2" href="logout.php" role="button">Logout</a>
                        <?php else: ?>
                            <a class="btn btn-secondary px-2" href="login.php" role="button">Login</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Informasi Lowongan Pekerjaan</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($lowonganList as $lowongan): ?>
                <div class="col">
                    <div class="card shadow-lg h-100">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><?= htmlspecialchars($lowongan['perusahaan']); ?></h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title text-primary"><?= htmlspecialchars($lowongan['posisi']); ?></h6>
                            <ul class="list-unstyled">
                                <li><strong>Tipe pekerjaan:</strong> <?= htmlspecialchars($lowongan['tipe_pekerjaan']); ?></li>
                                <li><strong>Gaji:</strong> <?= htmlspecialchars($lowongan['gaji']); ?></li>
                                <li><strong>Lokasi:</strong> <?= htmlspecialchars($lowongan['lokasi']); ?></li>
                                <li><strong>Tanggal ditayangkan:</strong> <?= htmlspecialchars($lowongan['tanggal_ditayangkan']); ?></li>
                                <li><strong>Industri:</strong> <?= htmlspecialchars($lowongan['industri']); ?></li>
                            </ul>
                        </div>
                        <div class="card-footer text-center bg-light">
                            <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; 2024 D Company. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>