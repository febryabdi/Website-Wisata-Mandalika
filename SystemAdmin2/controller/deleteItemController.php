<?php

    include_once "../connection.php";
    
    $NIK=$_POST['record'];
    $query="DELETE FROM tiket_wisata where NIK='$NIK'";

    $data=mysqli_query($koneksi,$query);

    if($data){
        echo"Booking Successfully Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>