<?php

// komentar

/* komentar1
komentar2 */

echo 'Belajar PHP <br>';
echo "Saya senang belajar 'PHP' <br>";
echo 'Saya senang belajar "PHP" <br>';
echo "Saya senang belajar \"PHP\"";
echo  '<br>';
print "Belajar Mysql";
echo '<hr>';

// variabel User
$nama = "Dono Warkop"; //data string
$alamat = "Bogor Raya"; //data string
$umur = 30; //data integer
$berat = 70.5; //data integer
$_pekerjaan =  "Programmer";

// cetak didalam PHP
echo $nama; // output: Dono Warkop
echo $alamat; // output : Bogor Raya
echo $umur;
echo $berat;
echo "<br>";
echo "Nama saya $nama dan tinggal di $alamat <br>";
echo 'nama saya ' . $nama . ' tinggal di ' . $alamat . '<br>'; //output : nama saya Dono Warkop tinggal di Bogor Raya
echo 'nama saya ', $nama, ' tinggal di ', $alamat, '<br>'; //output : nama saya Dono Warkop tinggal di Bogor Raya
echo "umur saya: $umur <br>";
echo 'berat saya: ' . $berat . '<hr>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- cetak didalam html -->
    <h2>Nama saya: <?php echo $nama ?></h2>
    <h2>Saya berumur: <?= $umur ?> Tahun</h2>
</body>

</html>

<hr>

<?php
// Variabel Sistem
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<hr>";

// Variabel Konstanta
// define: untuk memanggil variabel konstanta
define('PELAJARAN', 'PHP Dasar');
echo PELAJARAN;
echo  "<br>";
echo "Ini Matakuliah: " . PELAJARAN;
echo " <hr>";

// Operasi Aritmatika
$a = 100;
$b = 50;
echo $a + $b;
echo "<br>";

$a = "100";
$b = "50";
echo $a + $b;
echo "<br>";
echo "$a + $b";

//SOAL:
// Diketahui jari-jarinya 15, maka berapa luas lingkaran dan keliling lingkaran dengan jari-jari tersebut?
// jika jari2: 15
// rumus phi: 3.14
// rumus luas: phi*(jari2*jari2)
// rumus keliling: 2*phi*jari2

define('PHI', 3.14); //variabel konstanta
$jari2 = 15; //ubah jari2
$luas = PHI * ($jari2 * $jari2);
$keliling = 2 * PHI * $jari2;

echo $jari2;
echo '<br>';
echo $luas;
echo '<br>';
echo $keliling;
echo '<hr>';
?>