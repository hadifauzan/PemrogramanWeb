<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Free Haircut Coupon</title>
  <link rel="stylesheet" href="style.css">
  <style>
  </style>
</head>
<body>
  <div class="container">
    <h2>FREE HAIRCUT</h2>
    <p>Enjoy a free haircut at our barbershop..</p>
    <div class="card">
      <div class="box">1</div>
      <div class="box">2</div>
      <div class="box">3</div>
      <div class="box">4</div>
      <div class="box">5</div>
      <div class="box">6</div>
      <div class="box">7</div>
      <div class="box">8</div>
      <div class="box">9</div>
      <div class="box">10</div>
      <div class="info">
        <div class="box">1X FREE HAIRCUT</div>
        <div class="box">Member No: <input type="text" id="memberNo" placeholder="Masukkan nomor anggota" required></div>
        <div class="box">Nama: <input type="text" id="name" placeholder="Masukkan nama" required></div>
        <div class="box">Nomor Telepon: <input type="text" id="phone" placeholder="Masukkan nomor telepon" required></div>
        <button id="redeemBtn" onclick="redeemCoupon()">Redeem Coupon</button>
      </div>
    </div>
  </div>

  <script>
    function redeemCoupon() {
      var memberNo = document.getElementById("memberNo").value.trim();
      var name = document.getElementById("name").value.trim();
      var phone = document.getElementById("phone").value.trim();

      if (memberNo === "" || name === "" || phone === "") {
        alert("Mohon isi semua data terlebih dahulu.");
        return;
      }

      // Simpan data ke session atau cookie
      sessionStorage.setItem("name", name);
      sessionStorage.setItem("phone", phone);

      // Redirect ke halaman success.php
      window.location.href = "success.php";
    }
  </script>
</body>
</html>