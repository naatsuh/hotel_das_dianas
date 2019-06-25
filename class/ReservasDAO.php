<?php
require_once('Database.php');
require_once ('Reservas.php');

class ReservasDAO {

    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    public function findAll()
    {
        try {
            $query = $this->conn->prepare("SELECT * FROM reservas");
            $query->execute();
            $alunos = [];

            while($row = $query->fetch(PDO::FETCH_OBJ)) {
                $alunos[] = $row;
            }
            return $alunos;
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function find($id)
    {
        try {
            $query = $this->conn->prepare("SELECT * FROM reservas WHERE id = :id");
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
            $query = $this->conn->prepare("DELETE FROM reservas WHERE id = :id");
            $query->bindValue(":id", $id);
            $query->execute();
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function disable($id)
    {
        try {
            $query = $this->conn->prepare("UPDATE reservas SET status = 'inativo' 
            WHERE id = :id");
            $query->bindValue(":id", $id);
            $query->execute();
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }
    public function store(Reservas $reservas) {
        try {
            $query = $this->conn->prepare(
                "INSERT INTO usuario (preco_diaria, preco_total, entrada_data, saida_data, de_onde_vem,pra_onde_vai) 
                            VALUES (:preco_diaria, :preco_total, :entrada_data, :saida_data, :de_onde_vem, :pra_onde_vai)");

            $query->bindValue(':preco_diaria', $reservas->preco_diaria);
            $query->bindValue(':preco_total', $reservas->preco_total);
            $query->bindValue(':entrada_data', $reservas->entrada_data);
            $query->bindValue(':saida_data', $reservas->saida_data);
            $query->bindValue(':de_onde_vem', $reservas->de_onde_vem);
            $query->bindValue(':pra_onde_vai', $reservas->pra_onde_vai);

            $query->execute();

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }
}
?>