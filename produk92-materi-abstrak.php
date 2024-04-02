<?php 
// Membuat kelas abstrak
abstract class Buah {
    private $warna;

    // membuat method abstrak
    abstract public function makan();

    public function setWarna( $warna ) {
        $this->warna = $warna;
    }
}

class Apel extends Buah {
    public function makan() {
        // kunyah
        // sampai bagian tengah
    }
}

class Jeruk extends Buah {
    public function makan() {
        // kupas
        // kunyah
    }
}


?>