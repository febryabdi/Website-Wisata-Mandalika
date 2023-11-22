<!-- <?php
session_start();
// Database connection parameters
$host = 'localhost'; // Hostname of your MySQL server
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password
$database = 'dbTiketWisata'; // Your database name

// Create a connection to the MySQL database
$connection = new mysqli($host, $username, $password, $database);

// Check if the connection is successful
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $_SESSION["nik"] = $_POST['nik'];
    $_SESSION["tanggal_booking"] = $_POST['tanggal_booking'];
    $_SESSION["nama_lengkap"] = $_POST['nama_lengkap'];
    $_SESSION["nomor_telefon"] = $_POST['nomor_telefon'];
    $_SESSION["usia"] = $_POST['usia'];
    $_SESSION["alamat"] = $_POST['alamat'];
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["jumlah_tiket"] = $_POST['tiket'];

    // Perform data validation here if needed

    // Insert data into the database
    $sql = "INSERT INTO tiket_wisata (NIK, tanggal_booking, nama_lengkap, nomor_telefon, usia, alamat, email, tiket)
            VALUES ('{$_SESSION['nik']}', '{$_SESSION['tanggal_booking']}', '{$_SESSION['nama_lengkap']}', '{$_SESSION['nomor_telefon']}', '{$_SESSION['usia']}', '{$_SESSION['alamat']}', '{$_SESSION['email']}', '{$_SESSION['jumlah_tiket']}')";

    if ($connection->query($sql) === TRUE) {
        // Data has been inserted successfully
            header("Location: /wisata paw2/halaman awal/form booking/bookingsuccess.php");
            exit();
    } else {
        // Handle database insertion error
        $error = "Error: " . $sql . "<br>" . $connection->error;
    }
}

// Close the database connection
$connection->close();
?> -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        
        <section class = "banner">
            <h2>ORDER TICKET MANDALIKA TOURISM</h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                    <h3>BOOKING HERE</h3>
                    <form action="" method="post">
                        <div class = "form-row">
                            <input type = "text" name="nik" placeholder="NIK.">
                            <input type="date" id="tanggal_booking" name="tanggal_booking">
                            <script>
                                // Mendapatkan elemen input tipe tanggal
                                var tanggalInput = document.getElementById('tanggal_booking');
                            
                                // Mendapatkan tanggal hari ini
                                var today = new Date();
                            
                                // Mengatur nilai minimal input tipe tanggal
                                tanggalInput.setAttribute('min', today.toISOString().split('T')[0]);
                            </script>
                        </div>

                        <div class = "form-row">
                            <input type = "text" name="nama_lengkap" placeholder="Nama Lengkap">
                            <input type = "text" name="nomor_telefon" placeholder="Nomor HP">
                        </div>

                        <div class = "form-row">
                            <input type = "number" name="usia" placeholder="Usia" min = "1">
                            <input type = "text" name="alamat" placeholder="Alamat">
                        </div>

                        <div class = "form-row">
                            <input type = "email" name="email" placeholder="Email">
                            <input type = "number" name="tiket" placeholder="Jumlah Tiket" min = "1">
                        </div>
                        <div>  
                            <input type = "submit" name="submit" value = "SUBMIT">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
    </body>
</html>