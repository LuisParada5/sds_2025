<?php

require_once __DIR__ . '/../models/Visita.php';

class VisitaController {

    
    public function index($mensaje = '') { 
       
        
        require_once __DIR__ . '/../views/visita.php';
    }

    
    public function guardar() {
        $mensaje = ''; 
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            
            $email = $_POST['email'] ?? ''; 
            $comentario = $_POST['comentario'] ?? '';

            $visita = new Visita();
            $resultado = $visita->guardar($nombre, $email, $comentario);

            if ($resultado) {
                $mensaje = "Registro de visita al blog realizado con éxito.";
            } else {
                $mensaje = "Ocurrió un error al registrar la visita.";
            }
        }

        
        $this->index($mensaje);
    }
}
?>