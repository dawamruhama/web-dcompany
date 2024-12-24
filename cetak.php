<?php
// Hubungkan ke database
$conn = mysqli_connect("localhost", "root", "", "pelamaran");

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Periksa apakah parameter ID telah diberikan
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query SQL untuk mengambil data pelamar berdasarkan ID
    $sql = "SELECT * FROM quisioner WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Di sini Anda dapat mengatur tampilan untuk mencetak data pelamar
        echo "<div style='display: flex; align-items: center;'>";
        
        // Tampilkan biodata di sebelah kiri
        echo "<div style='flex: 2;'>";
        echo "<h1>Detail Pelamar</h1>";
        echo "<p>Nomor Reg : " . $row['id'] . "</p>";
        echo "<p>Nomor Identitas (NIK) : " . $row['nik'] . "</p>";
        echo "<p>Nama     : " . $row['nama_lengkap'] . "</p>";
        echo "<p>Jenis Kelamin     : " . $row['jenis_kelamin'] . "</p>";
        echo "<p>Alamat   : " . $row['alamat'] . "</p>";
        echo "<p>Nomer HP : " . $row['nomor_hp'] . "</p>";
        echo "<p>E-mail   : " . $row['email'] . "</p>";
        echo "<p>Tempat Lahir: " . $row['tempat_lahir'] . "</p>";
        echo "<p>Tanggal Lahir: " . $row['tanggal_lahir'] . "</p>";
        echo "<p>Lulusan : " . $row['lulusan_terakhir'] . "</p>";
        echo "<p>Status : " . $row['status_pernikahan'] . "</p>";
        echo "<p>Pengalaman Kerja : " . $row['pengalaman_kerja'] . "</p>";
        // Tambahkan informasi lain sesuai kebutuhan
        // Di sini Anda dapat menambahkan tampilan lainnya sesuai kebutuhan
        echo "</div>";

        // Tampilkan gambar di pojok kiri
        echo "<div style='flex: 1; text-align: left;'>";
        echo "<img src='" . $row['photo'] . "' width='200' style='margin-top: 70px;'><br>";
        echo "</div>";

        echo "</div>";

        // Mengakhiri proses pencetakan
        echo "<script>window.print();</script>";
    } else {
        echo "Data pelamar tidak ditemukan.";
    }
} else {
    echo "Parameter ID tidak diberikan.";
}

// Tutup koneksi database
mysqli_close($conn);
?>






