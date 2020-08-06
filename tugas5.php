<?php

    //Function untuk penjumlahan
    function penjumlahan($a,$b){
       $penjumlahan = $a + $b;
       return $penjumlahan; 
    }

    //Function untuk pengurangan
    function pengurangan($a,$b){
        $jumlah = $a - $b;
        return $jumlah;
    }

    //Function untuk perkalian
    function perkalian($a,$b){
        $jumlah = $a * $b;
        return $jumlah;
    }

    //Function untuk pembagian
    function pembagian($a,$b){
        $jumlah = $a / $b;
        return $jumlah;
    }

    //deklarasi value a dan b
    $a = $_GET['angka1'];
    $b = $_GET['angka2'];
    echo "Bilangan 1 : $a<br>";
    echo "Bilangan 2 : $b<br>";
    echo "<hr>";
    //memanggil fungsi operasi masing2 dan memasukkan value a dan b ke dalam
    echo "hasil pengurangan adalah ".penjumlahan($a,$b)."<br>";
    echo "hasil pengurangan adalah ".pengurangan($a,$b)."<br>";
    echo "hasil perkalian adalah ".perkalian($a,$b)."<br>";
    echo "hasil pembagian adalah ".pembagian($a,$b)."<br>";

?>