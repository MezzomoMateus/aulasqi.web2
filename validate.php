<?php 

$nome = htmlspecialchars($_POST['nome']);
$telefone = htmlspecialchars($_POST['telefone']);
$msg = htmlspecialchars($_POST['msg']);
#enviar as informações para o email

$to = "mateusmezzomo10oito@gmail.com"; #para enviar as inf do formulario pro email
$subject = "Novo contato pelo site"; #assunto
$message = "Nome: $nome
            Telefone: $telefone
            Mensagem:$msg";

            $headers = "from : mateusmezzomo10oito@gmail.com"; #de mim para mim           
    try{
        mail($to, $subject, $message, $headers);
        echo "Obrigado pelo contato!";
    } catch(Exception $error) {
        echo "Deu merda". $error->getMessage() ."";
    }