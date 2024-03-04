<?php
// menggunakan foreach untuk menggunakan array
$nilaisiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaisiswa as $nilai) {
if ($nilai >= 70) {
$nilaiLulus[] = $nilai;
}
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);
echo "<br><br>";

// menggunakan foreach untuk melihat daftar karyawan
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
    ];

    $karyawanPengalamanLimaTahun = [];
    
    foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
    $karyawanPengalamanLimaTahun[] = $karyawan[0];
        }
    }
    echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ',$karyawanPengalamanLimaTahun);
    echo "<br><br>";

    // menggunakan array asosiatif
    $daftarNilai = [
        'Matematika' => [
            ['Alice', 85],
            ['Bob', 92],
            ['Charlie', 78],
        ],
        'Fisika' => [
            ['Alice', 90],
            ['Bob', 88],
            ['Charlie', 75],
        ],
        'Kimia' => [
            ['Alice', 92],
            ['Bob', 80],
            ['Charlie', 85],
        ],
    ];
    $mataKuliah = 'Fisika';
    
    echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
    
    foreach ($daftarNilai[$mataKuliah] as $nilai) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
    echo "<br><br>";

    //array dua dimensi
    $data_nilai_siswa = [
        'Alice' => 85,
        'Bob' => 92,
        'Charlie' => 78,
        'David' => 64,
        'Eva' => 90
    ];
    
    // Menghitung rata-rata nilai kelas
    $rata_rata_kelas = array_sum($data_nilai_siswa) / count($data_nilai_siswa);
    
    // Mencetak daftar nilai siswa yang di atas rata-rata kelas
    echo "Daftar nilai siswa yang di atas rata-rata kelas: <br>";
    foreach ($data_nilai_siswa as $nama => $nilai) {
        if ($nilai > $rata_rata_kelas) {
            echo "Nama: $nama, Nilai: $nilai <br>";
        }
    }
?>