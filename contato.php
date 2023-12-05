<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos do formulário.";
    } else {
        
        echo "<h2>Dados Recebidos:</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Mensagem:</strong> $mensagem</p>";
    }
}
?>
