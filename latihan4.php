<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $semester;
    public function __construct($nim, $nama, $prodi, $semester)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }
    public function tampilData()
    {
        echo "nim :" . $this->nim . "<br>";
        echo "nama :" . $this->nama . "<br>";
        echo "prodi :" . $this->prodi . "<br>";
        echo "semester :" . $this->semester . "<br>";
    }
}
$mhs1 = new Mahasiswa(
    "2024.57201",
    "Zaq",
    "Sistem Informasi",
    5
);
$mhs1->tampilData();
?>