<?php
/*
Buatlah sebuah aplikasi yang menampilkan bilangan genap dan bilangan ganjil dari 1
sampai 10. yang mana jika dijalankan akan menghasilkan output seperti berikut ini :
1.Bilangan Ganjil
2.Bilangan Genap
3.Bilangan Ganjil
4.Bilangan Genap
5.Bilangan Ganjil
6.Bilangan Genap
7.Bilangan Ganjil
8.Bilangan Genap
9.Bilangan Ganjil
10.Bilangan Genap

Note :
Tidak boleh menggunakan perintah perulangan dan dibuat dengan bahasa
pemrograman PHP.

*/
// function isEven($a){
//     if($a%2 == 0){
//         echo $a.". Bilangan Genap\n";
//     } else echo $a.". Bilangan Ganjil\n";
// }
// Tidak boleh menggunakan perintah perulangan?
// isEven(1);
// isEven(2);
// isEven(3);
// isEven(4);
// isEven(5);
// isEven(6);
// isEven(7);
// isEven(8);
// isEven(9);
// isEven(10);

// Recursive version

function rIsEven(){
    static $a=1;
    //Basis
    if($a===11){
        return;
    } 
    //Recurrence
    else {
        if($a%2 === 0){
            echo $a.". Bilangan Genap\n";
        } else {
            echo $a.". Bilangan Ganjil\n";
        };
        $a+=1;
        rIsEven();
    }
}
rIsEven();
?>
