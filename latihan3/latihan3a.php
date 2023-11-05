<?php
    function ganti_style($tulisan, $kelas) {
        return "<span class='$kelas' style='font-size: 28px; font-family: arial; color: blue; font-style: italic; font-weight: bold;'>$tulisan</span>";
      }

      $tulisan = "Hello World! Here I come!";
      $kelas = "ganti-style";
      echo ganti_style($tulisan, $kelas);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<span class='ganti-style' style='font-size: 28px; font-family: arial; color: blue; font-style: italic; font-weight: bold;'>Hello World! Here I come!</span>
</body>
</html>