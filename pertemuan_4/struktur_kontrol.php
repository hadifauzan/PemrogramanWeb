<?php
// tentang fungsi if else
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
echo "Nilai huruf: C";
}elseif ($nilaiNumerik < 70) {
echo "Nilai huruf: D";
}
echo "<br><br>";

// tentang fungsi while
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
$jarakSaatIni += $peningkatanHarian;
$hari++;

}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br><br>";

// tentang fungsi for
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
$jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);

}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br><br>";

// tentang foreach
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
$totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<br><br>";

// tentang foreach
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
if ($nilai < 60) {
echo "Nilai: $nilai (Tidak lulus) <br>";
continue;
}
echo "Nilai: $nilai (Lulus) <br>";
}
echo "<br><br>";

// Daftar nilai dari 10 siswa
$nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

// Mengurutkan nilai dari rendah ke tinggi
sort($nilai_siswa);

// Menghitung jumlah elemen array
$count = count($nilai_siswa);

// Menghitung total nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi
$total_nilai = 0;
for ($i = 2; $i < $count - 2; $i++) {
    $total_nilai += $nilai_siswa[$i];
}

// Menampilkan total nilai
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai;
echo "<br><br>";

// tentang if else
// Harga produk
$harga_produk = 120000;

// Diskon
$diskon = 0.2; // 20%

// Harga setelah diskon
if ($harga_produk > 100000) {
    $harga_setelah_diskon = $harga_produk - ($harga_produk * $diskon);
} else {
    $harga_setelah_diskon = $harga_produk;
}

// Menampilkan harga yang harus dibayar setelah mendapatkan diskon
echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($harga_setelah_diskon, 2, ',', '.');
echo "<br><br>";

// tentang operasi ternary
// Skor pemain
$skor_pemain = 700; // Misalnya, asumsikan skor pemain adalah 700

// Menampilkan total skor pemain dan menentukan apakah pemain mendapatkan hadiah tambahan menggunakan operasi ternary
echo "Total skor pemain adalah: $skor_pemain <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . ($skor_pemain > 500 ? "YA" : "TIDAK");
echo "<br><br>";


?>