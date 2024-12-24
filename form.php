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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D Company - Daftar Pelamar</title>
    <link rel="icon" href="assets/img/logo-d1.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<style>
    label {
        font-weight: bold;
    }

    body {
        background-image: url('dist/img/photo4.jpg');
        background-size: cover;
    }
</style>

<body>
    <header class="navbar sticky-top navbar-expand-lg navbar-dark main-nav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto py-2">
                    <li class="nav-item">
                        <a class="nav-link active px-2" aria-current="page" href="index.php">Home</a>
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
    <div style="background-color: #fff;" class="container p-3 my-3 border">
        <h1 class="text-center">FORM PENDAFTARAN PELAMAR BARU</h1>
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <div class="alert alert-secondary">
                <strong>DATA DIRI</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Nama Lengkap :</label>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomer Identitas (NIK) :</label>
                        <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir :</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>tanggal Lahir :</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Status :</label>
                        <select class="form-control" name="status_pernikahan">
                            <option>Pilih</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Sudah Menikah">Sudah Menikah</option>
                            <option value="Duda / Janda">Duda / Janda</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Lulusan :</label>
                        <select class="form-control" name="lulusan_terakhir">
                            <option>Pilih</option>
                            <option value="SMA/SMK/SLTA">SMA/SMK/SLTA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S2">S3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Jenis Kelamin :</label>
                        <br>
                        <input type="radio" name="jenis_kelamin" value="Laki - laki"> Laki - laki
                        <br>
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Posisi yang di lamar :</label>
                        <select class="form-control" name="posisi_yang_dilamar">
                            <option>Pilih</option>
                            <option value="Direktur">Direktur</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="HRD">HRD</option>
                            <option value="Staff I.T">Staff I.T</option>
                            <option value="Manager">Manager</option>
                            <option value="Salesman">Digital Marketing</option>
                            <option value="Operator">Ilustrator</option>
                            <option value="OfficeBoy">Developer</option>
                            <option value="Security">Office</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Pengalaman Kerja</label>
                        <textarea class="form-control" rows="2" name="pengalaman_kerja" placeholder="Jika Ada..."></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>E-mail :</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan E-mail">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nomor Handphone :</label>
                        <input type="text" name="nomor_hp" class="form-control" placeholder="Masukan Nomor Handphone">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="2" name="alamat" placeholder="Alamat Sesuai KTP"></textarea>
                    </div>
                </div>
            </div>
            <br>
            <div class="alert alert-secondary">
                <strong>UPLOAD FILE</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Unggah Photo :</label>
                        <input type="file" class="form-control" name="photo" accept=".jpg, .jpeg .png" required>
                        <p class="label--desc">Upload foto 6x4/Latar Belakang Merah. Maksimal Ukuran File 10 MB</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Unggah Paklaring :</label>
                        <input type="file" class="form-control" name="paklaring" accept=".doc, .docx, .pdf, .jpg, .jpeg .png">
                        <p class="label--desc">Upload Paklaring (.doc/.pdf/ .jpg). Maksimal Ukuran File 10 MB</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Unggah CV :</label>
                        <input type="file" class="form-control" name="cv" accept=".doc, .docx, .pdf" required>
                        <p class="label--desc">Upload CV (.doc/.pdf). Maksimal Ukuran File 20 MB</p>
                    </div>
                </div>
            </div>
            <div class="alert alert-success">
                <strong>
                    <input type="checkbox" name="pernyataan1" value="pernyataan1" required>
                    Saya dengan ini menyatakan bahwa data yang saya isikan diatas sudah benar.
                </strong>
            </div>
            <center>
                <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                <button type="reset" name="reset" class="btn btn-secondary">Reset</button>
            </center>
        </form>
    </div>
    <center>
        <div style="background-color: black;" class="container p-3 my-3 border">
            <h5 style="color: #fff;" class="text-center">D' Company - Copyright &#169; 2024 Powered by Visual Studio Code</h5>
        </div>
    </center>
</body>
</html>