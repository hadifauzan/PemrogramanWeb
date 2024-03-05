<?php
$data = [
  "Nama" => ["Andi", "Budi", "Tono", "Jessica","lucky"],
  "NIM" => ["2101001", "2101002", "2101003", "2101004", "2101005"],
  "Jurusan" => ["teknik kimia", "teknik listrik", "teknik informatika", "teknik mesin", "teknik sipil"],
  "Email" => ["andi35@gmail.com", "budi12@gamil.com", "tono123@gmail.com", "jessica89@gmail.com", "lucky@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tabel matrik</title>
</head>

<body>
  <table border="1">
    <tr>
      <?php
      foreach ($data as $key => $value) {
        echo "<th>" . $key . "</th>";
      }
      ?> 
    </tr>
    <?php
    for ($i=0; $i < 4; $i++) { 
        echo "<tr>";
        echo "<td>" .$data["Nama"][$i] . "</td>";
        echo "<td>" .$data["NIM"][$i] . "</td>";
        echo "<td>" .$data["Jurusan"][$i] . "</td>";
        echo "<td>" .$data["Email"][$i] . "</td>";
        echo "</tr>";
    }
    ?>
  </table>
</body>

</html>