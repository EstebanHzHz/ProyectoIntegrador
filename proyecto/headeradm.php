<!DOCTYPE html>
<html>
<head>
    <title>Panel de Administrador</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
        }

        .navbar {
            background-color: #444;
            padding: 10px;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .navbar li {
            display: inline;
        }

        .navbar li a {
            color: #fff;
            display: inline-block;
            padding: 10px;
            text-decoration: none;
        }

        .navbar li a:hover {
            background-color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Panel de Administrador</h1>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Usuarios</a></li>
            <li><a href="#">Configuración</a></li>
            <li><a href="#">Salir</a></li>
        </ul>
    </div>
</body>
</html>
