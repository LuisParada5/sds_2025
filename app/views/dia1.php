<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Día 1 - Semana de Sistemas 2025</title>
   <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <header class="hero">
        <div class="hero-content">
            <h1>Día 1 - Semana de Sistemas 2025</h1>
            <a href="/" class="btn">Volver al Inicio</a>
        </div>
    </header>

    <main class="main-container">
        <h2>Actividades del Día 1</h2>

        <?php foreach ($actividades as $actividad): ?>
            <section class="actividad-card">
                <h3><?= htmlspecialchars($actividad['titulo']) ?></h3>
                <div><?= $actividad['descripcion'] ?></div>

                <?php if (!empty($actividad['fotos'])): ?>
                    <div class="galeria-fotos">
                        <?php foreach ($actividad['fotos'] as $foto): ?>
                            <img src="<?= $foto ?>" alt="Foto" loading="lazy" />
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($actividad['videos'])): ?>
                    <div class="galeria-videos">
                        <?php foreach ($actividad['videos'] as $video): ?>
                            <iframe width="560" height="315" src="<?= $video ?>" frameborder="0" allowfullscreen></iframe>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>
        <?php endforeach; ?>
    </main>

    <footer class="footer">
        <p>&copy; 2025 Semana de Sistemas</p>
    </footer>
</body>
</html>
