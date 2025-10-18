<?php

class Route {
    private static $routes = [
        'GET' => [],
        'POST' => []
    ];

    /**
     * Registra una rutia GET
     */
    public static function get($path, $callback) {
        self::$routes['GET'][$path] = $callback;
    }

    /**
     * Regesstra una ruta POST
     */
    public static function post($path, $callback) {
        self::$routes['POST'][$path] = $callback;
    }


    public static function dispatch() {
       
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        if ($uri !== '/' && substr($uri, -1) === '/') {
            $uri = rtrim($uri, '/');
        }

      
        $callback = self::$routes[$method][$uri] ?? null;

        if ($callback) {
           
            if (is_array($callback)) {
                [$controller, $methodName] = $callback;

                if (method_exists($controller, $methodName)) {
                    call_user_func([$controller, $methodName]);
                } else {
                    self::error("Método '$methodName' no encontrado en el controlador.");
                }
            }
            
            elseif (is_callable($callback)) {
                call_user_func($callback);
            }
        } else {
            self::error("Ruta no encontrada: <code>$uri</code>");
        }
    }

    /**
     * Muestra error 404 
     */
    private static function error($msg) {
        http_response_code(404);
        echo "
        <div style='
            font-family:Segoe UI,Roboto,sans-serif;
            color:#ccc;
            text-align:center;
            padding-top:80px;
        '>
            <h1 style='color:#ff6b6b;'>404</h1>
            <p>$msg</p>
            <a href='/' style='color:#37e2ff;text-decoration:none;'>Volver al inicio</a>
        </div>";
    }
}
