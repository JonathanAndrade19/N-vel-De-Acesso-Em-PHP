<?php include 'header.php';?>
<body>
    <p class="titulo">Sistema de Nivel de Cadastro</p>
    <div class="container">
        <form action="controller/cadastro.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Email: </label>
                <input name="email" type="email" class="form-control" id="email" placeholder="">
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                <input name="senha" type="password" class="form-control" id="inputPassword">
            </div>
            <input type="submit" class="btn btn-outline-primary" value="Cadastrar"></input>
        </form>
    </div>
</body>
</html>