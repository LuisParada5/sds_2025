<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deja tu Visita al Blog</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .btn-primary {
    background-color: #007BFF; 
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    display: inline-block;
}

.btn-primary:hover {
    background-color: #0056b3; 
}
        
        h1 {
            color: #4a4e69;
            margin-bottom: 20px;
        }
        form {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #526d82;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; 
        }
        textarea {
            resize: vertical;
        }
        button[type="submit"] {
            background-color: #4a4e69;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #7b9acc;
        }
        .mensaje {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            font-weight: bold;
            text-align: center;
        }
        .mensaje-exito {
            background-color: #e6ffe6;
            color: green;
            border: 1px solid green;
        }
        .mensaje-error {
            background-color: #ffe6e6;
            color: red;
            border: 1px solid red;
        }
    </style>
</head>
<body>
     <header class="hero">
        <div class="hero-content">
            <h1>Semana de Sistemas 2025</h1>
           
            <a href="/" class="btn-primary">Regresar a Inicio</a>
        </div>
    </header>
    <h1>Deja tu visita al blog</h1>

    <?php 
    
    if (!empty($mensaje)) : 
        $es_exito = ($mensaje === "Registro de visita al blog realizado con éxito.");
        $clase_mensaje = $es_exito ? "mensaje-exito" : "mensaje-error";
    ?>
        <p class="mensaje <?php echo $clase_mensaje; ?>"><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <form action="/visita/guardar" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" required>

        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" rows="4" required></textarea>

        <button type="submit">Enviar Visita</button>
    </form>
</body>
</html>