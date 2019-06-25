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
<link href="css/tabela.css" rel="stylesheet" type="text/css">

<!-- Aqui usamos width para alterar a largura da tabela e border para definir uma borda à tabela -->
<table>
    <tr>
        <!-- Aqui também usamos o width para definir a largura e o height para definir a altura -->
        <td >Nome</td>
        <td >Telefone</td>
        <td >Endereço</td>
        <td >Cep</td>
    </tr>
    <tr>
        <td>Ricardo</td>
        <td>(21) 9999-9999</td>
        <td>Rua Dois, casa 3.</td>
        <td>99999-999</td>
    </tr>
</table>


<section>
    <a id="sair" href="<?= SITE_HOME ?>reservar1.php">Reservar</a>
    <a id="sair" href="?deslogar">Sair</a>
</section>


<?php include "views/footer.php";?>
