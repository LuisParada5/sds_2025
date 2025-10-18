<?php

class VisitaController {
    public function index() {
        // Muestra el formulario de visitas
        require_once __DIR__ . '/../views/visita/index.php';
    }

    public function guardar() {
        // Ejemplo de guardado (solo muestra los datos recibidos)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $email = $_POST['email'] ?? '';
            $comentario = $_POST['comentario'] ?? '';

            echo "<h2>Visita registrada</h2>";
            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Comentario:</strong> $comentario</p>";
        } else {
            echo "<p>Error: no se recibieron datos.</p>";
        }
    }
}
?>
