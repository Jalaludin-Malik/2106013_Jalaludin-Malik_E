<?php
// Mengambil data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];
$tiket = $_POST['tiket'];
$tribun = $_POST['tribun'];

// Validasi data
// ...

// Koneksi ke MySQL Server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2106013_Jalal"; 

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Menyiapkan query SQL untuk menyimpan data ke dalam tabel (ganti sesuai dengan struktur tabel Anda)
$sql = "INSERT INTO tiket_sepakbola (nama, email, tanggal, tiket, tribun)
        VALUES ('$nama', '$email', '$tanggal', '$tiket', '$tribun')";

// Menjalankan query
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan ke database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
