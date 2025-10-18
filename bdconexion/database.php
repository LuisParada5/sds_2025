<?php
class Database {
    private $host = 'db';
    private $db = 'blog_sds2025';    
     private $user = 'root';
    private $pass = ''; 
    private $conn;

    public function getConnection() {
        if ($this->conn === null) {
            try {
                $this->conn = new PDO(
                    "mysql:host={$this->host};dbname={$this->db};charset=utf8",
                    $this->user,
                    $this->pass
                );
              
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                
                
                
            } catch (PDOException $e) {
               
                die("Error de conexión: " . $e->getMessage());
            }
        }
        return $this->conn;
    }
}
?>