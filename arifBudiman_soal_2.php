<?php
/*
Setyo mempunyai tiga lembar uang sepuluh ribuan, empat lembar uang lima ribuan
dan lima lembar uang dua puluh ribuan. Jika Ia akan membeli mainan seharga
Rp55.000. Berapa jumlah uang Setyo setelah membeli mainan?
Note:
Silahkan selesaikan permasalahan diatas dengan bahasa pemrograman PHP. Wajib
menampilkan alur perhitungan dengan fungsi Output PHP
*/

const HARGA_MAINAN = 55000;
$cash = 3*10000 + 4*5000 + 5*20000;
$uangSetyo = $cash-HARGA_MAINAN;
echo "Harga Mainan = 55000";
echo "\n";
echo "Uang Setyo = (3*10000) + (4*5000) + (5*20000)";
echo "\n";
echo "Uang Setyo = $cash";
echo "\n";
echo "Sisa Uang Setyo = Uang Setyo - Harga Mainan";
echo "\n";
echo "Sisa Uang Setyo = $uangSetyo";
?>