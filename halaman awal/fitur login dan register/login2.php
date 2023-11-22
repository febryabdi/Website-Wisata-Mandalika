<?php
// Melakukan koneksi ke database MySQL menggunakan MySQLi
$server = "localhost"; // Ganti dengan nama server MySQL Anda
$username = "root"; // Ganti dengan nama pengguna MySQL Anda
$password = ""; // Ganti dengan kata sandi MySQL Anda
$database = "dbTiketWisata"; // Ganti dengan nama database yang digunakan

$koneksi = new mysqli($server, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$status = "";

if (isset($_POST["register"])) {
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "insert into user (Nama, Email, Password) values('$nama','$email','$password')";
    $result = $koneksi->query($query);
    $status = "selesaiRegister";
} else if (isset($_POST["login"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "select * from user where Email='$email' and Password='$password'";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $akun = $result->fetch_assoc();
        if($akun["role"] == "admin") {
            header("Location: /wisata paw2/SystemAdmin2/index.php");
            exit();
        } else if($akun["role"] == "user") {
            header("Location: /wisata paw2/halaman awal/form booking/booking.php");
            exit();
        }
    } else { 
        $status = "gagalLogin";
    }
}
// echo "Akun telah berhasil dibuat <br> Silahkan <a href='login.php'>Login</a>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <title>Login & Registration</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="logo">
            <a href="http://localhost/wisata%20paw2/halaman%20awal/index.html"><img src="wfi putih.png" class="putih" /></a>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box -----------------------------------> 
    <div class="form-box">
        <!------------------- login form -------------------------->  
            <div class="login-container" name="login" id="login">
                <div class="top">
                    <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                    <header>Login</header>
                    <div class="echo <?php echo $status; ?>">
                    <?php
                    if ($status == "selesaiRegister") {
                        echo "Berhasil register!";
                    } else if ($status == "gagalLogin"){
                        echo "Gagal Login!";
                    }
                    ?>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="input-box">
                        <input type="text" name="email" class="input-field" placeholder="Email">
                        <i class="bx bx-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" class="input-field" placeholder="Password">
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" name="login" value="Sign In">
                    </div>
                </form>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check">
                        <label for="login-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>
            </div>
        <!------------------- register form -------------------------->
            <div class="register-container" name="register" id="register">
                <div class="top">
                    <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                    <header>Sign Up</header>
                </div>
                <form action="" method="post">
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="text" name="name" class="input-field" placeholder="Name">
                            <i class="bx bx-user"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <input type="text" name="email" class="input-field" placeholder="Email">
                        <i class="bx bx-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" class="input-field" placeholder="Password">
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" name="register" value="Register">
                    </div>
                </form>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="register-check">
                        <label for="register-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Terms & conditions</a></label>
                    </div>
                </div>
            </div>
        </div>
    </div>   


<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

</script>

</body>
</html>