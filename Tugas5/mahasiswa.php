<?php
class mahasiswa{
    //member1 - variabel
    public $nim;
    public $nama;
    public $kuliah;
    public $matkul;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    //member2 (special method) - constructor 
    public function __construct($nim, $nama, $kuliah, $matkul, $nilai){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->grade = $this->getGrade(); // Ambil grade saat objek dibuat
    }   

    //member3 (method) - function return
    public function getStatus() {
        if ($this->nilai > 65) return "Lulus";
        else return "Tidak Lulus";
    }

    public function getGrade(){
        if ($this->nilai >= 85 && $this->nilai <= 100) return 'A';
        else if ($this->nilai >= 75 && $this->nilai < 85) return 'B';
        else if ($this->nilai >= 60 && $this->nilai < 75) return 'C';
        else if ($this->nilai >= 40 && $this->nilai < 60) return 'D';
        else if ($this->nilai < 40) return 'E';
        else return '';
    }   

    public function getPredikat() {
        switch($this->grade){
            case 'A' : return 'Sangat Memuaskan'; break;
            case 'B' : return 'Memuaskan'; break;
            case 'C' : return 'Cukup'; break;
            case 'D' : return 'Kurang'; break;
            case 'E' : return 'Sangat Kurang'; break;
            default : return '';
        }
    }
}
?>
