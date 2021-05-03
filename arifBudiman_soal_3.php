<?php
/*
Pak rian memiliki 100 cabang toko kelontong, pada setiap harinya pak rian pasti
mengeluarkan Rp 10.000 biaya pengeluaran untuk toko kelontong ke 1. dan biaya
pengeluaran untuk toko kelontong ke 68 adalah sebesar Rp. 30.100 . maka
berapakah biaya pengeluaran untuk toko kelontong ke 81 ?
Note :
Silahkan kerjakan soal no 4 dengan perintah perulangan dan aritmatika dengan
bahasa pemrograman PHP. Wajib menampilkan alur perhitungan dengan fungsi
Output PHP
*/


const TOTAL_CABANG = 100;
$hariSatu = 10000;
$hariEnamDelapan = 30100;
$increment = ($hariEnamDelapan - $hariSatu)/(68-1);
$hariDelapanSatu = 10000;

for ($i=1; $i < 81; $i++) {
    $hariDelapanSatu+=300;    
}
echo "Biaya Hari Ke-1 = 10000";
echo "\n";
echo "Biaya Hari Ke-68 = 30100";
echo "\n";
echo "Increment = (Biaya Hari Ke-68 - Biaya Hari Ke-1)/(68-1)";
echo "\n";
echo "Increment = 300";
echo "\n";
echo "Pengeluaran Hari Ke-81 = 10000 + (80 * Increment)";
echo "\n";
echo "Pengeluaran Hari Ke-81 = $hariDelapanSatu";
echo "\n";
?>