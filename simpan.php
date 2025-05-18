
<?php
include 'config.php';

$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$asal = $_POST['asal_sekolah'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$sql = "INSERT INTO pendaftar (nama, nisn, asal_sekolah, alamat, no_hp)
        VALUES ('$nama', '$nisn', '$asal', '$alamat', '$no_hp')";

if (mysqli_query($conn, $sql)) {
    echo "Pendaftaran berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
