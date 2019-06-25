<?php
    session_start();
    if(isset($_SESSION['UsuarioLog'])){
        header("Location: ../reservar.php");
        die();
    }
    $nomePagina = 'Login';
    require('views/header.php');
?>

<div class="container_login">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header"><?= SITE_NAME ?> - Login</div>
        <div class="card-body">
            <form class='form-login' action="action/usuario.login.php" method="post">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" name="email" class="form-control" required>
                        <label for="inputEmail">Endereço de e-mail</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" name="senha" class="form-control" required="required">
                        <label for="inputPassword">Senha</label>
                        <?php
                        if(isset($_GET['error'])) {
                            echo '<p style="color:tomato">Usuário ou senha inválidos.</p>';
                        }
                        ?>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="Login">
                <p>Não tenho conta, <a href="<?= SITE_HOME ?>registrar.php">Criar conta agora</a></p>
            </form>
        </div>
    </div>
</div>

</body>

</html>
