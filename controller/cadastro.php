<?php
    require("conexao.php");

    if(isset($_POST['email']) && isset($_POST['senha'])){
        echo "senha bem Vindo ".$_POST['email'];
    }

?>