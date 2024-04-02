<?php 
// Constant
// define tidak dapat dimasukan ke dalam class
// const bisa disimpan pada class

// 1
// biasakan tuliskan namanya dengan kapital
// define('NAMA', 'Ammar Ziddan');
// echo NAMA;

// echo "<br>";
// 2
// const UMUR = 32;
// echo UMUR;

// class Coba {
//     // define("NAMA", "Ammar Ziddan");
//     const NAMA = "Ammar";
// }

// const dapat dipanggil menggunakan static
// echo Coba::NAMA;

// Magic Constant
// otomatis dibuatkan oleh php
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

echo __LINE__;
echo __FILE__;

?>