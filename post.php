<?php
    session_start();
    include 'header.php';
    
    if(isset($_SESSION["usuario"])){
        $nome = $_SESSION["usuario"][0];
        $adm = $_SESSION["usuario"][1];
        require("controller/conexao.php");
    }else{
        echo "<script>window.location = '../index.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <style>
        h3{
            text-align: center;
            color: var(--lilas);
        }

        form {
            background-color: var(--branco);
            max-width: 500px;
            width: 70%;
            padding: 20px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
        }

        form input[type=text],
        form input[type=date]{
            width: 100%;
            height: 45px;
            border: 1px solid var(--cinza);
            padding-left: 10px;
            margin: 10px 0;
            border-radius: 15px;
        }
        form input[type=submit]{
            width: 100%;
            height: 40px;
            cursor: pointer;
            background-color: var(--lilas);
            color: var(--branco);
            border: 0;
            border-radius: 15px;
        }

        form input[type=submit]:hover{
            background-color: var(--lilasClaro);
        }

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h2 class="logo">AGENDAAÍ</h2>
            <nav>
                <a href="dashboard.php">Inicio</a>
                <a href="post.php">Agendar</a>
                <?php if($adm == 1): ?>
                    <a href="listUser.php">Lista de Usuarios</a>
                <?php endif; ?>
                <a href="controller/logout.php" style="text-decoration:none;">Sair</a>
            </nav>
        </div>
    </header>

    <div class="post">
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
    </div>
</body>
</html>