<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmar_senha = $_POST["confirmar_senha"];

    $erros = array();

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros["email"] = "Formato de email inválido.";
    }

    if (strlen($senha) < 6 || !preg_match('/[a-z]/', $senha) || !preg_match('/[A-Z]/', $senha) || !preg_match('/[0-9]/', $senha)) {
        $erros["senha"] = "A senha deve ter pelo menos 6 caracteres, com letras maiúsculas, minúsculas e números.";
    }

    if ($senha !== $confirmar_senha) {
        $erros["confirmar_senha"] = "As senhas não coincidem.";
    }

    if (!empty($erros)) {
        $_SESSION['erros'] = $erros;
        header("Location: cadastro.php");
        exit;
    } else {

        echo "Conta criada desabilitada. Verifique seu email para confirmação.";
    }
}
