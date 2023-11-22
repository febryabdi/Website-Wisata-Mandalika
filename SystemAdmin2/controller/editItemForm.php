<div class="container p-5">
    <h4>Edit Booking Detail</h4>
    <?php
    include_once "../connection.php";

    // Check if 'NIK' key is defined in the POST data.
    if (isset($_POST['NIK'])) {
        // Retrieve NIK from the posted data.
        $NIK = $_POST['NIK'];

        $query = "SELECT NIK, nama_lengkap, usia, alamat, nomor_telefon, email, tanggal_booking, tiket FROM tiket_wisata WHERE NIK='$NIK'";
        $qry = mysqli_query($koneksi, $query);
        $numberOfRow = mysqli_num_rows($qry);

        if ($numberOfRow > 0) {
            while ($row1 = mysqli_fetch_array($qry)) {
                $NIK = $row1['NIK'];
                $nama_lengkap = $row1['nama_lengkap'];
                $usia = $row1["usia"];
                $alamat = $row1["alamat"];
                $nomor_telefon = $row1["nomor_telefon"];
                $email = $row1["email"];
                $tanggal_booking = $row1["tanggal_booking"];
                $tiket = $row1["tiket"];
            }
        }
    } else {
        echo "NIK is not defined in the POST data.";
    }
    ?>
    <form id="update-Items" enctype='multipart/form-data' action="./controller/updateItemController.php" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" id="v_id" value="<?=$BookingID?>" hidden>
        </div>
        <div class="form-group">
            <label for="NIK">NIK:</label>
            <input type="text" name="NIK" class="form-control" id="NIK" value="<?=$NIK?>" required readonly>
        </div>
        <div class="form-group">
            <label for="nama_lengkap">Nama:</label>
            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?=$nama_lengkap?>" required>
        </div>
        <div class="form-group">
            <label for="usia">Usia:</label>
            <input type="text" name="usia" class="form-control" id="usia" value="<?=$usia?>" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="<?=$alamat?>" required>
        </div>
        <div class="form-group">
            <label for="nomor_telefon">Nomor Telepon:</label>
            <input type="text" name="nomor_telefon" class="form-control" id="nomor_telefon" value="<?=$nomor_telefon?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control" id="email" value="<?=$email?>" required>
        </div>
        <div class="form-group">
            <label for="tanggal_booking">Tanggal Booking:</label>
            <input type="date" name="tanggal_booking" class="form-control" id="tanggal_booking" value="<?=$tanggal_booking?>" required>
        </div>
        <div class="form-group">
            <label for="tiket">Tiket:</label>
            <input type="text" name="tiket" class="form-control" id="tiket" value="<?=$tiket?>" required>
        </div>
        <div class="form-group">
            <button type="submit" style="height:40px" class="btn btn-primary">Update Booking</button>
        </div>
    </form>
</div>
