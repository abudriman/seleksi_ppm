<?php
//hanya boleh 1 buah perulangan
$menu = ["Makanan", "Minuman", "Parsel"];
foreach($menu as $v){
    echo $v."\n";
    echo "1. Menu $v ke 1\n";
    echo "2. Menu $v ke 2\n";
    echo "3. Menu $v ke 3\n";
}
?>