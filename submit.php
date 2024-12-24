<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <!-- Required meta tags-->

    <!-- Font special for pages-->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <!-- Main CSS-->
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Hubungkan ke database
        $conn = mysqli_connect("localhost", "root", "", "pelamaran");

        // Periksa koneksi database
        if (!$conn) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        // Ambil data dari formulir
        $nik = $_POST['nik'];
        $nomorhp = $_POST['nomor_hp'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $posisi_yang_dilamar = $_POST['posisi_yang_dilamar'];
        $pengalaman_kerja = $_POST['pengalaman_kerja'];
        $lulusan_terakhir = $_POST['lulusan_terakhir'];
        $status_pernikahan = $_POST['status_pernikahan'];

        // Unggah file
        $photo_path = "uploads/" . $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);
        $cv_path = "uploads/" . $_FILES['cv']['name'];
        move_uploaded_file($_FILES['cv']['tmp_name'], $cv_path);
        $paklaring_path = "uploads/" . $_FILES['paklaring']['name'];
        move_uploaded_file($_FILES['paklaring']['tmp_name'], $paklaring_path);

        // Simpan data ke database
        $sql = "INSERT INTO quisioner (nik, nomor_hp, nama_lengkap, email, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, photo, cv, paklaring, posisi_yang_dilamar, pengalaman_kerja, lulusan_terakhir, status_pernikahan) 
            VALUES ('$nik', '$nomorhp', '$nama_lengkap', '$email','$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$photo_path', '$cv_path', '$paklaring_path', '$posisi_yang_dilamar', '$pengalaman_kerja', '$lulusan_terakhir', '$status_pernikahan')";

        if ($conn->query($sql) === TRUE) {
            // SweetAlert untuk pesan sukses
            echo '<script>
                Swal.fire({
                    icon: "warning",
                    title: "Anda yakin akan Mengirim Lamaran Anda ?",
                    text: "Pastikan data di isi dengan benar !!!",
                    showCancelButton: true, // Tampilkan tombol "Cancel"
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Kirim",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = "index.php"; // Jika "Ya" diklik, kembali ke halaman "pelamar"
                    } else {
                        window.location = "form.php"; // Jika "Cancel" diklik, kembali ke halaman "daftar"
                    }
                });
            </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Tutup koneksi database
        $conn->close();
    }
    ?>
</body>
</html>
