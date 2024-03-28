<!-- TUGAS: 
Buatlah atau Gunakan web profile diri anda (layoutit) yang sudah ada. Lalu extension-nya ubah ke .php 
Untuk bagian nama, email, nomor telepon dan data diri lainya di ubah menjadi sebuah variabel yang kemudian di tampilkan pada web yang sudah ada.
 -->

<?php
//variabel user
$nama = "Muhamad Arif Sandaya";
$panggilan = "Arif";
$nim = "210402139";
$jenis_kelamin = "Laki-Laki";
$agama = "Islam";
$tanggal_lahir = "06 April 2002";
$tempat_lahir = "Pekanbaru";
$alamat = "Jl. Air Dingin GG Takwa 7";
$no_hp = '082241765668'; //data integer
$universitas = "Universitas Muhammadiyah Riau";
$kota = "Pekanbaru";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body background="https://thumb.viva.co.id/media/frontend/thumbs3/2021/08/04/610a0d2db0048-background-warna-kuning_1265_711.jpg">
    <h1 align="center">
        Biodata Pribadi
    </h1>
    <p align="justify">
        <img src="img/ME.jpg" alt="" width="13%" align="left" hspace="10">
        Hallo Teman-teman, Perkenalkan Nama Saya <?php echo $nama; ?> bisa dipanggil <?php echo $panggilan; ?>. Disini Saya Sedang Belajar PHP Di Mitra NF KOMPUTER.
        Saya Disini Sedang Membuat Tugas Yang Diberikan Oleh Bapak Arif yaitu Membuat Biodata Pribadi. Saya berasal dari universitas <?php echo $universitas; ?>
        yang terletak di <?php echo $kota; ?>.
    </p>
    <fieldset>
        <legend align="center">
            <font size="5" color="green" face="calibri">
                Tentang Saya
            </font>
        </legend>
        <b>
            <ol type="A">
                <li>Data Pribadi</li>
        </b>
        <table align="square" cellpadding="10 px" width="600px">
            <tr>
                <td>Nama Lengkap</td>
                <td>: <?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>: <?php echo $nim; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: <?php echo $jenis_kelamin; ?></td>
            </tr>

            <td>Agama</td>
            <td>: <?php echo $agama; ?> </td>
            </tr>
            <tr>
                <td>Tanggal_Lahir</td>
                <td>: <?php echo $tanggal_lahir; ?> </td>
            </tr>
            <tr>
                <td>Tempat_Lahir</td>
                <td>: <?php echo $tempat_lahir; ?> </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?php echo $alamat; ?> </td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>: <?php echo $no_hp; ?> </td>
            </tr>
        </table>
        <b>
            <li size="20px">Pendidikan</li>
        </b>
        <table cellpadding="10 px" width="600px">
            <ul type="square">
                <li><?php echo $pendidikan_sdn = "SDN 160 Pekanbaru"; ?></li>
                <li><?php echo $pendidikan_smp = "SMP Genrus Nusantara Kendal"; ?></li>
                <li><?php echo $pendidikan_smk = "SMA Genrus Nusantara Kendal"; ?></li>
                <li><?php echo $pendidikan_universitas = "Universitas Muhammadiyah Riau"; ?></li>
            </ul>
            <b>
                <li>Hobi</li>
            </b>
            <table cellpadding="10 px" width="600px">
                <ul type="square">
                    <li><?php echo $hobi1 = "Membaca"; ?></li>
                    <li><?php echo $hobi2 = "Menggambar"; ?></li>
                    <li><?php echo $hobi3 = "Editor Vidio/Foto"; ?></li>
                    <li><?php echo $hobi4 = "Travelling"; ?></li>
                </ul>
            </table>
        </table>
    </fieldset>
</body>

</html>