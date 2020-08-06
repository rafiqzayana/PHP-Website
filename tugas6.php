<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Tugas 6 Calculator</title>
</head>
<body>
<?php
            if(isset($_POST['hitung'])){
                $a = $_POST['angka1'];
                $b = $_POST['angka2'];
                $operasi = $_POST['operation'];

                switch($operasi){
                    case 'tambah':
                        $hasil= $a+$b;
                    break;
                    case 'kurang':
                        $hasil= $a-$b;
                    break;
                    case 'kali':
                        $hasil= $a*$b;
                    break;
                    case 'bagi':
                        $hasil= $a/$b;
                    break;
                }
            }
        ?>
    
    <div class="p-3  bg-dark text-white">
        <h1>Website Calculator</h1>
        <p>Silahkan Menghitung nilai yang anda inginkan</p>
    </div>
    <div style="text-align: center; "class="container p-3 my-3 bg-primary">
        <form action="tugas6.php" method="POST">
            <label for="angka1">Masukkan nilai pertama</label>
            <br>
            <input type="text" name="angka1" >
            <br>
            <br>
            <label for="angka2">Masukkan nilai kedua</label>
            <br>
            <input type="text" name="angka2" >
            <br>
            <br>
            <select class="opt" name="operation">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <br>
            <br>
            <input type="submit" name="hitung" value="Hitung" class="btn btn-light">

            <br>
            <br>
            <?php if(isset($_POST['hitung'])){?>
            <input type="text" value="<?php echo $hasil;?>">
            <?php }else{ ?>
                <input type="text" value="0" >
                <?php } ?>
    
       
    </div>

    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>
    
</body>
</html>