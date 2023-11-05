<?php

// Definisikan associative array dengan 10 elemen dan 5 field data
$data = array(
    array(
        "no" => "01",
        "foto" => "<img src = '01.png' width ='190' height = '150'>", 
        "nama" => "APPLE INC", 
        "deskripsi" => "<p> perusahaan teknologi terkemuka yang terkenal dengan</p>
        <p> produk-produk seperti Iphine,Ipad, dan MacBook.</p>", 
        "tanggal" => "1 april 1976", 
        "asal" => "California,Amerika"),

    array(
     "no" => "02",   
     "foto" => "<img src = '02.png' width ='190' height = '150'>",
     "nama" => "GOOGLE", 
     "deskripsi" => "<p>Perusahaan induk Alphabet Inc</p>
     <p>yang terkenal dengan mesin pencari google,</p> 
     <p> android dan banya layanan online lainnya.</p>", 
     "tanggal" => "4 september 1998", 
     "asal" => "California,Amerika"),

    array(
     "no" => "03",   
     "foto" => "<img src = '03.png' width ='190' height = '150'>",
     "nama" => "AMAZON", 
     "deskripsi" => " <p>perusahaan e-commerce terbesar di dunia,</p>
      <p>juga terlibat dalam komputasi awan dan lainnya</p>", 
     "tanggal" => "5 juli 1994", 
     "asal" => "Washington,Amerika"),

    array(
     "no" => "04",   
     "foto" => "<img src = '04.png' width ='190' height = '150'>",
     "nama" => "MICROSOFT", 
     "deskripsi" => "terkenal dengan sistem operasi windows,produk office,dan layanan cloud seperti Azure.", 
     "tanggal" => "4 april 1975", 
     "asal" => "<p>new meksiko,</p>
     <p>meksiko</p>
     <p>Amerika</p>"),

    array(
     "no" => "05",   
     "foto" => "<img src = '05.png' width ='190' height = '150'>",
     "nama" => "facebook", 
     "deskripsi" => "perusahaan di balik jejaring sosial facebook,instagram,whatsapp,dan onclus VR.", 
     "tanggal" => "4 februari 2004", 
     "asal" => "<p>cambridge massachussets</p>
     <p>Amerika</p>"
    ),

    array(
     "no" => "06",   
     "foto" => "<img src = '06.png' width ='190' height = '150'>",
     "nama" => "TESLA", 
     "deskripsi" => "fokus pada mobil listrik,energi terbarukan,dan teknologi otonom.", 
     "tanggal" => "1 juli 2003", 
     "asal" => "<p>san carlos</p>
     <p>California<p/>
     <p>Amerika</p>"
    ),

    array(
     "no" => "07",   
     "foto" => "<img src = '07.png' width ='190' height = '150'>",
     "nama" => "IBM", 
     "deskripsi" => "terkenal dengan komputaso kognitif,layanan perusahaan,dan teknologi blockchain", 
     "tanggal" => "16 juni 1911", 
     "asal" => "<p>endicot,</p>
    <p>newyork</p>
    <p>Amerika</P."
),

    array(
     "no" => "08",   
     "foto" => "<img src = '08.png' width ='190' height = '150'>",
     "nama" => "INTEL", 
     "deskripsi" => "produsen mikroprosesor terkemuka yang digunakan dalam banyak perangkat komputer.", 
     "tanggal" => "18 juli 1968", 
     "asal" => "California,amerika"),

    array(
     "no" => "09",   
     "foto" => "<img src = '09.png' width ='190' height = '150'>",
     "nama" => "ADOBE", 
     "deskripsi" => "spesialis dalam perangkat lunak desain grafis dan multimedia seperti photoshop dan adobe creative cloud", 
     "tanggal" => "desember 1982", 
     "asal" => "california,amerika"),

    array(
     "no" => "10",   
     "foto" => "<img src = '10.png' width ='190' height = '150'>",
     "nama" => "Nvidia", 
     "deskripsi" => "terkenal dengan kartu grafis dan solusi komputasi GPU untuk berbagai aplikasi,termasuk kecerdasan buatan", 
     "tanggal" => "5 april 1993", 
     "asal" => "Amerika"),
);
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        .foto {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php
    // Menampilkan data dalam bentuk tabel HTML
    
echo "<table border='1'>";
echo "<tr><th>No</th><th>FOTO</th><th>NAMA PERUSAHAAN</th><th>DESKRIPSI</th><th>DIDIRIKAN</th><th>ASAL</th></tr>";

// Menggunakan loop untuk menampilkan data ke dalam tabel
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row['no'] . "</td>";
    echo "<td>" . $row['foto'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['deskripsi'] . "</td>";
    echo "<td>" . $row['tanggal'] . "</td>";
    echo "<td>" . $row['asal'] . "</td>";
    echo "</tr>";
}

echo "</table>";


    ?>

</body>
</html>



