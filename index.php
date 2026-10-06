<?php
// File: index.php

include 'rumus_bangun.php';

$hasil = null;
$error = "";

if (isset($_POST['hitung'])) {
    $bangun = $_POST['bangun'];
    $sisi = $_POST['sisi'];

    // Validasi sederhana
    if (empty($bangun) || empty($sisi) || !is_numeric($sisi)) {
        $error = "Harap pilih bangun dan masukkan angka yang valid!";
    } else {
        // Percabangan memilih rumus
        if ($bangun == "persegi") {
            $hasil = hitungPersegi($sisi); // Memanggil fungsi
        } elseif ($bangun == "kubus") {
            $hasil = hitungKubus($sisi);   // Memanggil fungsi
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas Minggu 03 - Simpel</title>
</head>
<body>

    <h2>Aplikasi Hitung Bangun</h2>

    <form method="POST" action="">
        <label>Pilih Bangun:</label>
        <select name="bangun">
            <option value="">-- Pilih --</option>
            <option value="persegi">Persegi (Datar)</option>
            <option value="kubus">Kubus (Ruang)</option>
        </select>
        <br><br>

        <label>Masukkan Sisi:</label>
        <input type="number" name="sisi">
        <br><br>

        <button type="submit" name="hitung">Hitung</button>
    </form>

    <hr>

    <!-- Menampilkan Error -->
    <?php if ($error != ""): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <!-- Menampilkan Hasil -->
    <?php if ($hasil != null): ?>
        <h3>Hasil:</h3>
        <ul>
            <?php 
    
            foreach ($hasil as $label => $angka) {
                echo "<li>$label: $angka</li>";
            }
            ?>
        </ul>
    <?php endif; ?>

</body>
</html>