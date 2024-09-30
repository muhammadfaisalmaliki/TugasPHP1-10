<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
body {
    font-family: Arial, sans-serif;
    background-color: black;
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color: #444;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
}


label {
    font-weight: bold;
    margin-bottom: 10px;
    display: block;
    color: white;
}


input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #ff7f50;
    color: white;
    border: none;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    width: 100% ;
}


input[type="submit"]:hover {
    background-color: #45a049;
}


div{
    margin-top: 15px;
}

.hasil{
    color: white;
}

    </style>
</head>
<body>
    <form method="POST">
        <label for="">Nama 1</label>
        <div>
            <input type="text" name="nama1" id="nama1">
        </div>
        <label for="">Nama 2</label>
        <div>
            <input type="text" name="nama2" id="nama2">
        </div>
        <div >
            <input type="submit" value="Bandingkan">
        </div>
        <div class="hasil">
        <?php

$jmlahnamaA = strlen(@$_POST['nama1']); 
$jmlahnamaB = strlen(@$_POST['nama2']); 
$jmlahtotalA = $jmlahnamaA-$jmlahnamaB;
$jmlahtotalB = $jmlahnamaB-$jmlahnamaA;

if($jmlahnamaA > $jmlahnamaB) {
    echo "nama pertama :". $_POST['nama1'];
    echo "<br>";
    echo "nama kedua :". $_POST['nama2'];
    echo "<br>";

    echo $_POST['nama1']. " lebih panjang dari " . $_POST['nama2'] . " dengan selisih " . $jmlahtotalA;
} else if ($jmlahnamaA < $jmlahnamaB) {
 
    echo "nama pertama :". $_POST['nama1'];
    echo "<br>";
    echo "nama kedua :". $_POST['nama2'];
    echo "<br>";

    echo $_POST['nama2']. " lebih panjang dari " . $_POST['nama1'] . " dengan selisih " . $jmlahtotalB;
}else {
    echo "namanya sama panjang";
}

?>
        </div>
    </form>
</body>
</html>

<!-- 27:12 -->

<!-- 
-Form ini memiliki dua input teks untuk nama dan satu tombol submit. Form mengirimkan data dengan metode POST.
-Menggunakan fungsi strlen() untuk menghitung panjang dari nama yang dimasukkan (
j
m
l
a
h
n
a
m
a
A
u
n
t
u
k
n
a
m
a
1
d
a
n
jmlahnamaAuntuknama1danjmlahnamaB untuk nama2).
Menghitung selisih panjang nama dengan $jmlahtotalA dan $jmlahtotalB.
-Memeriksa panjang kedua nama menggunakan kondisi if, else if, dan else.
Jika panjang nama1 lebih besar, akan menampilkan bahwa nama1 lebih panjang, begitu juga sebaliknya untuk nama2. Jika panjangnya sama, menampilkan bahwa kedua nama memiliki panjang yang sama.
-->