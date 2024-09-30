<?php
$usia=[12,15,17,20,25,30,35,40,45,50];
$dewasa = 0;
$AnakAnak= 0;

foreach ($usia as $umur) {
if ($umur>=17){
    $dewasa++;  
}else{
    $AnakAnak++;
}
}

echo "list usia "; foreach($usia as $umur2){
    echo $umur2.",";
};
echo "<br>";
echo "Jumlah kategori Dewasa :".$dewasa;
echo "<br>";
echo "jumlah kategori Anak Anak :".$AnakAnak;
?>

<!-- 27:49 -->

<!-- 
-Di sini, kita mendefinisikan array $usia yang berisi daftar umur (usia) individu.
-$dewasa: untuk menghitung jumlah individu yang berusia 17 tahun ke atas.
$AnakAnak: untuk menghitung jumlah individu yang berusia di bawah 17 tahun
-Loop foreach digunakan untuk iterasi melalui setiap usia dalam array $usia.
Dalam setiap iterasi, program memeriksa apakah usia individu ($umur) lebih besar atau sama dengan 17:
Jika ya, maka variabel $dewasa bertambah 1.
Jika tidak, maka variabel $AnakAnak bertambah 1.
-Program kemudian mencetak daftar usia dengan menampilkan setiap nilai dalam array $usia diikuti dengan tanda koma.
Setelah menampilkan daftar usia, program mencetak jumlah individu dalam kategori Dewasa dan Anak-Anak menggunakan informasi yang dihitung sebelumnya.
Menggunakan echo, hasil tersebut ditampilkan ke layar.
-->