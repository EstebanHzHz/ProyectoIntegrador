<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="estiloini.css">
</head>
<body>
    <center>
  <h2>Iniciar sesión</h2>
  
  <form action="procesar_login.php" method="POST">
    <label for="username">Nombre de usuario:</label>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br><br>
    <header>
        <nav>
            <ul>
                <li><a href="#">olvidaste tu contraseña?</a></li>
            </ul>
        </nav>
      </header>
    <input type="submit" value="Iniciar sesión">
  </form>
</center>
</body>
</html>
