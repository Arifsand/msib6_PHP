<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body align="center">
    <h1>Form Pembeli</h1>
    <form action="#" method="POST">
        <table border="1" align="center" cellpadding="15" width="40%">
            <thead>
                <tr bgcolor="aqua">
                    <th colspan="2">Form Pembeli</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <label for="nama" class="col-4 col-form-label">Nama Pelanggan:</label></td>
                    <td> <input type="text" name="nama" id="" placeholder="Isi Form Ini" size="50"></td>
                </tr>
                <tr>
                    <td><label for="produk pilihan" class="col-4 col-form-label">Produk Pilihan:</label></td>
                    <td>
                        <select id="produk" name="produk" class="custom-select">
                            <option value="">---- Pilihan ----</option>
                            <option value="Tv">TV</option>
                            <option value="Kulkas">KULKAS</option>
                            <option value="MesinCuci">MESIN CUCI</option>
                            <option value="Ac">AC</option>
                        </select>
                    </td>
                </tr>
                <td>
                    <label for="jumlahbeli" class="col-4 col-form-label">Jumlah Beli:</label>
                </td>
                <td> <input id="jumlahbeli" name="jumlahbeli" type="number" class="form-control"></td>
                </tr>
            </tbody>
            <tfoot bgcolor="aqua">
                <tr>
                    <th colspan="2">
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                <button name="batal" type="batal" class="btn btn-success">Batal</button>
                            </div>
                        </div>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>

<?php
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlahbeli = $_POST['jumlahbeli'];




//SWITCH CASE
switch ($produk) {
    case "Tv":
        $hargaSatuan = 1250000;
        break;
    case "Kulkas":
        $hargaSatuan = 3000000;
        break;
    case "Mesincuci":
        $hargaSatuan = 2000000;
        break;
    case "Ac":
        $hargaSatuan = 4000000;
        break;
    default:
        // Jika produk tidak dipilih atau tidak sesuai
        $hargaSatuan = 0;
}
// Hitung total belanja
$totalBelanja = $jumlahbeli * $hargaSatuan;

// Hitung diskon (20% dari total belanja)
$diskon = 0.2 * $hargaSatuan;

// Hitung PPN (10% dari total belanja setelah diskon)
$ppn = 0.1 * ($totalBelanja - $diskon);

// Hitung harga bersih
$hargaBersih = ($totalBelanja - $diskon) + $ppn;
?>

<!-- Cetak di dalam html -->
<h1 align="center">Informasi Pelanggan </h1>
<h2>Nama Pelanggan :<?= $nama ?> </h2>
<h2>Produk Pilihan :<?= $produk ?> </h2>
<h2>Jumlah Beli :<?= $jumlahbeli ?> </h2>
<h2>Harga Satuan :<?= $hargaSatuan ?> </h2>
<h2>Total Belanja :<?= $totalBelanja  ?> </h2>
<h2>Diskon :<?= $diskon ?> </h2>
<h2>PPN :<?= $ppn ?> </h2>
<h2>Harga Bersih :<?= $hargaBersih ?> </h2>