<?php
//contoh fungsi bawaan dari php
$str = 'Belajar PHP di Kampus Merdeka';
echo $str;

echo '<br>';

$str = strtoupper($str);//huruf kapital semua
echo $str;

echo '<br>';

$str = strtolower($str);// huruf kecil semua
echo $str;

echo '<br>';

$str = ucfirst($str);
echo $str;
echo '<br>';

$str = ucwords($str);
echo $str;
echo '<br>';
$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu', 'apel'];
sort($ar_buah); //ini mengurutkan dari A ke Z 
foreach ($ar_buah as $buah) {
    echo "$buah<br>";
}

echo '<br>';

arsort($ar_buah); //ini mengurutkan dari A ke Z 
foreach ($ar_buah as $buah) {
    echo "$buah<br>"; // ini mengurutan dari Z ke A
}
echo '<hr>';
//1. function atau fungsi tanpa argumen atau parameter
function salam(){
    echo "Selamat Pagi World";
}
salam();//cetak function salam
echo '<br>';
//2. fungsi dengan parameter
function sapa($kawan){
    echo "Selamat Pagi Brodi $kawan";
}
sapa("Dewa");//cara cetak function pertama
echo '<br>';
$nama = 'Dewa';//cara kedua
sapa($nama);
echo '<br>';
//3. fungsi dengan parameter atau argumen beserta isinya
function kabar($kawan='Gede'){
    echo "Hai Apa Kabar $kawan";
}
kabar();//cetak 1
echo '<br>';
kabar("Adhi");//cetak 2
echo '<br>';
$siswa = 'Budi';
kabar($siswa);//cetak 3
echo '<hr>';
//fungsi dengan return (mengembalikan nilai)
function tambah($a, $b){
    $c = $a + $b;
    return $c;
}
echo tambah(50,70);
echo '<br>';
//fungsi dengan void (tidak mengembalikan nilai)
function hitung($x, $y){
    $z = $x + $y;
    echo $z;
}
hitung(50,70);

echo '<hr>';
//buat fungsi hitung umur
function hitung_umur($thn_lahir) {
    $thn_sekarang = 2024;
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo 'Umur Saya Adalah ' . hitung_umur(2003). ' tahun';
?>