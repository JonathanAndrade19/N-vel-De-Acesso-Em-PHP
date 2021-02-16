<?php
    session_start();
    include 'header.php';
    require("controller/conexao.php");

    // $query = $conn->prepare("SELECT * FROM Tb_contrato");
    // $query->execute();
    // $rows = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="controller/cadastro.php" method="POST">
        <h3>Novo Postagem</h3>
        <input name="titulo" type="text">
        <input name="data" type="date" >
        <input name="postagem" type="text">
        <input name="visitas" type="text">
        <input name="titulo" type="text">
        <input name="id_postador" type="text">
        <input type="submit" value="Novo Post"></input>
    </form>
</body>
</html>