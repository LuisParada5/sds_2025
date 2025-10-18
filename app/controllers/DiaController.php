<?php

class DiaController {

    // Método principal que muestra el conetiido según el núnero del día
    public function mostrar($dia) {
        $actividades = $this->obtenerActividades($dia);

        if (!$actividades) {
            http_response_code(404);
            echo "<h2 style='text-align:center;margin-top:40px;'>❌ Día no encontrado</h2>";
            return;
        }

        // Cargar la vista correspondienñe
        include __DIR__ . "/../views/dias/dia{$dia}.php";
    }

    // Dactilividades de cada día
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
            'titulo' => 'Suspensión de Actividades por Lluvias',
            'descripcion' => 'Debido a las fuertes lluvias registradas durante el día, se suspendieron todas las actividades programadas, tanto en modalidad presencial como virtual. 
            La medida fue tomada con el fin de garantizar la seguridad de los estudiantes, docentes y personal administrativo. 
            Se emitieron comunicados oficiales informando la suspensión y las nuevas fechas fueron notificadas  a través de los canales institucionales.',
            'fotos' => [
                '/img/dia3/comunicado1.jpg',
                '/img/dia3/comunicado2.jpg',
                '/img/dia3/comunicado3.jpg',
                '/img/dia3/comunicado4.jpg'
            ]
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
            'titulo' => 'Bingo',
            'descripcion' => 'Se llevó a cabo una actividad de <strong>Bingo</strong> utilizando un sistema desarrollado especialmente para el evento. La dinámica consistía en que los participantes se conectaban a la plataforma, elegían su cartón de juego y esperaban a que se anunciaran los números. El cartón seguía el diseño clásico, organizado en las columnas B-I-N-G-O. A medida que el administrador iba cantando los números generados de forma aleatoria, los usuarios debían marcarlos en sus cartones. El juego se desarrolló a lo largo de varias sesiones, y el primer jugador que lograba llenar la totalidad de su cartón ganaba la partida y era acreedor a un premio. Fue una actividad muy popular y con gran participación.',
            'fotos' => [
                '/img/dia5/bingo1.jpg',
                '/img/dia5/bingo2.jpg',
                '/img/dia5/bingo3.jpg',
                '/img/dia5/bingo4.jpg'
            ]
        ],
        [
            'titulo' => 'Entrega de Diplomas a los Participantes de la Feria de Logros',
            'descripcion' => 'Esta actividad tuvo como objetivo reconocer el esfuerzo y la dedicación de los estudiantes que presentaron sus proyectos. La dinámica consistió en hacer pasar a cada grupo de forma organizada para recibir su reconocimiento. Cada equipo que expuso su proyecto fue recompensado con un diploma, y además, a cada participante individual se le entregó una medalla, simbolizando su contribución y logro en la feria.',
            'fotos' => [
                '/img/dia5/diplomas1.jpg',
                '/img/dia5/diplomas2.jpg',
                '/img/dia5/diplomas3.jpg',
                '/img/dia5/diplomas4.jpg'
            ]
        ],
        [
            'titulo' => 'Clash Royale',
            'descripcion' => 'Se llevó a cabo un torneo del popular videojuego móvil <strong>Clash Royale</strong>, con una alta participación de estudiantes. La actividad se basó en una serie de rondas eliminatorias, donde los estudiantes compitieron en batallas estratégicas que definían quién avanzaba en el torneo. El objetivo era simple: superar a los demás participantes en las distintas fases. La competencia se mantuvo intensa hasta que quedaron definidos los tres últimos lugares.',
            'fotos' => [
                '/img/dia5/clash1.jpg',
                '/img/dia5/clash2.jpg'
            ]
        ]
    ];


            default:
                return null;
        }
    }
}
