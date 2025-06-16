<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $metode = htmlspecialchars($_POST['metode']);
    $total = intval($_POST['total']);

    echo "<h2>Terima Kasih, $nama!</h2>";
    echo "<p>Email: $email</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>Metode Pembayaran: $metode</p>";
    echo "<h3>Total Pembayaran: Rp " . number_format($total, 0, ',', '.') . "</h3>";
    echo "<p>Pesanan Anda sedang diproses.</p>";
} else {
    echo "Akses tidak sah.";
}
?>
