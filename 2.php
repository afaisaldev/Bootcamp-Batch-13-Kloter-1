<?php
function hitungKembalian($harga, $pembayaran) {
    $kembalian = $pembayaran - $harga;
    $pecahan =[50000, 20000, 10000, 5000, 2500];
    $arrayLength = count($pecahan);

    for ($x = 0; $x < $arrayLength; $x++) {

        if($kembalian >= $pecahan[$x]){
            if($pecahan[$x] == 2500){
                echo"$pecahan[$x] Disumbangkan";
            }else{
                echo"1 x $pecahan[$x] <br>";   
            }     
        }
        $kembalian = $kembalian-$pecahan[$x];

    }
}

hitungKembalian(110500, 200000); 

// Result
// 1 x 50000
// 1 x 20000
// 1 x 10000
// 1 x 5000
// 2500 Disumbangkan 

?> 