<?php
class KonversiSuhu {
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function CelciusToFahrenheit() {
        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Fahrenheit") {
            return ($this->besaranSuhu * 9/5) + 32;
        }
        return null;
    }

    public function FahrenheitToCelcius() {
        if ($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius") {
            return ($this->besaranSuhu - 32) * 5/9;
        }
        return null;
    }

    public function CelciusToRheamur() {
        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur") {
            return $this->besaranSuhu * 4/5;
        }
        return null;
    }

    public function RheamurToCelcius() {
        if ($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius") {
            return $this->besaranSuhu * 5/4;
        }
        return null;
    }

    public function cetak() {
        $hasil_konversi = null;
        if ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Fahrenheit") {
            $hasil_konversi = $this->CelciusToFahrenheit();
        } elseif ($this->satuanSuhuAwal == "Fahrenheit" && $this->satuanSuhuTujuan == "Celcius") {
            $hasil_konversi = $this->FahrenheitToCelcius();
        } elseif ($this->satuanSuhuAwal == "Celcius" && $this->satuanSuhuTujuan == "Rheamur") {
            $hasil_konversi = $this->CelciusToRheamur();
        } elseif ($this->satuanSuhuAwal == "Rheamur" && $this->satuanSuhuTujuan == "Celcius") {
            $hasil_konversi = $this->RheamurToCelcius();
        }

        if ($hasil_konversi !== null) {
            echo "| " . $this->satuanSuhuAwal . " | " . $this->besaranSuhu . " | " . $this->satuanSuhuTujuan . " | " . number_format($hasil_konversi, 2) . " |\n";
        }
    }
}

// Membuat objek-objek KonversiSuhu
$dataKonversiSuhu1 = new KonversiSuhu("Celcius", 30, "Fahrenheit");
$dataKonversiSuhu2 = new KonversiSuhu("Fahrenheit", 86, "Celcius");
$dataKonversiSuhu3 = new KonversiSuhu("Celcius", 20, "Rheamur");
$dataKonversiSuhu4 = new KonversiSuhu("Rheamur", 16, "Celcius");

// Menampilkan hasil konversi untuk semua objek
echo "| Satuan Awal | Besaran Suhu | Satuan Tujuan | Hasil Konversi |\n";
echo "|--------------|--------------|---------------|----------------|\n";
$dataKonversiSuhu1->cetak();
$dataKonversiSuhu2->cetak();
$dataKonversiSuhu3->cetak();
$dataKonversiSuhu4->cetak();
?>
