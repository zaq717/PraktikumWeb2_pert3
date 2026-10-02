<?php
class Mahasiswa
{
    public $nama;
    public $prodi;
    public function __construct($nama, $prodi)
    {
        $this->nama = $nama;
        $this->prodi = $prodi;
    }
    public function tampilData()
    {
        echo "nama :" . $this->nama . "<br>";
        echo "prodi :" . $this->prodi . "<br>";
    }
}
$mhs1 = new Mahasiswa(
    "Andi",
    "Sistem Informasi"
);
$mhs2 = new Mahasiswa(
    "budi",
    "pendidikan teknologi Informasi"
);
$mhs3 = new Mahasiswa(
    "santoso",
    "Teknik Industri"
);
$mhs1->tampilData();
$mhs2->tampilData();
$mhs3->tampilData();
?>