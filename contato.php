<?php
if($_server["request_method"] =="post"){
    $nome = htmlspecialchars($_post['nome']);
    $email = htmlspecialchars($_post['email']);
    $mensagem = htmlspecialchars($_post['mensagem']);

    // aqui você pode adicionar código para enviar o email ou armazenar em um banco de dados
    echo "mensagem recebida! Nome: $nome, Email: $email, Mensagem: $mensagem";
} else{
    echo "Metodos de requisição invalido.";
}
?>