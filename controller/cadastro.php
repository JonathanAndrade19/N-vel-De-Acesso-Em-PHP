<?php
    require("conexao.php");

    if(isset($_POST['email']) && isset($_POST['senha'])){
        $query = $conn->prepare("SELECT * FROM Tb_contrato WHERE email = ? AND senha = ?");
        $query->execute(array($_POST['email'], $_POST['senha']));

        if($query->rowCount()){
            $usuario = $query->fetchAll(PDO::FETCH_ASSOC)[0];

            session_start();
            $_SESSION["usuario"] = array($usuario["nome"], $usuario["adm"]);
            echo "<script>window.location = '../dashboard.php'</script>";
        }else{
            echo "<script>alert('Login ou Senha Incorreta!');</script>";
            echo "<script>window.location = '../index.php'</script>";
        }
    }else{
        echo "<script>alert('Login ou Senha Incorreta!');</script>";
        echo "<script>window.location = '../index.php'</script>";

    }

?>