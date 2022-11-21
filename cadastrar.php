<?php
include "header.php"
?>

<head>
    <title>Cadastro</title>

</head>

<body>
    <main class="form-login">
        <form class="needs-validation">
            <div class="row">
                <div class="col">
                    <label for="exampleInputEmail">Nome</label>
                    <input type="text" class="form-control" placeholder="Nome" required>
                </div>
                <div class="col">
                    <label for="exampleInputEmail1">Sobrenome</label>
                    <input type="text" class="form-control" placeholder="Sobrenome" required>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Endereço de email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input name="senha1" type="password" class="form-control" id="password" placeholder="Senha" required minlength="6">
                <div class="invalid-feedback">
                    Sua senha deve ter pelo menos 6 dígitos, ao menos um número e um caractere.
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Confirme sua senha</label>
                <input name="senha2" type="password" class="form-control" id="confirmpassword" placeholder="Confirme sua senha" required minlength="6">
            </div>
            <button type="submit" class="btn frm-botao btn-primary" disabled>Enviar</button>
        </form>
    </main>

    <script src="/funcoes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>