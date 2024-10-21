<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "c2611613";  // Cambia por tu usuario de la base de datos
$password = "SI42dakize";  // Cambia por tu contraseña
$dbname = "c2611613_devjmr";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Si se ha enviado el formulario, insertar los datos en la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $desc_product = $_POST["desc_product"];
    $cost_product = $_POST["cost_product"];
    
    // Validar que los campos no estén vacíos
    if (!empty($desc_product) && !empty($cost_product)) {
        $sql = "INSERT INTO product (desc_product, cost_product) VALUES ('$desc_product', '$cost_product')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Producto agregado exitosamente.</p>";
        } else {
            echo "<p>Error al agregar el producto: " . $conn->error . "</p>";
        }
    } else {
        echo "<p>Por favor, complete todos los campos.</p>";
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #800000; /* Bordó estilo poncho salteño */
            text-align: center;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #800000;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #800000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
            width: 100%;
        }
        .btn:hover {
            background-color: #a00000;
        }
        a {
            display: inline-block;
            background-color: #ffffff; /* Dorado claro */
            color: #800000; /* Bordó para el texto */
            text-decoration: none;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        a:hover {
            background-color: #ffff11; /* Cambia el color de fondo al pasar el cursor */
            color: #ffd700; /* Cambia el texto a dorado */
        }
    </style>
</head>
<body>

    <h1>Alta de Productos</h1>

    <div class="form-container">
        <form action="alta_producto.php" method="POST">
            <label for="desc_product">Descripción del Producto:</label>
            <input type="text" id="desc_product" name="desc_product" placeholder="Ej: Televisor 42 pulgadas" required>

            <label for="cost_product">Costo del Producto:</label>
            <input type="number" id="cost_product" name="cost_product" placeholder="Ej: 25000" step="0.01" required>

            <button type="submit" class="btn">Cargar Producto</button>
            <a href="cotizador.php">Menú Principal</a>
        </form>
    </div>

</body>
</html>
