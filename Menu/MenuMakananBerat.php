<?php

require_once "Tampilan/ErrorUlang.php";
require_once "Tampilan/Penutup.php";
require_once "Menu/MenuAwal.php";
require_once "Helper/Input.php";
function menuMakananBerat(){
    while (true){
    echo " ---------------------- ----------".PHP_EOL;
    echo "|NO.|   NAMA PESANAN   |   HARGA  |".PHP_EOL;
    echo "|---|------------------|----------".PHP_EOL;
    echo "| 1 |Karedok           |    8k    |".PHP_EOL;
    echo "| 2 |Nasi Timbel       |    31k   |".PHP_EOL;
    echo "| 3 |Kupat Tahu        |    45k   |".PHP_EOL;
    echo "| 4 |Tahu Gejrot       |    12k   |".PHP_EOL;
    echo "| x |Untuk Keluar      |          |".PHP_EOL;
    echo " ---------------------- ---------- ".PHP_EOL;

    $makanBerat = input("Mau Pesan Apa");
    if ($makanBerat == "1"){
        $harga = 8;
        $porsiBerat = (int) input("Mau Pesan Berapa");
        $totalHarga = $harga * $porsiBerat;
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
    }else if ($makanBerat == "2"){
        $harga = 31;
        $porsiBerat = (int) input("Mau Pesan Berapa");
        $totalHarga = $harga * $porsiBerat;
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
    }else if ($makanBerat == "3"){
        $harga = 45;
        $porsiBerat = (int) input("Mau Pesan Berapa");
        $totalHarga = $harga * $porsiBerat;
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
    }else if ($makanBerat == "4"){
        $harga = 12;
        $porsiBerat = (int) input("Mau Pesan Berapa");
        $totalHarga = $harga * $porsiBerat;
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
    }else if ($makanBerat == "x"){
        penutup();
        break;
    }else {
        errorUlang();
    }
  }
}