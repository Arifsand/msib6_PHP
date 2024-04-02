<?php
//membuat class diawali dengan Huruf besar seperti contoh dibawah
//contoh: Class_nilaimahasiswa
class Siswa {
    //variabel
    //member1 - variabel
    public $nama;
    public $nilai;
    public $pelajaran;

    //member 2 (special method) - constructor
    public function __construct($nama, $nilai, $pelajaran){
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->pelajaran = $pelajaran;
    }

    //member 3 (method) - function return
    public function getHasil() {
        if ($this -> nilai > 55) return "Lulus";
        else return "Tidak Lulus";
    }


    }

?>