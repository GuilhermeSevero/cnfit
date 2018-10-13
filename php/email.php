<?php

    ini_set('display_errors', 1);

    error_reporting(E_ALL);

    $from = "guilhermehmsevero@hotmail.com";

    $to = "guilhermehmsevero@hotmail.com";

    $subject = "Teste de Envio PHP";

    $message = "Estou enviando esse email de teste para ver se tá bombando!";

    $headers = "De:". $from;

    mail($to, $subject, $message, $headers);

    echo "A mensagem de e-mail foi enviada.";

?>