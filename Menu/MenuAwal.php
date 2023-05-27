<?php

require_once "Tampilan/Penutup.php";
require_once "Menu/MenuMakananBerat.php";
require_once "Menu/MenuMakananRingan.php";
require_once "Menu/MenuMinumanDingin.php";
require_once "Menu/MenuMinumanPanas.php";
require_once "Helper/Input.php";
function menuAwal(){
while (true){
    echo "        ----------------------".PHP_EOL;
    echo "       |NO.|   MENU PESANAN   |".PHP_EOL;
    echo "       |---|------------------|".PHP_EOL;
    echo "       | 1 |Makanan           |".PHP_EOL;
    echo "       | 2 |Minuman           |".PHP_EOL;
    echo "       | x |Untuk Keluar      |".PHP_EOL;
    echo "        ---------------------- ".PHP_EOL;
    

    $mauApa = input("Mau Pesan Apa");

    if ($mauApa == "1"){
        echo "        ----------------------".PHP_EOL;
        echo "       |NO.|   MENU PESANAN   |".PHP_EOL;
        echo "       |---|------------------|".PHP_EOL;
        echo "       | 1 |Makanan Berat     |".PHP_EOL;
        echo "       | 2 |Makanan Ringan    |".PHP_EOL;
        echo "       | x |Untuk Keluar      |".PHP_EOL;
        echo "        ---------------------- ".PHP_EOL;

        $makanApa = input("Mau Makanan Apa");
        if ($makanApa == "1"){
            menuMakananBerat();
            break;
        }else if ($makanApa == "2"){
            menuMakananRingan();
            break;
        }else if ($makanApa == "x"){
            penutup();
            break;
        }else {
            errorUlang();
        }
    }else if ($mauApa == "2"){
        echo "        ----------------------".PHP_EOL;
        echo "       |NO.|   MENU PESANAN   |".PHP_EOL;
        echo "       |---|------------------|".PHP_EOL;
        echo "       | 1 |Minuman Dingin    |".PHP_EOL;
        echo "       | 2 |Minuman Panas     |".PHP_EOL;
        echo "       | x |Untuk Keluar      |".PHP_EOL;
        echo "        ---------------------- ".PHP_EOL;

        $minumApa = input("Mau Minuman Apa");
        if ($minumApa == "1"){
            menuMinumanDingin();
            break;
        }else if ($minumApa == "2"){
            menuMinumanPanas();
            break;
        }else if ($minumApa == "x"){
            penutup();
            break;
        }else {
            errorUlang();
        }
    }else if ($mauApa == "x"){
        penutup();
        break;
    }else {
        errorUlang();
    }
  }
}