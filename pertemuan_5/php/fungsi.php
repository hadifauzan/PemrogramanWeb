<?php
/*
// langkah 1
// membuat fungsi perkenalan

function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Fauzan <br>";
    echo "Senang berkenalan dengan anda <br>";
}

// memanggil fungsi perkenalan
perkenalan();
perkenalan();
?>

// langkah 4
//membuat fungsi
function perkenalan($nama, $salam) {
echo $salam.", ";
echo "Perkenalkan, nama saya ".$nama."<br/>";
echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana","Hallo");

echo "<hr>";

$saya = "Fauzan";
$ucapanSalam = "Selamat pagi";

//memanggil lagi
perkenalan ($saya, $ucapanSalam) ;
?> 

// langkah 7
//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
echo $salam.", ";
echo "Perkenalkan, nama saya ".$nama."<br/>";
echo "Senang berkenalan dengan Anda<br/>";
}
//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana","Hallo");

echo "<hr>";

$saya = "Fauzan";
$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);
?> 

// langkah 10
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
$umur = $thn_sekarang - $thn_lahir;
return $umur;

}

echo "Umur saya adalah ". hitungUmur(2003, 2023) ." tahun" 
//isi sesuai dengan tahun lahir kalian
?> */

//langkah 13
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
$umur = $thn_sekarang - $thn_lahir;
return $umur;
}
function perkenalan ($nama, $salam="Assalamualaikum") {
echo $salam.",";
echo "Perkenalkan, nama saya ".$nama."<br/>";

//memanggil fungsi lain
echo "Saya berusia ". hitungUmur(2003, 2024) ." tahun<br/>";
echo "Senang berkenalan dengan anda<br/>";
}
//memanggil fungsi perkenalan
perkenalan ("Fauzan");

?>