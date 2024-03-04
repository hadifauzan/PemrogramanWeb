<?php
// menampilkan jenis jenis operator dan hasil aritmatika
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilkurang = $a - $b;
$hasilkali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a: $a <br>";
echo "Nilai b: $b <br><br>";

echo "Hasil Penjumlahan a + b: $hasilTambah <br>";
echo "Hasil Pengurangan a - b: $hasilkurang <br>";
echo "Hasil Perkalian a * b: $hasilkali <br>";
echo "Hasil Pembagian a / b: $hasilBagi <br>";
echo "Sisa Bagi a % b: $sisaBagi <br>";
echo "Hasil Pangkat a ** b: $pangkat <br>";
echo "<br><br>";

// menampilkan hasil pembandingan
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Pembandingan a == b: " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Hasil Pembandingan a != b: " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Hasil Pembandingan a < b: " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Hasil Pembandingan a > b: " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Hasil Pembandingan a <= b: " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Hasil Pembandingan a >= b: " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";
echo "<br><br>";

// menampilkan hasil logika
$hasilAnd = $a && $b;
$hasilor = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil Operasi Logika AND (a && b): " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil Operasi Logika OR (a || b): " . ($hasilor ? 'true' : 'false') . "<br>";
echo "Hasil Operasi Logika NOT (!a): " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil Operasi Logika NOT (!b): " . ($hasilNotB ? 'true' : 'false') . "<br>";
echo "<br><br>";

// menampilkan hasil penugasan
$a += $b;
echo "Hasil penjumlahan: " . $a . "<br>";
$a -= $b;
echo "Hasil pengurangan: " . $a . "<br>";
$a *= $b;
echo "Hasil perkalian: " . $a . "<br>";
$a /= $b;
echo "Hasil pembagian: " . $a . "<br>";
$a %= $b;
echo "Hasil modulus: " . $a . "<br>";
echo "<br><br>";

// menampilkan identik
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

$hasilIdentik = $a === $b;
echo "Hasil dari operator identitas (===): ";
echo $hasilIdentik ? "True" : "False";
echo "<br>";

$hasilTidakIdentik = $a !== $b;
echo "Hasil dari operator tidak identitas (!==): ";
echo $hasilTidakIdentik ? "True" : "False";
echo "<br><br>";

// Penggunaan Variabel dan Perhitungan Persentase kursi kosong
$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

// Menampilkan Persentase Kursi Kosong
echo "Presentase kursi kosong = {$persentaseKosong}";
echo "<br><br>";

?>