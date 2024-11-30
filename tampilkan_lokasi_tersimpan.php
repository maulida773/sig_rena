<?php
include('koneksi.php'); // Pastikan koneksi menggunakan mysqli

// Gunakan mysqli_query untuk mengambil data dari database
$lokasi = $conn->query("SELECT * FROM kordinat_gis");

while($koor = $lokasi->fetch_assoc()) {
    ?>
    <ul>
        <li class="content">
            <a href="javascript:carikordinat(new google.maps.LatLng(<?php echo $koor['x']; ?>, <?php echo $koor['y']; ?>))">
                <?php echo $koor['nama_tempat']; ?>
            </a> 
            - 
            <a href="#" class="delbutton" id="<?php echo $koor['nomor']; ?>">(Hapus)</a>
        </li>
    </ul>
    <?php
}
$conn->close(); // Tutup koneksi
?>
