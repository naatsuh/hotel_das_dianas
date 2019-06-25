<?php
    $nomePagina = "Cadastro";
    include "views/header.php";
?>

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
                                <input type="text" name="telefone" class="form-control p_input" placeholder="telefone:5566922221111">
                            </div>
                            <div class="text-center-">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Criar conta</button>
                            </div>
                            <p class="existing-user text-center pt-4 mb-0">Já tem uma conta?&nbsp;<a href="<?= SITE_HOME ?>login.php">Entrar</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>