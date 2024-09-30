<?php


for ($x = 1; $x <= 2; $x++) {
    echo "<br>";
for ($j = 10; $j >=1; $j--){
    $ja = $x*$j;
    
    echo $j . "x" . $x . "=" . $ja . "<br>";

}
}
?>

<!-- 7:40 -->

<!-- 
-Di sini, loop pertama dimulai dengan variabel $x yang diinisialisasi dengan 1 dan akan terus bertambah hingga mencapai 2. Loop ini akan mengulangi blok kode di dalamnya sebanyak 2 kali (untuk nilai $x 1 dan 2).
-<br> setiap baris abru biar rapih
-Jika loop pertama sedang berjalan, loop kedua dimulai dengan variabel $j yang diinisialisasi dengan 10 dan akan berkurang hingga mencapai 1. Loop ini akan mengulangi blok kode di dalamnya sebanyak 10 kali (dari 10 hingga 1).
-Di dalam loop kedua, kode ini menghitung hasil perkalian antara $x (yang saat ini 1 atau 2) dan $j (yang berkisar dari 10 hingga 1). Hasilnya disimpan dalam variabel $ja.
-echo $j . "x" . $x . "=" . $ja . "<br>"; (Kode ini mencetak hasil perkalian dalam format "j x x = hasil", di mana j adalah nilai dari $j, x adalah nilai dari $x, dan hasil adalah nilai dari $ja. Setelah itu, <br> digunakan untuk membuat baris baru di output.)
-->