<?php
$servername="localhost";
$username="root";
$password="";
$database="akademik";

//membuat koneksi
$koneksi=new mysqli($servername,$username,$password,$database);

//memeriksa koneksi
if ($_SERVER["REQUEST_METHOD"]=="POST") {

    //MENGAMBIL DATA DARI FORMULIR
    $Nama_siswa=$_POST['Nama_siswa'];
    $nik=$_POST['nik'];
    $umur=$_POST['umur'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $agama=$_POST['agama'];
    $Alamat=$_POST['Alamat'];
    $no_kk=$_POST['no_kk'];
}

//menyimpan data ke database
$my="INSERT INTO data_siswa(Nama_siswa,nik,umur,jenis_kelamin,tempat_lahir,tanggal_lahir,agama,Alamat,no_kk)VALUES('$_POST[Nama_siswa]','$_POST[nik]','$_POST[umur]','$_POST[jenis_kelamin]','$_POST[tempat_lahir]','$_POST[tanggal_lahir]','$_POST[agama]','$_POST[Alamat]','$_POST[no_kk]')";

if($koneksi->query($my)===TRUE) {
    echo "<script>alert('Pendaftaran berhasil!');
        document.location.href = 'tabelsiswa.php'</script>";
} else {
    echo "error:". $my . "<br>" . $koneksi->error;
}
$koneksi->close();
?>