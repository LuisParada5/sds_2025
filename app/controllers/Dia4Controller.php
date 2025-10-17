<?php
class Dia4Controller {
    public function index() {
        $actividades = [
            [
                'titulo' => 'Feria de Logros',
                'descripcion' => 'Exposición de los proyectos más destacados de Ingeniería en Sistemas Informáticos. Los estudiantes presentan sistemas informáticos completamente creados por ellos, desde videojuegos programados a código hasta aplicaciones funcionales que demuestran su creatividad y dominio técnico. Cada proyecto refleja horas de trabajo, ingenio y habilidades en diseño y programación, mostrando cómo la teoría se convierte en soluciones reales y prácticas. Esta feria es una vitrina del talento y la innovación de nuestros futuros profesionales.',
                'fotos' => [
                    '/img/dia4/feria1.jpg',
                    '/img/dia4/feria2.jpg',
                    '/img/dia4/feria3.jpg',
                    '/img/dia4/feria4.jpg'
                ],
                'videos' => [
                    '/img/dia4/feria.mp4'
                ]
            ],
            [
                'titulo' => 'Pupuseada',
                'descripcion' => 'Un divertido concurso en el que varios participantes compiten por comer la mayor cantidad de pupusas. Entre risas, emoción y aplausos, el ingeniero Guandique logra destacarse al devorar 16 pupusas, coronándose campeón. Esta actividad se vivió con mucha energía, compañerismo y alegría, reflejando el espíritu festivo de la Semana de Sistemas 2025.',
                'fotos' => [
                    '/img/dia4/pupuseada1.jpg',
                    '/img/dia4/pupuseada2.jpg',
                    '/img/dia4/pupuseada3.jpg'
                ],
                'videos' => [
                    '/img/dia4/pupuseada.mp4'
                ]
            ]
        ];

        require_once __DIR__ . '/../views/dia4.php';
    }
}
