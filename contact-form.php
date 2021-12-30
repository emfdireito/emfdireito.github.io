<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $from    = $_POST['nome'];
    $email   = $_POST['email'];
    $subject = $_POST['assunto'];
    $message = $_POST['msg'];
    $headers = 'From: ' . $from . ' - ' . $email;
    $to      = 'contato@emf.adv.br';

    mail($to, $subject, $message, $headers);

    echo 'E-mail enviado com sucesso!';
?>