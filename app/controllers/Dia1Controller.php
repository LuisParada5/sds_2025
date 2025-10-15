<?php
class Dia1Controller {
    public function index() {
        $actividades = [
            [
                'titulo' => 'Palabras de Apertura',
                'descripcion' => 'Inauguración con participación de la Vicedecana, Ing. Jose Luis Castro, Ing. Diego Herrera y Bachiller Karla. Palabras de bienvenida.',
                'fotos' => [
                    '/img/dia1/apertura1.jpg',
                    '/img/dia1/apertura2.jpg'
                ],
                'videos' => []
            ],
            [
                'titulo' => 'Ponencia: ABC del Bitcoin',
                'descripcion' => 'Por Luis Contreras. Se mencionó la filosofía de la Escuela de Economía Austríaca, carteras de bitcoin y Blin Wallet.',
                'fotos' => [
                    '/img/dia1/bitcoin.jpg'
                ],
                'videos' => []
            ],
            [
                'titulo' => 'Ponencia: IA Generativa',
                'descripcion' => 'Por Rodrigo Pineda. Frases: "El conocimiento es poder". IA recomendada: N8n IA, Clause IA, modelo Cascade. Enfatizó en la calidad de los prompts.',
                'fotos' => [
                    '/img/dia1/ia.jpg'
                ],
                'videos' => []
            ],
            [
                'titulo' => 'Eventos de la Tarde - Hackatón',
                'descripcion' => '
                    <ul>
                        <li>Sitio de citas para perros (Luisito y su pandilla)</li>
                        <li>Congreso académico (Los Magníficos)</li>
                        <li>Bingo (Los Web Teams)</li>
                        <li>Veterinaria consola (Luis Galeas)</li>
                        <li>Sisgrade (Franquitos Jr)</li>
                    </ul>
                ',
                'fotos' => [
                    '/img/dia1/hackaton.jpg'
                ],
                'videos' => []
            ]
        ];
        
        require_once __DIR__ . '/../views/dia1.php';
    }
}
