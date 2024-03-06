<?php
$photos = array(
    array(
        'image' => '1.jpg',
        'nama' => 'Rafli',
        'nim' => '22417224',
        'jurusan' => 'Teknik Informatika',
        'email' => 'rafli@gmail.com'
    ),
    array(
        'image' => '2.jpg',
        'nama' => 'Salsa',
        'nim' => '2241760123',
        'jurusan' => 'Teknik Komputer',
        'email' => 'salsa@gmail.com'
    ),
    array(
        'image' => '3.jpg',
        'nama' => 'ervan',
        'nim' => '2241760231',
        'jurusan' => 'Teknik Sipil',
        'email' => 'ervan87@gmail.com'
    ),
    array(
        'image' => '4.jpg',
        'nama' => 'joni',
        'nim' => '2241760223',
        'jurusan' => 'akuntansi',
        'email' => 'joni@gmail.com'
    ),
    array(
        'image' => '5.jpg',
        'nama' => 'dino',
        'nim' => '2241760876',
        'jurusan' => 'Perpajakan',
        'email' => 'dino@gmail.com'
    ),
);

foreach ($photos as $photo) {
    echo "<li><img src='img/" . $photo['image'] . "' alt='Photo' width='200' height='150'></li>";
    echo "<li>Nama: " . $photo['nama'] . "</li>";
    echo "<li>NIM: " . $photo['nim'] . "</li>";
    echo "<li>Jurusan: " . $photo['jurusan'] . "</li>";
    echo "<li>Email: " . $photo['email']. "</li>";
    echo "<br>";
}
?>