    <!-- Required meta tags -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" href="css/style.css" />
<?php
    $nomePagina = "Cadastro";
    include "views/header.php";
?>


<html lang="pt_BR">
<body>

<div class="container_login">
    <div class="container-fluid">
        <div class="row">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-header" ">Cadastro</h3>

                        <form clss='form-login' action="action/usuario.registrar.php" method="post">

                            <div class="form-group">
                                <input type="email" name="email" class="form-control p_input" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="senha" class="form-control p_input" placeholder="Senha">
                            </div>
                            <div class="form-group">
                                <input type="text" name="nome_completo" class="form-control p_input" placeholder="NOME COMPLETO">
                            </div>
                            <div class="form-group">
                                <input type="text" name="cpf" class="form-control p_input" placeholder="CPF:99933311155">
                            </div>
                            <div class="form-group">
                                <input type="text" name="telefone" class="form-control p_input" placeholder="telefone:5566922221111">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check"><label><input type="checkbox" class="form-check-input">Eu aceito os termos & condições</label></div>
                            </div>
                            <div class="text-center-">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Criar conta</button>
                            </div>
                            <p id='cont' class="existing-user text-center pt-4 mb-0">Já tem uma conta?&nbsp;<a href="<?= SITE_HOME ?>login.php">Entrar</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="js/misc.js"></script>
</body>

</html>