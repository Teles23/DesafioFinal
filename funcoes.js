const campoSenha = document.querySelector('input[name="senha1"]');
const campoConfirmarSenha = document.querySelector('input[name="senha2"]');
const botao = document.querySelector('.frm-botao');
const letras = /[A-Z]/i;
const numeros = /\d+/;

campoSenha.addEventListener('input', validsenha);

campoConfirmarSenha.addEventListener('input', function () {
    verificaCampos()
});

function validsenha() {
    let senhanumeros = campoSenha.value.match(numeros)
    let senhaletras = campoSenha.value.match(letras)

    if (campoSenha.value)
        if (campoSenha.value.length >= 6 && (senhanumeros && senhaletras)) botao.disabled = false;
        else botao.disabled = true;
}

function verificaCampos() {
    if (campoSenha.value == campoConfirmarSenha.value)
        botao.disabled = false;
    else
        botao.disabled = true;
}

(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
        var forms = document.getElementsByClassName('needs-validation');
        // Faz um loop neles e evita o envio
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();