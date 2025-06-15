document.addEventListener("DOMContentLoaded", function () {
  const botaoAceitar = document.querySelector(".aceitar");
  const botaoRecusar = document.querySelector(".recusar");

  botaoAceitar.addEventListener("click", function () {
    // Aqui você faria a requisição AJAX para o servidor para aceitar a oferta
    alert("Oferta aceita!");
  });

  botaoRecusar.addEventListener("click", function () {
    // Aqui você faria a requisição AJAX para o servidor para recusar a oferta
    alert("Oferta recusada!");
  });
});
