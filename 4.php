<?php

function hitungParkir($lama_parkir){

    if($lama_parkir <= 3){

        $total = $lama_parkir*2000;
        echo"biaya : $total";
        
    }else{

        $biaya_parkir_1  = 3*2000;
        $biaya_parkir_2  = ($lama_parkir-3)*1000;
        $total           = $biaya_parkir_1+$biaya_parkir_2;
        echo"biaya : $total";
        
    }

}

hitungParkir(5);

?>

