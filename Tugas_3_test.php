<?php
$a1 = ['nama' => 'Andi Santono', 'nim' => '0111111', 'nilai' => '95'];
$a2 = ['nama' => 'Budi Kurniawan', 'nim' => '0111112', 'nilai' => '80'];
$a3 = ['nama' => 'Candi Badur', 'nim' => '0111113', 'nilai' => '78'];
$a4 = ['nama' => 'Denis Caputra', 'nim' => '0111114', 'nilai' => '76'];
$a5 = ['nama' => 'Erik Manahel', 'nim' => '0111115', 'nilai' => '86'];
$a6 = ['nama' => 'Fatril Nusonto', 'nim' => '0111116', 'nilai' => '50'];
$a7 = ['nama' => 'Gayama Harustia', 'nim' => '0111117', 'nilai' => '20'];
$a8 = ['nama' => 'Isma Lotono', 'nim' => '0111118', 'nilai' => '30'];
$a9 = ['nama' => 'Jami Sayir', 'nim' => '0111119', 'nilai' => '70'];
$a10 = ['nama' => 'Karni Buato', 'nim' => '01111110', 'nilai' => '65'];


// $ar_buah = [$a1, $a2, $a3, $a4, $a5];
$ar_mahasiswa = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10];

// Deklarasikan nama2 judul pada tabel header menggunakan looping Array
// $ar_judul = ['No', 'Kode', 'Buah', 'Harga', 'Jumlah Beli', 'Harga Kotor', 'Diskon', 'Harga Bayar'];
$ar_judul = ['No', 'Nama Mahasiswa', 'NIM', 'Keterangan', 'Grade', 'Predikat'];

// fungsi agregat di array
// $jumlah_harga = array_column($ar_buah, 'harga');
// $harga_total = array_sum($jumlah_harga);
// $harga_tertinggi = max($jumlah_harga);
// $harga_terendah = min($jumlah_harga);
// $jumlah_transaksi = count($ar_buah);
// $harga_rata2 = $harga_total / $jumlah_transaksi;
$jumlah_mahasiswa = count($ar_mahasiswa);
$nilai_mahasiswa = array_column($ar_mahasiswa, 'nilai');
$nilai_tertinggi = max($nilai_mahasiswa);
$nilai_terendah = min($nilai_mahasiswa);
$nilai_total = array_sum($nilai_mahasiswa);
$nilai_rata2 = $nilai_total / $jumlah_mahasiswa;



$keterangan = [
    'Nilai Tertinggi'  => $nilai_tertinggi,
    'Nilai Terendah'  => $nilai_terendah,
    'Nilai Rata-Rata' => $nilai_rata2,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' =>  $nilai_total
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Buah-Buahan</title>
</head>

<body>
    <h2 align="center">Daftar Nilai Mahasiswa</h2>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php foreach ($ar_judul as $judul) { ?>
                    <th> <?= $judul ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($ar_buah as $buah) {
                // Bruto = harga*jumlah
                $bruto = $buah['harga'] * $buah['jumlah'];
                // Diskon = jika durian dengan jumlah beli >=5 dapat diskon 20%, selain itu 10%
                $diskon = ($buah['buah'] == 'Durian' && $buah['jumlah'] >= 5) ? 0.2 : 0.1;
                $harga_diskon = $diskon * $bruto;
                $harga_bayar = $bruto - $harga_diskon;
            ?>
                <tr>
                    <td> <?= $no++ ?></td>
                    <td> <?= $buah['kode'] ?></td>
                    <td> <?= $buah['buah'] ?></td>
                    <td> <?= $buah['harga'] ?></td>
                    <td> <?= $buah['jumlah'] ?></td>
                    <td> <?= $bruto ?></td>
                    <td> <?= $harga_diskon ?></td>
                    <td> <?= $harga_bayar ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
            foreach ($keterangan as $ket => $hasil) {
            ?>
                <tr>
                    <th colspan="3"><?= $ket ?></th>
                    <th colspan="5"><?= $hasil ?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>

</html>