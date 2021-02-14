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
    <link rel="stylesheet" href="./src/css/main.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <a href="controller/logout.php" style="text-decoration:none;">Sair</a>
        <?php if($adm == 1):?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Adm</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                        $buscarAdm = $conn->prepare("SELECT * FROM Tb_contrato");
                        $buscarAdm->execute();

                        $users = $buscarAdm->fetchAll(PDO::FETCH_ASSOC);

                        foreach($users as $user):
                    ?>
                    <tr>
                        <td><?php echo $user['nome'];?></td>
                        <td><?php echo $user['email'];?></td>
                        <td><?php echo $user['senha'];?></td>
                        <td><?php echo $user['adm'];?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        <?php endif;?>
    </div>
</body>
</html>