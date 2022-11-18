<?php
include "header.php"
?>

<head>
    <title>Login</title>
</head>

<body class="text-center">
    <main class="form-login">

        <form action="logar.php" method="POST">
            <img class="mb-4" src="/assets/img/logo.png" alt="" width="70" height="70">
            <h3 class="h3">Painel Administrativo</h3>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Login</label>
                <input type="text" class="form-control" name="login" placeholder="Login">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" placeholder="Senha">
            </div>
            <div class="col-12 " style="display:grid;margin-bottom:5px">
                <button type="submit" class="btn btn-primary">Logar</button>
            </div>
        </form>
        <div>
            <a href="cadastrar.php"> <button type="submit" class="btn btn-primary" style="width:100% ;"> Cadastrar</button></a>
        </div>
    </main>
    <?php
    include "scripts.php"
    ?>

</body>

</html>