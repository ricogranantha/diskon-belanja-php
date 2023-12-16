<!DOCTYPE html>
<html>
<body>

<h2>Input Data Transaksi</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Nomor Transaksi: <input type="number" name="nomor_transaksi"><br>
 Nama Pembeli: <input type="text" name="nama_pembeli"><br>
 Judul Buku: <input type="text" name="judul_buku"><br>
 Jumlah Buku: <input type="number" name="jumlah_buku"><br>
 Harga Buku: <input type="number" name="harga_buku"><br>
 <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor_transaksi = $_POST["nomor_transaksi"];
    $nama_pembeli = $_POST["nama_pembeli"];
    $judul_buku = $_POST["judul_buku"];
    $jumlah_buku = $_POST["jumlah_buku"];
    $harga_buku = $_POST["harga_buku"];
    $total_belanja = $jumlah_buku * $harga_buku;
    $diskon_belanja = 0;
    $diskon_transaksi = 0;
    $total_bayar = 0;

    if ($total_belanja > 150000) {
        $diskon_belanja = $total_belanja * 0.10;
    }

    if ($nomor_transaksi <= 50) {
        $diskon_transaksi = $total_belanja * 0.05;
    }

    $total_bayar = $total_belanja - $diskon_belanja - $diskon_transaksi;

    echo "No Transaksi: " . $nomor_transaksi . "<br>";
    echo "Nama Pembeli: " . $nama_pembeli . "<br>";
    echo "Harga: " . $total_belanja . "<br>";
    echo "Diskon Belanja 10%: " . $diskon_belanja . "<br>";
    echo "Diskon Transaksi 5%: " . $diskon_transaksi . "<br>";
    echo "Total Bayar: " . $total_bayar . "<br>";
}
?>

</body>
</html>