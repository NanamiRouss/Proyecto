<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f7f7f7;
    }

    .login-container {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
      padding: 20px;
      background-color: #ffffff;
      border: 1px solid #e5e5e5;
      border-radius: 5px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-container .form-group {
      margin-bottom: 20px;
    }

    .login-container label {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="login-container">
      <h2>Iniciar sesión</h2>
      <form method="post" action="">
        <div class="form-group">
          <label for="usuario">Usuario:</label>
          <input type="text" class="form-control" id="usuario" placeholder="Ingresa tu usuario" name="usuario">
        </div>
        <div class="form-group">
          <label for="password">Contraseña:</label>
          <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" name="password">
        </div>
        <input name="btningresar" class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion">
      </form>
      <?php
      include('../modelos/basededatos.php');
      include('../controladores/login.controlador.php');
      ?>
    </div>

  </div>

</body>

</html>