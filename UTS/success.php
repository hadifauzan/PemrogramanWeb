<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Member Barbershop - Berhasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Terima kasih!</h2>
        <p>Anda telah berhasil mendaftar dan reedem coupon member barbershop.</p>
        <p>Nama: <?php echo $_SESSION['name']; ?></p>
        <p>Email: <?php echo $_SESSION['email']; ?></p>
        <p>Nomor Telepon: <?php echo $_COOKIE['phone']; ?></p>
    </div>
</body>
</html>