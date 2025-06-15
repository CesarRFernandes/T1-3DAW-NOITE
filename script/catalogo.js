document.addEventListener("DOMContentLoaded", function () {
  const botoesInteresse = document.querySelectorAll(".interesse");

  botoesInteresse.forEach((botao) => {
    botao.addEventListener("click", function () {
      // Aqui você faria a requisição AJAX para o servidor para registrar o interesse
      alert("Interesse registrado!");
    });
  });
});
