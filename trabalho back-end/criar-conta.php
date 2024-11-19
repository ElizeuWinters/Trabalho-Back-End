<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);
    $confirmaSenha = htmlspecialchars($_POST['confirma-senha']);

    // Verificar se as senhas coincidem
    if ($senha !== $confirmaSenha) {
        echo "Erro: As senhas não coincidem.";
        exit;
    }

    // Aqui você pode adicionar a lógica para salvar os dados no banco de dados
    // Por exemplo, com MySQL (opcional):
    /*
    $conn = new mysqli("localhost", "usuario", "senha", "banco");
    if ($conn->connect_error) {
        die("Erro ao conectar com o banco de dados: " . $conn->connect_error);
    }

    $senhaHash = password_hash($senha, PASSWORD_BCRYPT); // Criptografar a senha
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senhaHash')";

    if ($conn->query($sql) === TRUE) {
        echo "Conta criada com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }

    $conn->close();
    */

    echo "Conta criada com sucesso! Nome: $nome, Email: $email.";
}
?>
