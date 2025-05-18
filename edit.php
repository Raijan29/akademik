<?php 
require 'koneksiakun.php';
$id = $_GET["id"];
$sw = query("SELECT * FROM data_siswa WHERE id=$id")[0];

if (isset($_POST["submit"])) {
    if (Edit($_POST) > 0) {
        echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'tabelsiswa.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal diubah!');
            document.location.href = 'tabelsiswa.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Siswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }
        form {
            background: #fff;
            padding: 50px 60px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            width: 600px;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
            font-size: 32px;
        }
        table {
            width: 100%;
        }
        td {
            padding: 12px 0;
            font-size: 16px;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ccc;
            border-radius: 10px;
            margin-top: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        input[type="text"]:focus {
            border-color: #74ebd5;
            outline: none;
            box-shadow: 0px 0px 8px #74ebd5;
        }
        button {
            width: 100%;
            padding: 15px;
            margin-top: 25px;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: linear-gradient(135deg, #43cea2, #185a9d);
        }
    </style>
</head>
<body>

<form action="" method="post">
    <h1>Edit Data Siswa</h1>
    <input type="hidden" name="id" value="<?= $sw["id"]; ?>">
    <table>
        <tr>
            <td>Nama Siswa</td>
            <td><input type="text" name="Nama_siswa" value="<?= $sw["Nama_siswa"]; ?>"></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td><input type="text" name="nik" value="<?= $sw["nik"]; ?>"></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><input type="text" name="umur" value="<?= $sw["umur"]; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="jenis_kelamin" value="<?= $sw["jenis_kelamin"]; ?>"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir" value="<?= $sw["tempat_lahir"]; ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="text" name="tanggal_lahir" value="<?= $sw["tanggal_lahir"]; ?>"></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td><input type="text" name="agama" value="<?= $sw["agama"]; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat" value="<?= $sw["Alamat"]; ?>"></td>
        </tr>
        <tr>
            <td>No KK</td>
            <td><input type="text" name="no_kk" value="<?= $sw["no_kk"]; ?>"></td>
        </tr>
    </table>
    <button type="submit" name="submit">Update Data</button>
</form>

</body>
</html>
