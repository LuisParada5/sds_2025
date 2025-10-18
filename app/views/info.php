<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Información - Semana de Sistemas 2025</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>

    <main class="info-container">
        <h2>Mi Información Personal</h2>
        <div class="info-card">
            <img src="<?= $miInfo['foto']; ?>" alt="Foto personal" class="foto-personal">

            <div class="info-detalles">
                <h3><?= $miInfo['nombre']; ?></h3>
                <p><strong>Carrera:</strong> <?= $miInfo['carrera']; ?></p>
                <p><strong>Universidad:</strong> <?= $miInfo['universidad']; ?></p>
                <p><strong>Año:</strong> <?= $miInfo['anio']; ?></p>
                <p><?= $miInfo['descripcion']; ?></p>

                <h4>Contacto</h4>
                <ul>
                    <li><strong>Correo:</strong> <?= $miInfo['contacto']['correo']; ?></li>
                    <li><a href="<?= $miInfo['contacto']['github']; ?>" target="_blank">GitHub</a></li>
                    <li><a href="<?= $miInfo['contacto']['linkedin']; ?>" target="_blank">LinkedIn</a></li>
                </ul>
            </div>
        </div>

        <a href="/" class="btn-volver">⬅ Volver al Inicio</a>
        
    </main>

</body>
</html>



