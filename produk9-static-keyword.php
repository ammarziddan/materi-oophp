<?php 
// Static Keyword

class ContohStatic {
    //gunakan keyword static setelah visibility
    public static $angka = 1;

    public static function halo() {
        // tidak bisa menggunakan $this karena class tidak di instansiasi
        // return "halo." . $this->angka;
        return "halo" . self::$angka++ . "x";
    }
}

// cara biasa
// $obj = new ContohStatic;

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();


?>