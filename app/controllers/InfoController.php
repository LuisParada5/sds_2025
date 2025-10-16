<?php
class InfoController {
    public function index() {
        $miInfo = [
            'nombre' => 'Luis Parada',
            'carrera' => 'Ingeniería en Sistemas Informáticos',
            'universidad' => 'Universidad de El Salvador - Facultad Multidisciplinaria Oriental',
            'anio' => '2025',
            'descripcion' => 'Soy estudiante de Ingeniería en Sistemas Informáticos, apasionado por la tecnología, la programación y el aprendizaje continuo. Me gusta participar en eventos académicos como la Semana de Sistemas para fortalecer mis conocimientos y compartir experiencias con mis compañeros.',
            'foto' => '/img/mi_foto.jpg',
            'contacto' => [
                'correo' => 'luisparada0085@gmail.com',
                'github' => 'https://github.com/LuisParada5',
                'linkedin' => 'https://www.linkedin.com/in/luisparada5/'
            ]
        ];

        require_once __DIR__ . '/../views/info.php';
    }
}
