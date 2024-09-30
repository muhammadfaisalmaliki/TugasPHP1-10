<?php
$siswa = [
[
    'nama' => 'andi',
    'nilai'=> [80,78,82,78,88],
],

[
    'nama' => 'Beni',
    'nilai'=> [86,70,80,85,81],
],


[
    'nama' => 'Dani',
    'nilai'=> [83,91,70,73,81],      
],

[
    'nama' => 'Eko',
    'nilai'=> [89,85,84,86,88],      
],

];

foreach($siswa as $i => $student) {
    $menhitungnilai = array_sum($student['nilai']);
    $banyaknilai = count($student['nilai']);
    $rataRata = $menhitungnilai/$banyaknilai;
    $i = $i +1;
    echo $i.$student['nama'] ." : ". $rataRata . "<br>";
}



?>

<!-- 18:46 -->

<!-- 
-Di sini, sebuah array $siswa dideklarasikan, yang merupakan array multidimensi. Setiap elemen array utama adalah array asosiatif yang memuat informasi tentang siswa, termasuk nama dan nilai-nilai mereka dalam bentuk array.
-foreach untuk iterasi melalui setiap elemen (siswa) dalam array $siswa. $i adalah indeks dari elemen (siswa), dan $student adalah array asosiatif yang menyimpan informasi masing-masing siswa.
-array_sum($student['nilai']) digunakan untuk menghitung total nilai untuk siswa yang sedang dievaluasi.
count($student['nilai']) digunakan untuk menghitung jumlah nilai yang dimiliki oleh siswa tersebut.
Rata-rata nilai dihitung dengan membagi total nilai ($menhitungnilai) dengan jumlah nilai ($banyaknilai).
-ndeks $i ditambah 1 untuk memulai penomoran dari 1 (karena indeks array di PHP mulai dari 0).
Kemudian, kode ini mencetak nama siswa dan nilai rata-rata mereka dengan format: "nomor siswa nama : rata-rata_nilai".
-->