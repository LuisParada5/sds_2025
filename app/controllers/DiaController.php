<?php

class DiaController {

    // Método principal que muestra el contenido según el número del día
    public function mostrar($dia) {
        $actividades = $this->obtenerActividades($dia);

        if (!$actividades) {
            http_response_code(404);
            echo "<h2 style='text-align:center;margin-top:40px;'>❌ Día no encontrado</h2>";
            return;
        }

        // Cargar la vista correspondiente (ejemplo: /views/dias/dia1.php)
        include __DIR__ . "/../views/dias/dia{$dia}.php";
    }

    // Devuelve las actividades de cada día
    private function obtenerActividades($dia) {
        switch ($dia) {


            case 1:
                return [
                    [
                        'titulo' => 'Palabras de Apertura',
                        'descripcion' => 'Inauguración con participación de la Vicedecana, Ing. José Luis Castro, Ing. Diego Herrera y Bachiller Karla. Palabras de bienvenida.',
                        'fotos' => [
                            '/img/dia1/apertura1.jpg',
                            '/img/dia1/apertura2.jpg'
                        ],
                        'videos' => []
                    ],
                    [
                        'titulo' => 'Ponencia: ABC del Bitcoin',
                        'descripcion' => 'Por MSc. Luis Contreras. Se abordó la filosofía de la Escuela de Economía Austríaca, las carteras de bitcoin y la Blin Wallet.',
                        'fotos' => ['/img/dia1/bitcoin.jpg'],
                        'videos' => []
                    ],
                    [
                        'titulo' => 'Ponencia: Inteligencia Artificial Generativa',
                        'descripcion' => 'Por MSc. Rodrigo Pineda. Se destacaron herramientas como N8n, Claude y Cascade, y se enfatizó la importancia de crear buenos prompts.',
                        'fotos' => ['/img/dia1/ia.jpg'],
                        'videos' => []
                    ],
                    [
                        'titulo' => 'Eventos de la Tarde - Hackatón',
                        'descripcion' => '
                            <ul>
                                <li>Sitio de citas para perros – “Luisito y su Pandilla”</li>
                                <li>Congreso académico – “Los Magníficos”</li>
                                <li>Bingo – “Los Web Teams”</li>
                                <li>Veterinaria consola – “Luis Galeas”</li>
                                <li>Sisgrade – “Franquitos Jr”</li>
                            </ul>
                        ',
                        'fotos' => ['/img/dia1/hackaton.jpg'],
                        'videos' => []
                    ]
                ];


            case 2:
                return [
                    [
                        'titulo' => 'Ponencia #1: Toma de decisiones estratégicas basadas en datos',
                        'descripcion' => 'Por MSc. Enrique José Cortez. Demostración práctica del uso de Excel y Power BI combinados con IA para análisis de datos empresariales.',
                        'fotos' => [
                            '/img/dia2/ponencia1_1.jpg',
                            '/img/dia2/ponencia1_2.jpg',
                            '/img/dia2/ponencia1_3.jpg',
                            '/img/dia2/ponencia1_4.jpg'
                        ],
                        'videos' => []
                    ],
                    [
                        'titulo' => 'Ponencia #2: Construyendo un CRUD en minutos con Laravel y Filament',
                        'descripcion' => 'Por Ing. Gabriel Alegría. Explicó cómo crear sistemas CRUD rápidamente usando Laravel y el framework Filament. Se destacó la importancia de la documentación.',
                        'fotos' => [
                            '/img/dia2/ponencia2_1.png',
                            '/img/dia2/ponencia2_2.png',
                            '/img/dia2/ponencia2_3.png',
                            '/img/dia2/ponencia2_4.png'
                        ],
                        'videos' => []
                    ],
                    [
                        'titulo' => 'Ponencia #3: IA Multimodal – Creando el futuro visual e inteligente con n8n',
                        'descripcion' => 'Por José Salmerón. Se usó n8n para crear un chatbot funcional. Se mencionaron IA como Claude, Blackbox, Copilot y Sora. Énfasis en ingeniería de prompts.',
                        'fotos' => [
                            '/img/dia2/ponencia4_1.png',
                            '/img/dia2/ponencia4_2.jpg',
                            '/img/dia2/ponencia4_3.png',
                            '/img/dia2/ponencia4_4.jpg'
                        ],
                        'videos' => []
                    ]
                ];


            case 3:
                return [
                    [
                        'titulo' => 'Torneo de Fútbol 11',
                        'descripcion' => 'Competencia amistosa entre equipos de la carrera. Se buscaba promover la unión y el espíritu deportivo. El evento tuvo gran participación estudiantil.',
                        'fotos' => [
                            '/img/dia3/futbol1.jpg',
                            '/img/dia3/futbol2.jpg'
                        ],
                        'videos' => []
                    ]
                ];


            case 4:
                return [
                    [
                        'titulo' => 'Feria de Logros',
                        'descripcion' => 'Exposición de los proyectos más destacados de Ingeniería en Sistemas Informáticos. Los estudiantes presentan sistemas informáticos completamente creados por ellos, desde videojuegos programados a código hasta aplicaciones funcionales que demuestran su creatividad y dominio técnico. Cada proyecto refleja horas de trabajo, ingenio y habilidades en diseño y programación, mostrando cómo la teoría se convierte en soluciones reales y prácticas. Esta feria es una vitrina del talento y la innovación de nuestros futuros profesionales.',
                        'fotos' => [
                            '/img/dia4/feria1.jpg',
                            '/img/dia4/feria2.jpg',
                            '/img/dia4/feria3.jpg',
                            '/img/dia4/feria4.jpg'
                        ],
                        'videos' => ['/img/dia4/feria.mp4']
                    ],
                    [
                        'titulo' => 'Concurso de Pupusas',
                        'descripcion' => 'Un divertido concurso en el que varios participantes compiten por comer la mayor cantidad de pupusas. Entre risas, emoción y aplausos, el ingeniero Guandique logra destacarse al devorar 16 pupusas, coronándose campeón. Esta actividad se vivió con mucha energía, compañerismo y alegría, reflejando el espíritu festivo de la Semana de Sistemas 2025.',
                        'fotos' => [
                            '/img/dia4/pupuseada1.jpg',
                            '/img/dia4/pupuseada2.jpg',
                            '/img/dia4/pupuseada3.jpg'
                        ],
                        'videos' => ['/img/dia4/pupuseada.mp4']
                    ]
                ];


            case 5:
                return [
                    [
                        'titulo' => 'Clausura y Premiaciones',
                        'descripcion' => 'Cierre oficial de la Semana de Sistemas 2025 con reconocimientos a los proyectos y equipos más destacados. Palabras finales de los docentes.',
                        'fotos' => [
                            '/img/dia5/clausura1.jpg',
                            '/img/dia5/clausura2.jpg'
                        ],
                        'videos' => []
                    ]
                ];

            default:
                return null;
        }
    }
}
