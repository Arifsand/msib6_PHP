<?php
//sertak file classnya
require_once 'Siswa.php';



//ciptakan object
$ns1 = new Siswa('Dewa', 70, 'PHP');
$ns2 = new Siswa('Gede', 80, 'HTML');



//cetak

$ar_siswa = [$ns1, $ns2];
foreach ($ar_siswa as $sis){
    echo $sis->nama. "<br>";
    echo $sis->nilai. "<br>";
    echo $sis->pelajaran. "<br>";
}

echo "<hr>";








//ciptakan objek
/*
$ns1 = new Siswa();
$ns1->nama = "Dewa";
$ns1->nilai = 90;
$ns1->pelajaran = "PHP";

//cetak
echo $ns1->nama;
echo '<br>';
echo $ns1->nilai;
echo '<br>';
echo $ns1->pelajaran;
echo '<br>';
echo $ns1-> getHasil(); 
*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Daftar Nilai Siswa</h2>
    <table border="1" width="50%" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Pelajaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $no=1;
            foreach ($ar_siswa as $sis){
                echo '<tr>';
                echo '<td>'. $no. '</td>';
                echo '<td>'.$sis->nama. "</td>";
                echo "<td>". $sis->nilai. "</td>";
                echo "<td>".$sis->pelajaran. "</td>";
                echo "<td>".$sis->getHasil(). "</td>";
                echo '</tr>';
                $no++;
            }



            ?>
        </tbody>
    </table>
</body>
</html>