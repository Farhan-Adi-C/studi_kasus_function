<?php

//studi kasus 1
function menghitungPersegi($panjangSisi){
    if ($panjangSisi >= 0){
        $luas = $panjangSisi**2;
        echo "sisi persegi adalah " . $panjangSisi . " maka luas dari persegi tersebut " . $panjangSisi . " x " . $panjangSisi . " = " . $luas;
    }else if($panjangSisi < 0){
        echo $panjangSisi . " merupakan bilangan negatif, tidak dapat dihitung";
    }
}

menghitungPersegi(20);
echo "<br>";
menghitungPersegi(-15);


//studi kasus 2
function cekBilanganGanjil($array){
    if (is_array($array)){
        
        foreach ($array as $number):
            
            if (!is_numeric($number)){
                echo "nilai yang anda masukan bukan angka";
                return;       
            }
        endforeach;

        foreach ($array as $number):
            if (is_integer($number)){
                
                if (is_float($number)){
                    exit;
                }
                if ($number % 2 == 1 ){
                    echo $number . ", ";
                }
            }
        endforeach;
       
    }else{
        echo "anda tidak memasukan array";
    }
}

echo "<br>";
echo "<br>";
echo "<br>";
cekBilanganGanjil([1,2,4,5,7,1.5,3,1.2]);        echo "<br>";
cekBilanganGanjil(["wi", "halo"]);               echo "<br>";
cekBilanganGanjil(11);                           echo "<br>";
cekBilanganGanjil([1,2,"coba"]);                 echo "<br>";
