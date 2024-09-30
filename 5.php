<?php
$angka1 = [80,77,65,89,55,12,90,86];
$angka2 = [77,99,55,81,45,90,91,98];



echo "yang ada di kedua variabel : ";
echo "<br>";
$membandingkan= array_intersect($angka1,$angka2);


foreach($membandingkan as $membandingkan1){
    echo $membandingkan1.","; 
}

echo "<br>";

$membandingkan2 = array_diff($angka1,$angka2);

echo "yang tidak ada di kedua variabel : ";
echo "<br>";
foreach($membandingkan2 as $membandingkan22){
    echo $membandingkan22.","; 
}

?>

<!-- 24:43 -->

<!-- 
-Di sini, dua array dideklarasikan: $angka1 dan $angka2, masing-masing berisi sekumpulan angka.
-echo "yang ada di kedua variabel : ";  
echo "<br>";  
$membandingkan = array_intersect($angka1, $angka2);
(Kode ini mencetak judul "yang ada di kedua variabel".
Fungsi array_intersect() digunakan untuk menemukan elemen yang ada di kedua array. Hasilnya disimpan dalam variabel $membandingkan.)
-Loop foreach digunakan untuk iterasi melalui elemen-elemen yang ada di $membandingkan.
Setiap elemen dicetak diikuti dengan koma.
-echo "<br>";  
$membandingkan2 = array_diff($angka1, $angka2);  
echo "yang tidak ada di kedua variabel : ";  
echo "<br>";
(Kode ini mencetak judul "yang tidak ada di kedua variabel".
Fungsi array_diff() digunakan untuk menemukan elemen yang ada di $angka1 tetapi tidak ada di $angka2. Hasilnya disimpan dalam variabel $membandingkan2.)
-Loop foreach digunakan untuk iterasi melalui elemen-elemen yang ada di $membandingkan2.
Setiap elemen dicetak diikuti dengan koma.
-
-->