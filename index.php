<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan Tiket Sepakbola</title>
</head>
<body>

<?php
// Validasi Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Validasi untuk Input Text (nama)
    if (empty($_POST["nama"])) {
        $errors[] = "Nama harus diisi.";
    }

    // Validasi untuk Input Email
    if (empty($_POST["email"])) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Validasi untuk Input Date (tanggal)
    if (empty($_POST["tanggal"])) {
        $errors[] = "Tanggal harus diisi.";
    }

    // Validasi untuk Input Select (tiket)
    if (empty($_POST["tiket"])) {
        $errors[] = "Jenis tiket harus dipilih.";
    }

    // Validasi untuk Input Text (tribun)
    if (empty($_POST["tribun"])) {
        $errors[] = "Tribun harus diisi.";
    }

    // Tampilkan pesan error jika ada
    if (!empty($errors)) {
        echo "<div style='color: red; margin-bottom: 20px;'><strong>Error:</strong><br>";
        foreach ($errors as $error) {
            echo "- " . $error . "<br>";
        }
        echo "</div>";
    } else {
        echo "<div style='color: green;'><strong>Success:</strong> Data berhasil disimpan ke database.</div>";
    }
}
?>

<div class="kotak">
<h2>Pemesanan Tiket Sepakbola</h2>
<form method="post" action="proses_input.php">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="tanggal">Tanggal:</label>
    <input type="date" id="tanggal" name="tanggal" required>

    <label for="tiket">Jenis Tiket:</label>
    <select id="tiket" name="tiket" required>
        <option value="">Pilih Jenis Tiket</option>
        <option value="VIP">VIP</option>
        <option value="Regular">Regular</option>
    </select>

    <label for="tribun">Tribun:</label>
    <input type="text" id="tribun" name="tribun" required>

    <button type="submit">Simpan</button>
</form>
</div>

</body>
</html>
