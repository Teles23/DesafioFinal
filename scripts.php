<?php

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
<scripT>
    let campoSenha = document.querySelector('input[name="senha_imob"]');
    let campoConfirmarSenha = document.querySelector('input[name="rsenha_imob"]');
    let botao = document.querySelector('.frm-botao');
    const regex = /[0-9]/;

    campoConfirmarSenha.addEventListener('input', function() {
        verificaCampos();
    });


    function verificaCampos() {
        if (campoSenha.value == campoConfirmarSenha.value && campoSenha.value.length >= 6)
            botao.disabled = false;
        else
            botao.disabled = true;
    }

    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
            var forms = document.getElementsByClassName('needs-validation');
            // Faz um loop neles e evita o envio
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>