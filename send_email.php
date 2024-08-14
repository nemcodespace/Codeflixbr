<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "suporte@codeflixbr.com.br"; // Substitua pelo seu endereço de email
    $subject = "Mensagem de Contato de $name";
    $body = "Nome: $name\nEmail: $email\n\nMensagem:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Falha ao enviar o email.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>