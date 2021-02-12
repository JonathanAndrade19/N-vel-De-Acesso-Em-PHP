<?php include 'header.php';?>
<body>
    <p class="titulo">Sistema de Nivel de Cadastro</p>
    <div class="container">
        <form action="./controller/cadastro.php" method="POST"></form>
            <div class="mb-3">
                <label class="form-label">Email: </label>
                <input type="email" class="form-control" id="email" placeholder="">
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword">
            </div>
            <button type="button" class="btn btn-outline-primary">CADASTRAR</button>
        
    </div>
</body>
</html>