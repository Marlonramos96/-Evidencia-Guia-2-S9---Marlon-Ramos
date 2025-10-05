<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            padding: 40px;
        }
        .contenedor {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .mensaje {
            text-align: center;
            font-style: italic;
            color: gray;
        }
    </style>
</head>
<body>
    <header>
        <h1>Agregar Clientes</h1>
        <nav>
            <a href="index.html">Inicio</a> |
            <a href="agregar_cliente.html">Agregar Cliente</a>
        </nav>
        <hr>
    </header>

    <div class="contenedor">
        <h2>Listado de Clientes Registrados</h2>

        <?php
        $resultado = mysqli_query($conexion, "SELECT * FROM cliente");

        if (mysqli_num_rows($resultado) > 0) {
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                    </tr>";
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>
                        <td>{$fila['id_cliente']}</td>
                        <td>{$fila['nombre']}</td>
                        <td>{$fila['apellido']}</td>
                        <td>{$fila['direccion']}</td>
                        <td>{$fila['telefono']}</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='mensaje'>No hay clientes registrados aún.</p>";
        }
        ?>
    </div>
</body>
</html>
