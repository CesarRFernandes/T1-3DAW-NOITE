<?php
// --- Credenciais de acesso ao seu banco de dados no XAMPP ---
$servidor = "localhost";        // O servidor onde o MySQL está rodando
$usuario_db = "root";           // O usuário padrão do MySQL no XAMPP
$senha_db = "";                 // A senha padrão do MySQL no XAMPP é vazia
$banco = "usuarios_db";         // O nome do banco de dados que você criou
$charset = "utf8mb4";           // Essencial para suportar emojis e caracteres especiais

// --- Bloco de Conexão ---
try {
    // DSN (Data Source Name) - A string de conexão
    $dsn = "mysql:host=$servidor;dbname=$banco;charset=$charset";

    // Opções do PDO
    $opcoes = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Lança exceções em caso de erro
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Retorna os dados como array associativo
        PDO::ATTR_EMULATE_PREPARES   => false,                  // Usa 'prepared statements' nativos
    ];

    // Cria a instância do PDO para estabelecer a conexão
    $pdo = new PDO($dsn, $usuario_db, $senha_db, $opcoes);

    // Se chegou até aqui, a conexão foi um sucesso!
    // A variável $pdo agora é o nosso "link" com o banco de dados.

} catch (PDOException $e) {
    // Se a conexão falhar, o script para e exibe uma mensagem de erro.
    // Em um site em produção, você pode querer registrar esse erro em um arquivo em vez de exibi-lo.
    throw new PDOException("Erro na conexão com o banco de dados: " . $e->getMessage(), (int)$e->getCode());
}
