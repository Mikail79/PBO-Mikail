<?php
class mapel {
    // Properties
    var $uts;
    var $uas;
    var $quiz;
    var $tugas;
    var $kehadiran;

    // Methods
    function total_nilai() {
        $hasil = ($this->uts + $this->uas + $this->quiz + $this->tugas + $this->kehadiran) / 5;
        return "Hasil Nilai Akhir: " . $hasil . "<br>";
    }

    // Constructor
    function __construct($uts, $uas, $quiz, $tugas, $kehadiran) {
        $this->uts = $uts;
        $this->uas = $uas;
        $this->quiz = $quiz;
        $this->tugas = $tugas;
        $this->kehadiran = $kehadiran;
    }
}

