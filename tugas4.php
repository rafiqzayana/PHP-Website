<?php
    
   
    //mendeklarasikan nilai b berapa diambil dari get 'angka'
    $b = $_GET['angka'];
    //memunculkan output string beserta memanggil nilai pada var b serta enter
    echo "Jumlah bintangnya = {$b} <br>";
    //melakukan looping for apabila nilai a belum memenuhi dari nilai b maka akan looping terus
    for($a=0; $a <= $b; $a++){
        //didalam looping setelah mendapatkan kelipatan a 1 kali kelipatan 
        //maka akan berkurang nilai a tersebut dan akan mencetak * sampai var c sudah tidak mendapatkan nilai 1
        for($c=$a; $c>=1; $c--){
            echo "*";
        }echo"<br>";
    }

?>