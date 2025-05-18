<?php
include 'koneksiakun.php';
//ambil data(quary)dari tabel mahasiswa
$siswa=query("select*from data_siswa");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #ffcc99; /* Warna latar belakang */
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #ff3366; /* Warna teks judul */
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            background-color: #fff; /* Warna latar belakang tabel */
            border: 2px solid #ff3366; /* Warna garis tabel */
        }

        th, td {
            border: 2px solid #ff3366; /* Warna garis sel tabel */
            padding: 10px;
        }

        th {
            background-color: #ff6699; /* Warna latar belakang header tabel */
            color: #fff; /* Warna teks header tabel */
        }

        td {
            background-color: #ffd9b3; /* Warna latar belakang sel tabel */
        }

        a {
            color: #ff3366; /* Warna teks tautan */
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #ff6699; /* Warna teks tautan saat dihover */
        }
    </style>
</head>
<body>
    <h1>Daftar Nama Siswa</h1>
    <br>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NIK</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>No KK</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($siswa as $sw): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $sw["Nama_siswa"]; ?></td>
                <td><?= $sw["nik"]; ?></td>
                <td><?= $sw["umur"]; ?></td>
                <td><?= $sw["jenis_kelamin"]; ?></td>
                <td><?= $sw["tempat_lahir"]; ?></td>
                <td><?= $sw["tanggal_lahir"]; ?></td>
                <td><?= $sw["agama"]; ?></td>
                <td><?= $sw["Alamat"]; ?></td>
                <td><?= $sw["no_kk"]; ?></td>
                <td><a href="edit.php?id=<?=$sw ["id"]; ?> "> Edit </a>|| <a href="deletedatasiswa.php?id=<?= $sw["id"]; ?>">Delete</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
     <div class="buttonhead">
  <div class="button-fixed">
    <ul>
                <a href="index_login.php" class="unique-button">keluar</a>
            </ul>  
    </div>
     <right> 
        <marquee scrolldelay="90"><h3 ></h3></marquee> 
    </right>
    </div>  
</div>
</body>
</html>
