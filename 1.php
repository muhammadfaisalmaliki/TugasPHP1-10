<?php

$hbd = "Selamat Ulang Tahun yang ke-17";

if(preg_match("/\d/",$hbd)) {
    $pisah = preg_replace("/[^0-9]/","",$hbd);
    $number = implode(",",str_split($pisah,2));
    echo "Selamat ulang tahun yang ke 17" ;
    echo "<br>";
    echo "text mengandung angka : " . $number ;
} else {
    echo "Selamat ulang tahun brow" ;
    echo "text tidak mengandung angka";
}


?>

<!-- 07:46 -->

<!-- 
-$hbd diisi pake string yang berisi pesan ulang tahun.
-fungsi preg_match untuk memeriksa apakah string $hbd mengandung angka. Pola "/\d/" digunakan untuk mencocokkan digit (angka 0-9). Jika ada angka dalam string, blok kode di dalam if akan dieksekusi.
-preg_replace digunakan untuk menghapus semua karakter yang bukan angka dari string $hbd. Hasilnya disimpan dalam variabel $pisah.
-str_split($pisah, 2) membagi string angka menjadi potongan-potongan yang terdiri dari 2 karakter. Kemudian, implode(",", ...) menggabungkan potongan-potongan tersebut menjadi satu string yang dipisahkan oleh koma.
-->