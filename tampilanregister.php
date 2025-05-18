<?php
require 'koneksilogin.php';
if(isset($_POST["submit"])){
    if (login($_POST)>0) {
        echo "
        <script>
        alert('login berhasil');
        document.location.href = 'index_siswa.php';
        </script>";
    }else{
        mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
 body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #f9e4b7;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .register-container {
            background-color: #fff;
            border: 2px solid #f38d80;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            text-align: center;
            padding: 20px;
        }

        .register-header {
            background-color: #f38d80;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .register-header h2 {
            margin: 0;
            font-size: 24px;
        }

        .form-group {
            padding: 10px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #f38d80;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .form-group button {
            background-color: #ff6f61;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
<form action="koneksilogin.php" method="post">
<div class="register-container">
    <div class="register-header">
        <h2>Registrasi</h2>
    </div>
    
    <div  class="form-group">

        <label for="username">usernama:</label>
        <input type="text" name="username" id="username" required>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div class="form-group">
        <button type="submit">Daftar</button>
    </div>
</div>
</form>
</body>
</html>
