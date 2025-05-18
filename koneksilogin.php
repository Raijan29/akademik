<?php
// File: db_config.php
$server = "localhost";
$user = "root";
$password = "";
$database = "akademik";

$koneksi = new mysqli($server, $user, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Query untuk menambahkan pengguna ke tabel
    $query = "INSERT INTO akun (username, password) VALUES ('$username', '$password')";

    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Registrasi berhasil');
        document.location.href = 'index_login.php';</script>";
        
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}

$koneksi->close();
?>