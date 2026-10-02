<?php
class Mahasiswa
{
    public $nama;
    public $prodi;
    public function __construct()
    {
        $this->nama = "Andi";
        $this->prodi = "sistem informasi";
    }
    public function tampilData()
    {
        echo "nama :" . $this->nama . "<br>";
        echo "prodi :" . $this->prodi;
    }
}
$mhs1 = new Mahasiswa();
$mhs1->tampilData();
?>