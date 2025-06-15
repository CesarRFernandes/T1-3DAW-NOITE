document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  const emailInput = document.getElementById("email");
  const senhaInput = document.getElementById("senha");
  const confirmarSenhaInput = document.getElementById("senha2");
  const eyeIcons = document.querySelectorAll(".eye-icon");

  // Função para mostrar/esconder senha
  eyeIcons.forEach((eyeIcon) => {
    eyeIcon.addEventListener("click", function () {
      const input = this.parentNode.querySelector("input");
      if (input.type === "password") {
        input.type = "text";
        this.src = "https://img.icons8.com/ios-glyphs/30/000000/visible.png"; // Troque para o ícone de "visível"
      } else {
        input.type = "password";
        this.src = "https://img.icons8.com/ios-glyphs/30/000000/invisible.png"; // Troque para o ícone de "invisível"
      }
    });
  });

  // Validação do lado do cliente (opcional, mas recomendado)
  form.addEventListener("submit", function (event) {
    let isValid = true;

    if (!emailInput.value.includes("@")) {
      document.getElementById("email_error").textContent = "Email inválido.";
      isValid = false;
    } else {
      document.getElementById("email_error").textContent = "";
    }

    if (senhaInput.value.length < 6) {
      document.getElementById("senha_error").textContent = "Senha muito curta.";
      isValid = false;
    } else {
      document.getElementById("senha_error").textContent = "";
    }

    if (senhaInput.value !== confirmarSenhaInput.value) {
      document.getElementById("confirmar_senha_error").textContent =
        "Senhas não coincidem.";
      isValid = false;
    } else {
      document.getElementById("confirmar_senha_error").textContent = "";
    }

    if (!isValid) {
      event.preventDefault(); // Impede o envio do formulário se houver erros
    }
  });
});
