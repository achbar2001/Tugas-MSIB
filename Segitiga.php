<?php
class Segitiga extends Bentuk2D {
    private $alas;
    private $tinggi;
    
    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    
    public function namaBidang() {
        return "Segitiga";
    }
    
    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }
    
    public function kelilingBidang() {
        // Untuk segitiga, biasanya tidak ada keliling yang tetap, jadi kita anggap sebagai "Tidak Diketahui"
        return "Tidak Diketahui";
    }
}
?>
