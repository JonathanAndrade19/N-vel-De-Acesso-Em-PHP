<?php
    require("conexao.php");

    if(isset($_POST['email']) && isset($_POST['senha'])){
        $query = $conn->prepare("SELECT * FROM Tb_contrato WHERE email = ? AND senha = ?");
        $query->execute(array($_POST['email'], $_POST['senha']));

        // echo $query->rowCount();

        if($query->rowCount()){
            $usuario = $query->fetchAll(PDO::FETCH_ASSOC)[0];

            print_r($usuario);
        }else{
            echo "Erro";
        }
    }else{
        echo "não tem Autorização";
    }

?>