<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            text-align: center;
            color: white;
        }
        .container {
            background-color: #800000; /* Color bordó estilo poncho salteño */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            text: white;
        }
        .btn {
            padding: 15px 30px;
            background-color: #800000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-transform: uppercase;
        }
        .btn:hover {
            background-color: #a00000; /* Un tono más claro al pasar el cursor */
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
        h1 {
            
        }
    </style>
</head>
<body>



    <div class="container">
    <h1>Configuración</h1>  
        <a href='alta_producto.php'>Alta de producto</a>
        <a href='alta_lista.php'>Alta de Lista</a>
        <a href='index.php'>Atrás</a>
    </div>

</body>
</html>