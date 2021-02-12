<?php

    $server = "127.0.0.1";
    $user = "root";
    $pass = "acade123";
    $db = "cadastro";

    try{
        $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOExeption $erro){
        echo "Ocorreu um Erro de Conexão inesperado: {$erro->getMessage()}";
        $conn = null;
    }

?>