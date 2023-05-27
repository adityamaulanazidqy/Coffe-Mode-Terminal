<?php

require_once "Tampilan/ErrorUlang.php";
require_once "Tampilan/Penutup.php";
require_once "Menu/MenuAwal.php";
require_once "Helper/Input.php";
function menuMinumanPanas (){
    while (true){
        echo " ---------------------- ---------- ".PHP_EOL;
        echo "|NO.|   NAMA PESANAN   |   HARGA  |".PHP_EOL;
        echo "|---|------------------|----------|".PHP_EOL;
        echo "| 1 |Coklat Panas      |    22k   |".PHP_EOL;
        echo "| 2 |korean banana     |    18k   |".PHP_EOL;
        echo "| 3 |Teh Tarik Cinnamon|    32k   |".PHP_EOL;
        echo "| 4 |caramel mocha     |    70k   |".PHP_EOL;
        echo "| x |Untuk Keluar      |          |".PHP_EOL;
        echo " ---------------------- ---------- ".PHP_EOL;
    
        $minumPanas = input("Mau Pesan Apa");
        if ($minumPanas == "1"){
            $harga = 22;
            $porsiPanas = (int) input("Mau Pesan Berapa");
            $totalHarga = $harga * $porsiPanas;
            echo "Jadi Total Harganya $totalHarga.000".PHP_EOL;
            $lagi = input("Apa Anda Mau Pesan Lagi (y/n)");
            if ($lagi == "y"){
                menuAwal();
            }else if ($lagi == "n"){
                penutup();
                break;
            }else {
                errorUlang();
            }
        }else if ($minumPanas == "2"){
            $harga = 18;
            $porsiPanas = (int) input("Mau Pesan Berapa");
            $totalHarga = $harga * $porsiPanas;
            echo "Jadi Total Harganya $totalHarga.000".PHP_EOL;
            $lagi = input("Apa Anda Mau Pesan Lagi (y/n)");
            if ($lagi == "y"){
                menuAwal();
            }else if ($lagi == "n"){
                penutup();
                break;
            }else {
                errorUlang();
            }
        }else if ($minumPanas == "3"){
            $harga = 32;
            $porsiPanas = (int) input("Mau Pesan Berapa");
            $totalHarga = $harga * $porsiPanas;
            echo "Jadi Total Harganya $totalHarga.000".PHP_EOL;
            $lagi = input("Apa Anda Mau Pesan Lagi (y/n)");
            if ($lagi == "y"){
                menuAwal();
            }else if ($lagi == "n"){
                penutup();
                break;
            }else {
                errorUlang();
            }
        }else if ($minumPanas == "4"){
            $harga = 70;
            $porsiPanas = (int) input("Mau Pesan Berapa");
            $totalHarga = $harga * $porsiPanas;
            echo "Jadi Total Harganya $totalHarga.000".PHP_EOL;
            $lagi = input("Apa Anda Mau Pesan Lagi (y/n)");
            if ($lagi == "y"){
                menuAwal();
            }else if ($lagi == "n"){
                penutup();
                break;
            }else {
                errorUlang();
            }
        }else if ($minumPanas == "x"){
            penutup();
            break;
        }else {
            errorUlang();
        }
      }
}