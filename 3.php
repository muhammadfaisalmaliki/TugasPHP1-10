<?php
for ($x = 1; $x <= 11; $x++) {
    if ($x % 2 == 1) {
        for ($j = 1; $j <=11; $j++){
            if ($j == 5  ) {
                echo $x . "x" . $j . "=" . $x*$j . "<br>";     
        }
    }
  }
}
?>

<!-- 9:23 -->

<!-- 
-Di sini, loop pertama dimulai dengan variabel $x yang diinisialisasi dengan 1 dan akan terus bertambah hingga mencapai 11. Loop ini akan mengulangi blok kode di dalamnya sebanyak 11 kali (dari 1 hingga 11).
-Di dalam loop pertama, ada pemeriksaan untuk mengecek angka ganjil atau bukan.
-Jika $x adalah angka ganjil, maka loop kedua dimulai dengan variabel $j yang diinisialisasi dengan 1 dan akan bertambah hingga mencapai 11. Loop ini juga akan mengulangi blok kode di dalamnya sebanyak 11 kali.
-Di dalam loop kedua, ada pemeriksaan untuk menentukan apakah $j sama dengan 5. Jika ya, maka blok kode di dalam if ini akan dieksekusi.
-ika $j sama dengan 5, maka kode ini akan mencetak hasil perkalian antara $x dan $j (yang selalu 5 pada titik ini). Format outputnya adalah "x x = hasil", di mana x adalah nilai dari $x dan $j, dan hasil adalah hasil perkalian $x * $j. Setelah itu, <br> digunakan untuk membuat baris baru di output.
-->