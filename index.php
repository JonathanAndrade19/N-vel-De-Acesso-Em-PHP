<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgendaAí</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="controller/cadastro.php" method="POST">
        <h3>Entrar na Agenda</h3>
        <input name="email" type="email">
        <input name="senha" type="password" >
        <input type="submit" value="Logar"></input>
    </form>
</body>
</html>