<?php
class Dia2Controller {
    public function index() {
        $actividades = [
            [
                'titulo' => 'Ponencia #1: Toma de decisiones estratégicas basadas en datos',
                'descripcion' => 'Por Enriquez José Cortez. En esta ponencia se mostró cómo usar herramientas como Excel y Power BI con apoyo de IA para agilizar el análisis de datos. Me pareció muy útil todas las técnicas mencionadas.',
                'fotos' => [
                    '/img/dia2/ponencia1_1.jpg',
                    '/img/dia2/ponencia1_2.jpg',
                    '/img/dia2/ponencia1_3.jpg',
                     '/img/dia2/ponencia1_4.jpg'
                    
                ]
            ],
            [
                'titulo' => 'Ponencia #2: Construyendo un CRUD en minutos con Laravel y Filament',
                'descripcion' => 'Por Ing. Gabriel Alegría. Explicó cómo desarrollar sistemas CRUD rápidamente usando PHP, Laravel y Filament. Fue muy práctico y me permitió ver cómo automatizar interfaces.',
                'fotos' => [
                    '/img/dia2/ponencia2_1.png',
                    '/img/dia2/ponencia2_2.png',
                    '/img/dia2/ponencia2_3.png',
                    '/img/dia2/ponencia2_4.png'
                ],
                'videos' => []
            ],
            [
               'titulo' => 'Ponencia #4: IA Multimodal – Creando el futuro visual e inteligente con n8n',
'descripcion' => 'Por José Salmeron. Durante la ponencia, utilizó n8n para crear un chatbot funcional, mientras que las demás IA (Claude, Blackbox, GitHub Copilot, Claude Code, Sora IA) se mencionaron como herramientas de apoyo. Se enfatizó la importancia de la ingeniería de prompts para obtener resultados precisos y eficientes.',
                'fotos' => [
                    '/img/dia2/ponencia4_1.png',
                    '/img/dia2/ponencia4_2.jpg',
                    '/img/dia2/ponencia4_3.png',
                    '/img/dia2/ponencia4_4.jpg'
                ],
                'videos' => []
            ]
        ];

        require_once __DIR__ . '/../views/dia2.php';
    }
}
