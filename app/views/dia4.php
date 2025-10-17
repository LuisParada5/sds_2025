<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Día 4 - Semana de Sistemas 2025</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header class="hero">
        <div class="hero-content">
            <h1>Día 4 - Semana de Sistemas 2025</h1>
            <a href="/" class="btn">Volver al Inicio</a>
        </div>
    </header>

    <main class="main-container">
        <h2>Actividades del Día 4</h2>

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

                    <?php if (!empty($actividad['videos'])): ?>
                        <div class="galeria-videos">
                            <?php foreach ($actividad['videos'] as $video): ?>
                                <video controls poster="<?= $actividad['fotos'][0] ?? '/img/default.jpg' ?>">
                                    <source src="<?= $video ?>" type="video/mp4">
                                    Tu navegador no soporta la reproducción de video.
                                </video>
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

<script>
// Lightbox para imágenes
const images = document.querySelectorAll('.galeria-fotos img');
const overlay = document.createElement('div');
overlay.classList.add('lightbox-overlay');
document.body.appendChild(overlay);

const overlayImage = document.createElement('img');
overlay.appendChild(overlayImage);

images.forEach(img => {
    img.addEventListener('click', () => {
        overlayImage.src = img.src;
        overlay.classList.add('active');
    });
});

overlay.addEventListener('click', e => {
    if (e.target !== overlayImage) {
        overlay.classList.remove('active');
    }
});
</script>
</body>
</html>

