<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <style>
    /* Contoh penggunaan CSS untuk styling div */
  

   .fixed-header {
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      border: none;
      border-radius: 10px;
      margin: 40px auto;
      width: 98%;
      text-align: center;
      padding: 3px 0;
      background-color: #E6A4B4;
      color: #000000;

    }
   

    .content {
      width: 100%;
      margin: 0 auto;
      text-align: right;
      margin-top: 10px;
      line-height: 1.0;
    }
    
    /* Mengubah font dan warna font pada seluruh teks di body */
    body {
      font-family: 'Comic Sans MS', cursive, sans-serif;
       background-color: #F3D7CA;
      margin: 0;
      padding: 0;
    }

    
    .custom-text {
      font-family: 'segoe ui', serif; 
      color: #ffffff; 
    }
  .fixed-footer {
      
      bottom: 0;
      width: 98%;
      border: none;
      border-radius: 10px;
      background-color: #ff66b2;
      color: #000000;
      text-align: center;
      padding: 5px 0;
      margin-bottom: 5px;
    }

      .contact-info {
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-wrap: wrap;
      gap: 20px;
    }
 .section {
      flex: 1;
      max-width: 300px;
    }

    .section-title {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .contact-info p {
      margin: 0;
    }

    .copyright {
      font-size: 14px;
    }
    .button-fixed{
      position: fixed;
      text-align: right;

    }
    .unique-button {
      display: inline-block;
      margin-top: -100px;
      padding: 8px 18px;
      font-size: 12px;
      text-align: center;
      text-decoration: none;
      border: none;
      border-radius: 22px;
      background-color: #fff;
      color: #ef6771;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s;

    }
  

    .container {
      max-width: 800px;
      background-color: #fff;
      padding: 20px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 29px;
      margin-top: 190px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: calc(100% - 12px);
      padding: 6px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: #ef6771;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #FF6F61;
    }
    .buttonhead{
      position: absolute;
      margin-top: 0;
    }
  </style>
</head>
<body>
  <div>
  <div class="fixed-header">
      <marquee><h1 >SELAMAT DATANG DI TK AL-BAROKAH</h1></marquee>
      
    </div>
  <div class="buttonhead">
  <div class="button-fixed">
    <ul>
                <a href="index_login.php" class="unique-button">Beranda</a>
                 <a href="tabelsiswa.php" class="unique-button">Daftar Nama Siswa</a>
            </ul>  
    </div>
  </div>
  <div>
       <right> 
        <marquee scrolldelay="90"><h3 ></h3></marquee> 
    </right>
    </div>  
</div>
<div class="container">
    <h1>FORMULIR PENDAFTARAN</h3>
    <form action="koneksidatasiswa.php" method="post">
    <form action="/proses_data" method="post">
    <label for="Nama_siswa">Nama siswa:</label><br>
    <input type="text" id=" " name="Nama_siswa" required><br>

     <label for="nik">nik:</label><br>
    <input type="text" id=" " name="nik" required><br>

     <label for="umur">umur:</label><br>
    <input type="text" id=" " name="umur" required><br>

    <label for="jenis_kelamin">jenis kelamin:</label><br>
    <input type="radio" id=" " name="jenis_kelamin" value="pria" required>
    <label for="pria">Pria</label>
    <input type="radio" id=" " name="jenis_kelamin" value="wanita" required>
    <label for="wanita">Wanita</label><br>

    <label for="tanggal_lahir">tanggal lahir:</label><br>
    <input type="text" id=" " name="tanggal_lahir" required><br>

    <label for="tempat_lahir">tempat lahir:</label><br>
    <input type="text" id=" " name="tempat_lahir" required><br>

     <label for="agama">agama:</label><br>
    <input type="radio" id=" " name="agama" value="islam" required>
    <label for="islam">islam</label>
    <input type="radio" id=" " name="agama" value="kristen" required>
    <label for="kristen">kristen</label><br>

    <label for="Alamat">Alamat :</label><br>
    <input type="text" id=" " name="Alamat"  required><br>

    <label for="no_kk">no kk:</label><br>
    <input type="text" id=" " name="no_kk" required><br>


    <input type="checkbox" id=" " name="persetujuan" required>
    <label for="persetujuan">Saya menyetujui syarat dan ketentuan.</label><br>


    <input type="submit" value="Kirim" onclick="showConfirmation()">

</form>
</form>
</div>
<center>
<footer class="fixed-footer">
        <div class="contact-info">
      <div class="section">
        <h3 class="section-title">Alamat</h3>
        <p>Jl.galang km.8 jati rejo</p>
        <p>Kota galang, deli serdang</p>
      </div>
      <div class="section">
        <h3 class="section-title">Kontak</h3>
        <p>No. Telp: 0821-6215-5696</p>
        <p>Email: tkalbarokah*5@.com</p>
      </div>
      <!-- Bagian-bagian informasi lainnya -->
    </div>
        <p>&copy; Hak Cipta © TK AL-BAROKAH</p>
    </footer>
  </center>
</body>
</html>