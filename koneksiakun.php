 <?php
//koneksi ke data base
$conn=mysqli_connect('localhost','root',"",'akademik');
function query($query) {
global $conn;
$result=mysqli_query($conn, $query);
$rows=[];
while($row=mysqli_fetch_assoc($result)) {
$rows[]=$row;
}
return$rows;
}
$koneksi=$conn;
if($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}


function login($conn, $username, $password) {
    $query = "SELECT * FROM akun WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user['password'])) {
            // Login sukses, periksa peran pengguna
            $role = $user['role'];

            if ($role == 'user') {
                echo "<script>alert('Login berhasil!');
        document.location.href = 'tabelsiswa.php'</script>";
    } else {
        echo "<script>alert('Login gagal! Periksa kembali username dan password.');
        document.location.href = 'tampilanlogin.php'</script>";
    }
        }
    }

    // Login gagal
    return false;
}

// Jika tombol login ditekan
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan proses login
    if (login($conn, $username, $password)) {
        echo "<script>alert('Login berhasil!');
        document.location.href = 'tabelsiswa.php'</script>";
}
}
function delete($id) {
    global $conn;
    mysqli_query($conn,"DELETE FROM data_siswa WHERE id=$id");
    return mysqli_affected_rows($conn);
}
function Edit($data) {
    global $conn;
    $id = $data["id"];
    $Nama_siswa=$data["Nama_siswa"];
    $nik=$data["nik"];
    $umur=$data["umur"];
    $jenis_kelamin=$data["jenis_kelamin"];
    $tempat_lahir=$data["tempat_lahir"];
    $tanggal_lahir=$data["tanggal_lahir"];
    $agama=$data["agama"];
    $Alamat=$data["Alamat"];
    $no_kk=$data["no_kk"];
    $query = "UPDATE data_siswa SET 
    Nama_siswa = '$Nama_siswa',
    nik = '$nik',
    umur = '$umur',
    jenis_kelamin = '$jenis_kelamin',
    tempat_lahir = '$tempat_lahir',
    tanggal_lahir = '$tanggal_lahir',
    agama = '$agama',
    Alamat = '$Alamat',
    no_kk = '$no_kk'
    WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>