<?php

//deklarasi fungsi genap tanpa parameter
function genap(){
    //melakukan looping angka dimana angka =  1 maka akan bertambah 1 terus sampai mencapai syarat 100
    for($angka = 1; $angka <= 100; $angka++){
        //fungsi if apabila habis dibagi 2 sama dengan 0
        if($angka % 2 == 0){
            //cetak angka
            echo "$angka ";
        }
    }
}
//deklarasi fungsi ganjil tanpa parameter
function ganjil(){
    //melakukan looping angka dimana angka =  1 maka akan bertambah 1 terus sampai mencapai syarat 100
    for($angka = 1; $angka <=100; $angka++){
        //fungsi if apabila habis dibagi 2 tersisa 1
        if($angka % 2 == 1){
            //cetak angka
            echo "$angka ";
        }
    }
}
    //Menampilkan output string berupa tulisan
    echo "Berikut adalah bilangan ganjil dan genap dari 1-100 :<br>";
    echo "<hr>";
    echo "Berikut adalah deret bilangan Genap :<br>";
    //Memanggil Function dari genap
    genap();
    echo"<br>";
    echo"<hr>";
    //Memanggil Function dari genap
    echo "Berikut adalah deret bilangan Ganjil :<br>";
    ganjil();
?>