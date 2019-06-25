<?php
require_once('Database.php');
require_once ('Quartos.php');

class QuartosDAO {

    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    public function findAll()
    {
        try {
            $query = $this->conn->prepare("SELECT * FROM quartos_disponibilidades");
            $query->execute();
            $quartos = [];

            while($row = $query->fetch(PDO::FETCH_OBJ)) {
                $quartos[] = $row;
            }
            return $quartos;
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function find($id)
    {
        try {
            $query = $this->conn->prepare("SELECT * FROM quartos_disponibilidades WHERE id = :id");
            $query->bindValue(":id", $id);
            $query->execute();

            return $query->fetch(PDO::FETCH_OBJ);

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function remove($id)
    {
        try {
            $query = $this->conn->prepare("DELETE FROM quartos_disponibilidades WHERE id = :id");
            $query->bindValue(":id", $id);
            $query->execute();
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }
    public function update(Quartos $quartos) {
        try {
            $query = $this->conn->prepare(
                "UPDATE trabalho SET 
                    aluno_id = :aluno_id,
                    tema = :tema,
                    data = :data
                WHERE id = :id");

            $query->bindValue(':id', $quartos->id);
            $query->bindValue(':aluno_id', $quartos->aluno_id);
            $query->bindValue(':tema', $quartos->tema);
            $query->bindValue(':data', $quartos->data);
            $query->execute();

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

}
?>