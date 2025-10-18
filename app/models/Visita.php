<?php
require_once __DIR__ . '/../../bdconexion/database.php';

class Visita {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function guardar($nombre, $correo, $comentario) {
        try {
            $sql = "INSERT INTO visita (nombre, correo, comentario) 
                    VALUES (:nombre, :correo, :comentario)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':comentario', $comentario);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al guardar visita: " . $e->getMessage();
            return false;
        }
    }

    public function getAll() {
        try {
            $stmt = $this->conn->query("SELECT * FROM visita ORDER BY id DESC");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener visitas: " . $e->getMessage();
            return [];
        }
    }
}
?>