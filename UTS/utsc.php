<?php
// Membuat array asosiatif untuk menyimpan data produk dan harganya
$nanta = array(
    array('Produk' => 'Baju Bayi', 'Harga' => 35500),
    array('Produk' => 'Diapers', 'Harga' => 51000),
    array('Produk' => 'Bedak', 'Harga' => 15000),
    array('Produk' => 'Minyak Telon', 'Harga' => 30000)
);

// Inisialisasi jumlah pembelian
$jumlahPembelian = 0;

// Menampilkan tanggal transaksi
echo 'Tanggal Transaksi: 06 November 2023<br>';

// Menampilkan produk yang dibeli beserta jumlah dan total harga
echo 'Produk:<br>';
$jumlahProduk = array(
    'Baju Bayi' => 1,
    'Diapers' => 3,
    'Bedak' => 1,
    'Minyak Telon' => 2
);

foreach ($nanta as $item) {
    $namaProduk = $item['Produk'];
    $hargaProduk = $item['Harga'];
    $jumlah = $jumlahProduk[$namaProduk];
    $totalHarga = $hargaProduk * $jumlah;
    
    echo $namaProduk . ' (' . $jumlah . 'X' . number_format($hargaProduk, 0, ',', '.') . ') = Rp ' . number_format($totalHarga, 0, ',', '.') . '<br>';
    $jumlahPembelian += $totalHarga;
}


echo 'Total: Rp ' . number_format($jumlahPembelian, 0, ',', '.') . '<br>';

// Inisialisasi diskon
$diskon = 0;

// Menghitung diskon berdasarkan total pembelian
if ($jumlahPembelian >= 200000) {
    $diskon = 0.2; // Diskon 20%
} elseif ($jumlahPembelian >= 150000) {
    $diskon = 0.1; // Diskon 10%
}

// Menghitung total pembayaran setelah diskon
$totalPembayaran = $jumlahPembelian * (1 - $diskon);

// Menampilkan diskon
echo 'Diskon: ' . ($diskon * 100) . '%<br>';

// Menampilkan total pembayaran setelah diskon
echo 'Total Pembayaran: Rp ' . number_format($totalPembayaran, 0, ',', '.');
?>