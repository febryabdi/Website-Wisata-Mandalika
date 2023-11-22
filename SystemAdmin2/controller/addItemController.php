<?php
    include_once "../connection.php";
    
    if(isset($_POST['upload']))
    {
       
        $NIK = $_POST['NIK'];
        $nama_lengkap= $_POST['nama_lengkap'];
        $usia = $_POST['usia'];
        $alamat = $_POST['alamat'];
        $nomor_telefon = $_POST['nomor_telefon'];
        $email = $_POST['email'];
        $tanggal_booking = $_POST['tanggal_booking'];
        $tiket = $_POST['tiket'];
        // $booking_status = $_POST['booking_status'];
        // $payment_status = $_POST['payment_status'];
    


        $insert = mysqli_query($koneksi,"INSERT INTO tiket_wisata (NIK,nama_lengkap,usia,alamat,nomor_telefon,email,tanggal_booking,tiket) 
        VALUES ('$NIK','$nama_lengkap',$usia,'$alamat','$nomor_telefon','$email','$tanggal_booking','$tiket')");

        if(!$insert)
        {
            echo mysqli_error($koneksi);
        }
        else
        {
            echo "Records added successfully.";
        }
     
    }
        
?>