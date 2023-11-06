<?php
$warna = array("hijau", "kuning", "kelabu", "merah muda");
$y = array("biru");

// Menampilkan semua isi array dalam kalimat
echo "balonku ada lima </br> rupa-rupa warnanya </br>";

// Menggunakan implode untuk menggabungkan elemen-elemen array dengan koma dan spasi
echo implode(", ", $warna);
echo " dan ";
echo implode($y);
echo "<br> meletus, balon hijau DORRRRR!!! </br> hatiku sangat kacau";
?>