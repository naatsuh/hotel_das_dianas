<?php
    session_start();
    if (!isset($_SESSION['UsuarioLog'])){
        header("Location: login.php");
        session_destroy();
    }

    if(isset($_GET['deslogar'])){
        session_destroy();
        header("Location: index.php");
    }
    $nomePagina = "Reservas";
    include "views/header.php";
?>
<h1>
    <a href="?deslogar">Sair</a>
</h1>


<?php include "views/footer.php";?>
