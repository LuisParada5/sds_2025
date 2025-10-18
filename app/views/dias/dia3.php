<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Día 6 - Semana de Sistemas 2025</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header class="hero">
        <div class="hero-content">
            <h1>Día 3 - Semana de Sistemas 2025</h1>
            <a href="/" class="btn">Volver al Inicio</a>
        </div>
    </header>

    <main class="main-container">
        <h2>Actividades del Día 3</h2>

        <div class="grid-actividades">
            <?php foreach ($actividades as $actividad): ?>
                <section class="actividad-card">
                    <h3><?= htmlspecialchars($actividad['titulo']) ?></h3>
                    <p><?= $actividad['descripcion'] ?></p>

                    <?php if (!empty($actividad['fotos'])): ?>
                        <div class="galeria-fotos">
                            <?php foreach ($actividad['fotos'] as $foto): ?>
                                <img src="<?= $foto ?>" alt="Foto de <?= htmlspecialchars($actividad['titulo']) ?>" loading="lazy" />
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </section>
            <?php endforeach; ?>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2025 Semana de Sistemas</p>
    </footer>
</body>
</html>
