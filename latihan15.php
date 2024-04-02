<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Form - Kalkulator</title>
</head>

<body>
    <form action="" method="GET">
        <table align="center" border="0" cellpading="10" cellspacing="0" width="30%">
            <thead>
                <tr bgcolor="khaki">
                    <th colspan="2">Kalkulator Anjay</th>
                </tr>
            </thead>
            <tbody>
                <tr bgcolor="beige">
                    <td width="30%">Angka 1</td>
                    <td>
                        <input type="text" name="a1">
                    </td>
                </tr>
                <tr bgcolor="beige">
                    <td width="30%">Angka 2</td>
                    <td>
                        <input type="text" name="a2">
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr bgcolor=""khaki>
                    <th colspan="2">
                        <button type="submit" name="proses" value="tambah">+</button>
                        <button type="submit" name="proses" value="kurang">-</button>
                        <button type="submit" name="proses" value="bagi">/</button>
                        <button type="submit" name="proses" value="kali">x</button>
                        <button type="submit" name="proses" value="pangkat">^</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>

<?php
//buat fungsi 
function hitung($a1, $a2, $tombol){
    if($tombol == 'tambah') {
        $hasil = $a1 + $a2;
    } else if($tombol == 'kurang') {
        $hasil = $a1 - $a2;
    } else if($tombol == 'bagi') {
        $hasil = $a1 / $a2;
    } else if($tombol == 'pangkat') {
        $hasil = $a1 ** $a2;
    } else if($tombol == 'kali') {
        $hasil = $a1 * $a2;
    }else {
        $hasil = 0;
    }
    return $hasil;
}

//tangkap request form
$a1 = $_GET['a1'];
$a2 = $_GET['a2'];
$tombol = $_GET['proses'];
$hasil = hitung($a1,$a2,$tombol);

//cetak dari pemanggilan fungsi
if(isset($tombol)){
    echo "<center><h3>hasil bilangan: $a1 $tombol $a2 adalah $hasil</h3></center>";
}



?>