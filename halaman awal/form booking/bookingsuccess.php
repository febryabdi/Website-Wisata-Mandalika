<?php
    session_start();
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bsuccess.css">
    </head>
    <body>
        
        <section class = "banner">
            <h2>ORDERAN BERHASIL!</h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                    <h3>HASIL BOOKING</h3>
                    <table border="2">
                        <tr>
                            <th><h4>NIK</h4></th>
                            <td><h4><?php echo $_SESSION['nik']; ?></h4></td>
                        </tr>
                        <tr>
                            <th><h4>TANGGAL</h4></th>
                            <td><h4><?php echo $_SESSION['tanggal_booking']; ?></h4></td>
                        </tr>
                        <tr>
                            <th><h4>NAMA</h4></th>
                            <td><h4><?php echo $_SESSION['nama_lengkap']; ?></h4></td>
                        </tr>
                        <tr>
                            <th><h4>NO. TELF</h4></th>
                            <td><h4><?php echo $_SESSION['nomor_telefon']; ?></h4></td>
                        </tr>
                        <tr>
                            <th><h4>USIA</h4></th>
                            <td><h4><?php echo $_SESSION['usia']; ?></h4></td>
                        </tr>
                        <tr>
                            <th><h4>ALAMAT</h4></th>
                            <td><h4><?php echo $_SESSION['alamat']; ?></h4></td>
                        </tr>
                        <tr>
                            <th><h4>EMAIL</h4></th>
                            <td><h4><?php echo $_SESSION['email']; ?></h4></td>
                        </tr>
                        <tr>
                            <th><h4>JUMLAH TIKET</h4></th>
                            <td><h4><?php echo $_SESSION['jumlah_tiket']; ?></h4></td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        
    </body>
</html>