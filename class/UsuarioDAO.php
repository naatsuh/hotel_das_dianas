<?php
require_once('Database.php');
require_once('Usuario.php');

class UsuarioDAO {

    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    public function findAll()
    {
        try {
            $query = $this->conn->prepare("SELECT * FROM usuario");
            $query->execute();
            $usuarios = [];

            while($row = $query->fetch(PDO::FETCH_OBJ)) {
                $usuarios[] = $row;
            }
            return $usuarios;
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function login($email, $senha): string {
        $usuario = $this->findByEmail($email);
        if(password_verify($senha, $usuario->senha)) {
            return $usuario-> nome_completo;
        } else {
            throw new Exception();
        }
    }

    public function findByEmail($email)
    {
        try {
            $query = $this->conn->prepare("SELECT * FROM usuario WHERE email = :email");
            $query->bindValue(':email', $email);

            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    public function store(Usuario $usuario) {
        try {
            $query = $this->conn->prepare(
                "INSERT INTO usuario (email, senha, nome_completo, telefone) 
                            VALUES (:email, :senha, :nome_completo, :telefone)");

            $query->bindValue(':email', $usuario->email);
            $query->bindValue(':senha', password_hash($usuario->senha, PASSWORD_DEFAULT));
            $query->bindValue(':nome_completo', $usuario->nome_completo);
            $query->bindValue(':telefone', $usuario->telefone);

            $query->execute();

        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

}
?>