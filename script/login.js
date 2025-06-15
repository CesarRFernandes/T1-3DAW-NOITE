document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Impede o envio padrão do formulário

    // Aqui você faria a requisição AJAX para o servidor para verificar o login
    // Exemplo:
    /*
        fetch('processar_login.php', {
            method: 'POST',
            body: new FormData(form)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = 'catalogo.php';
            } else {
                alert('Login falhou: ' + data.message);
            }
        });
        */
    window.location.href = "catalogo.php"; // Redirecionamento provisório
  });
});
