<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    ini_set('display_errors', 1);

    error_reporting(E_ALL);

    $from = $email;

    $to = "jo_neugebauer@hotmail.com;guilhermehmsevero@hotmail.com";

    $subject = "Contato Site ($nome)";

    $headers = "From:". $from;

    try {
        mail($to, $subject, $mensagem, $headers);
        header('Location: /index.php?enviado=1');
    } catch (Exception $e) {
        header('Location: /index.php?enviado=0&erro='.$e->getMessage());
    }
?>