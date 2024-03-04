<?php
// menambahkan variabel pada variabel_konstanta.php 
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka1;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";

// menunjukkan tipe data boolean
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah";

// menunjukkan untuk menyimpan nilai yang tetap konstan sepanjang eksekusi program.
define("NAMA_SITUS", "Websiteku.com");
define("TAHUN_PENDIRIAN", 2023);
echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>