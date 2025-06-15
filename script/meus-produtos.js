document.addEventListener("DOMContentLoaded", function () {
  const botoesExcluir = document.querySelectorAll(".excluir");

  botoesExcluir.forEach((botao) => {
    botao.addEventListener("click", function () {
      // Aqui você faria a requisição AJAX para o servidor para excluir o produto
      alert("Produto excluído!");
    });
  });
});
