<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda TK AL-BAROKAH</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to bottom, #FFD6E8, #FF6F91);
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      height: 100vh;
      margin: 0;
      padding: 20px;
    }

    .welcome-message {
      font-size: 36px;
      font-weight: 700;
      margin-bottom: 30px;
      animation: bounce 2s infinite alternate;
      color: #D72638;
    }

    @keyframes bounce {
      from {
        transform: translateY(0);
      }
      to {
        transform: translateY(-15px);
      }
    }

    h1 {
      font-size: 28px;
      margin: 10px 0;
      color: #66101F;
    }

    h2 {
      font-size: 20px;
      font-style: italic;
      margin: 10px 0 30px;
      color: #444;
      max-width: 700px;
    }

    .misi {
      text-align: left;
      font-size: 18px;
      margin-top: 10px;
      color: #555;
      max-width: 700px;
    }

    .button-container {
      margin-top: 40px;
    }

    .login-button, .register-button {
      padding: 12px 30px;
      font-size: 18px;
      font-weight: bold;
      margin: 10px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s, transform 0.2s;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .login-button {
      background-color: #FF7F50;
      color: #fff;
    }

    .register-button {
      background-color: #FF416C;
      color: #fff;
    }

    .login-button:hover, .register-button:hover {
      transform: scale(1.05);
      background-color: #e63950;
    }
  </style>
</head>
<body>

  <div class="welcome-message">SELAMAT DATANG DI TK AL-BAROKAH!</div>

  <h1><b>VISI:</b></h1>
  <h2>"TERWUJUDNYA PESERTA DIDIK YANG BERAKHLAK MULIA, CERDAS, KREATIF, DAN BERTANGGUNG JAWAB"</h2>

  <h1><b>MISI:</b></h1>
  <div class="misi">
    <ol>
      <li>Menjadikan anak berakhlak dan berkepribadian baik</li>
      <li>Membentuk karakter serta kemandirian anak</li>
      <li>Mempersiapkan anak didik untuk ke jenjang pendidikan selanjutnya</li>
    </ol>
  </div>

  <div class="button-container">
    <button class="login-button" onclick="location.href='tampilanlogin.php'">Login</button>
    <button class="register-button" onclick="location.href='tampilanregister.php'">Register</button>
  </div>

</body>
</html>