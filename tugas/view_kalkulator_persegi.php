<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Luas Bangun Datar</title>
</head>
<body>
    <?php
    if (isset($_POST['hitung_persegi'])) {
        $sisi = $_POST['sisi_persegi'];
        $luas_persegi = $sisi * $sisi;
        echo "<h3>Luas Persegi</h3>";
        echo "Sisi: " . $sisi . "<br>";
        echo "Luas: " . $luas_persegi;
    }

    if (isset($_POST['hitung_persegi_panjang'])) {
        $panjang = $_POST['panjang_persegi_panjang'];
        $lebar = $_POST['lebar_persegi_panjang'];
        $luas_persegi_panjang = $panjang * $lebar;
        echo "<h3>Luas Persegi Panjang</h3>";
        echo "Panjang: " . $panjang . "<br>";
        echo "Lebar: " . $lebar . "<br>";
        echo "Luas: " . $luas_persegi_panjang;
    }

    if (isset($_POST['hitung_segitiga'])) {
        $alas = $_POST['alas_segitiga'];
        $tinggi = $_POST['tinggi_segitiga'];
        $luas_segitiga = 0.5 * $alas * $tinggi;
        echo "<h3>Luas Segitiga</h3>";
        echo "Alas: " . $alas . "<br>";
        echo "Tinggi: " . $tinggi . "<br>";
        echo "Luas: " . $luas_segitiga;
    }
    ?>
</body>
</html>


