<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Luas Bangun Datar</title>
</head>
<body>
    <h2>Kalkulator Luas Bangun Datar</h2>
    <form method="post" action="view_kalkulator_persegi.php">
        <h3>Persegi</h3>
        Sisi: <input type="number" name="sisi_persegi" required><br>
        <input type="submit" name="hitung_persegi" value="Hitung Luas Persegi">
    </form>

    <form method="post" action="view_kalkulator_persegi.php">
        <h3>Persegi Panjang</h3>
        Panjang: <input type="number" name="panjang_persegi_panjang" required><br>
        Lebar: <input type="number" name="lebar_persegi_panjang" required><br>
        <input type="submit" name="hitung_persegi_panjang" value="Hitung Luas Persegi Panjang">
    </form>

    <form method="post" action="view_kalkulator_persegi.php">
        <h3>Segitiga</h3>
        Alas: <input type="number" name="alas_segitiga" required><br>
        Tinggi: <input type="number" name="tinggi_segitiga" required><br>
        <input type="submit" name="hitung_segitiga" value="Hitung Luas Segitiga">
    </form>
</body>
</html>