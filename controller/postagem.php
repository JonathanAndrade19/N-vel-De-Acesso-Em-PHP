<?php
    require("conexao.php");

    $titulo = $_POST['titulo'];
    $data = $_POST['data'];
    $postagem = $_POST['postagem'];
    $visitas = $_POST['visitas'];
    $id_postador = $_POST['id_postador'];

    var_dump("Titulo: ".$titulo."Data: ".$data."Postagem: ".$postagem."Visitas: ".$visitas."id_Post: ".$id_postador);exit;
?>