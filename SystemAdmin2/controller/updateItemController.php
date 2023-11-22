<?php

include_once "../connection.php";

if (isset($_POST['NIK'])) {
    $NIK = $_POST['NIK'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $nomor_telefon = $_POST['nomor_telefon'];
    $email = $_POST['email'];
    $tanggal_booking = $_POST['tanggal_booking'];
    $tiket = $_POST['tiket'];

    $query = "UPDATE tiket_wisata SET nama_lengkap = '$nama_lengkap', usia = $usia, alamat = '$alamat', nomor_telefon = '$nomor_telefon', email = '$email', tanggal_booking = '$tanggal_booking', tiket = $tiket WHERE NIK='$NIK'";
    $data = mysqli_query($koneksi, $query);

    if ($data) {
        echo "Booking Successfully Updated";
    } else {
        echo "Not able to update";
    }
}

?>