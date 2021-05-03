<?php
/*
1. Rian pergi ke toko alat tulis untuk membeli bolpoin. Harga 1 buah bolpoin Rp 1.750.
Jika Rian membeli 1 lusin bolpoin dan Ia membayar 5 lembar uang lima ribuan.
Berapa uang kembalian yang Rian terima?
Note :
Silahkan selesaikan permasalahan diatas dengan bahasa pemrograman PHP. Wajib
menampilkan alur perhitungan dengan fungsi Output PHP

*/
const HARGA_BOLPOIN = 1750;
const LIMA_RIBU_RUPIAH = 5000;
$total = 12 * HARGA_BOLPOIN;
$cash = 5 * LIMA_RIBU_RUPIAH;
$kembalian = $cash-$total;
echo "Harga 1 Buah Bolpoin = 1750";
echo "\n";
echo "Harga Total = 12 * Harga 1 Buah Bolpoin";
echo "\n";
echo "Harga Total = $total";
echo "\n";
echo "Cash = 5 * 5000";
echo "\n";
echo "Cash = $cash";
echo "\n";
echo "Kembalian Rian = Cash - Harga Total";
echo "\n";
echo "Kembalian Rian = $kembalian"

?>