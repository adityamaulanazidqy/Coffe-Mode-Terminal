<?php

require_once "Tampilan/ErrorUlang.php";
require_once "Tampilan/Penutup.php";
require_once "Menu/MenuAwal.php";
require_once "Helper/Input.php";
function menuMakananRingan (){
    while (true){
    echo " ---------------------- ---------- ".PHP_EOL;
    echo "|NO.|   NAMA PESANAN   |   HARGA  |".PHP_EOL;
    echo "|---|------------------|----------|".PHP_EOL;
    echo "| 1 |Cireng            |    2k    |".PHP_EOL;
    echo "| 2 |Kerupuk Seblak    |    5k    |".PHP_EOL;
    echo "| 3 |Basreng           |    6k    |".PHP_EOL;
    echo "| 4 |Bakso Ikan        |    8k    |".PHP_EOL;
    echo "| x |Untuk Keluar      |          |".PHP_EOL;
    echo " ---------------------- ---------- ".PHP_EOL;

    $makanRingan = input("Mau Pesan Apa");
    if ($makanRingan == "1"){
        $harga = 2;
        $porsiRingan = (int) input("Mau Pesan Berapa");
        $totalHarga = $harga * $porsiRingan;
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
    }else if ($makanRingan == "2"){
        $harga = 5;
        $porsiRingan = (int) input("Mau Pesan Berapa");
        $totalHarga = $harga * $porsiRingan;
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
    }else if ($makanRingan == "3"){
        $harga = 6;
        $porsiRingan = (int) input("Mau Pesan Berapa");
        $totalHarga = $harga * $porsiRingan;
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
    }else if ($makanRingan == "4"){
        $harga = 8;
        $porsiRingan = (int) input("Mau Pesan Berapa");
        $totalHarga = $harga * $porsiRingan;
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
    }else if ($makanRingan == "x"){
        penutup();
        break;
    }else {
        errorUlang();
    }
  }
}