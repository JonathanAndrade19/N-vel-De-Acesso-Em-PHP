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
    <title>dashboard - <?php echo $nome; ?></title>
    <link rel="stylesheet" href="main.css">
   
</head>
<body>
    <header>
        <div class="container" style="box-shadow: 2px 2px 4px 1px rgba(0, 0, 0, 0.2);">
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
</body>
</html>