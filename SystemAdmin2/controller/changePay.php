<?php

    include_once "../connection.php";
    $BookingID=$_POST['record'];
    //echo $order_id;
    $sql = "SELECT payment_status from tiket_wisata where BookingID='$BookingID'"; 
    $result=$koneksi-> query($sql);
  //  echo $result;

    $row=$result-> fetch_assoc();
    
   // echo $row["pay_status"];
    
    if($row["payment_status"]==0){
         $update = mysqli_query($koneksi,"UPDATE tiket_wisata SET payment_status=1 where BookingID='$BookingID'");
    }
    else if($row["payment_status"]==1){
         $update = mysqli_query($koneksi,"UPDATE tiket_wisata SET payment_status=0 where BookingID='$BookingID'");
    }
        
 
    // if($update){
    //     echo"success";
    // }
    // else{
    //     echo"error";
    // }
    
?>