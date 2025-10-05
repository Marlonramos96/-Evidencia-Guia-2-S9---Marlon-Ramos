<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 40px;
        }
        .formulario {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .formulario h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .campo {
            margin-bottom: 15px;
        }
        .campo label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .campo input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .boton {
            text-align: center;
        }
        .boton input {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .boton input:hover {
            background-color: #0056b3;
        }
        .mensaje {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <header>
        <h1>Gestión Comercial - Agregar Clientes</h1>
        <nav>
            <a href="index.html">Inicio</a> |
            <a href="ver_clientes.php">Ver Clientes</a>
        </nav>
        <hr>
    </header>

    <div class="formulario">
        <h2>Agregar Cliente</h2>
        <form method="POST">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>
            </div>
            <div class="campo">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" required>
            </div>
            <div class="campo">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" required>
            </div>
            <div class="campo">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" required>
            </div>
            <div class="boton">
                <input type="submit" name="guardar" value="Guardar Cliente">
            </div>
        </form>

        <?php
        if (isset($_POST['guardar'])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];

            $sql = "INSERT INTO cliente (nombre, apellido, direccion, telefono)
                    VALUES ('$nombre', '$apellido', '$direccion', '$telefono')";

            if (mysqli_query($conexion, $sql)) {
                echo "<div class='mensaje'>Cliente agregado exitosamente.</div>";
            } else {
                echo "<div class='mensaje' style='color:red;'>Error: " . mysqli_error($conexion) . "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
