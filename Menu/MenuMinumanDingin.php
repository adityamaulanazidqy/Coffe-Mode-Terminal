<?php

require_once "Tampilan/ErrorUlang.php";
require_once "Tampilan/Penutup.php";
require_once "Menu/MenuAwal.php";
require_once "Helper/Input.php";
function menuMinumanDingin (){
    while (true){
        echo " ---------------------- ---------- ".PHP_EOL;
        echo "|NO.|   NAMA PESANAN   |   HARGA  |".PHP_EOL;
        echo "|---|------------------|----------|".PHP_EOL;
        echo "| 1 |Es Pisang Ijo     |    5k    |".PHP_EOL;
        echo "| 2 |Es Kolak Pisang   |    7k    |".PHP_EOL;
        echo "| 3 |Es Slendang       |   10k    |".PHP_EOL;
        echo "| 4 |Es Kacang Merah   |   40k    |".PHP_EOL;
        echo "| x |Untuk Keluar      |          |".PHP_EOL;
        echo " ---------------------- ---------- ".PHP_EOL;
    
        $minumDingin = input("Mau Pesan Apa");
        if ($minumDingin == "1"){
            $harga = 5;
            $porsiDingin = (int) input("Mau Pesan Berapa");
            $totalHarga = $harga * $porsiDingin;
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
        }else if ($minumDingin == "2"){
            $harga = 7;
            $porsiDingin = (int) input("Mau Pesan Berapa");
            $totalHarga = $harga * $porsiDingin;
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
        }else if ($minumDingin == "3"){
            $harga = 10;
            $porsiDingin = (int) input("Mau Pesan Berapa");
            $totalHarga = $harga * $porsiDingin;
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
        }else if ($minumDingin == "4"){
            $harga = 40;
            $porsiDingin = (int) input("Mau Pesan Berapa");
            $totalHarga = $harga * $porsiDingin;
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
        }else if ($minumDingin == "x"){
            penutup();
            break;
        }else {
            errorUlang();
        }
      }
}