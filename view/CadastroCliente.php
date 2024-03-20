<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Cadastro Funcionario</title>
</head>
<body>

    <header>
    <section class="conteudo-cadastro">
        <section class="conteudo-formulario-cadastro">
            <form method="POST" action="../processamento/processamento.php">
                <label>Cadastrar Cliente</label>
                <input type="text" placeholder="Nome" name="inputNome">
                <input type="text" placeholder="Email" name="inputEmail">
                <input type="text" placeholder="CPF" name="inputCPF">
                <input type="password" placeholder="Senha" name="inputSenha">
                <input id="botao" type="submit" value="Cadastrar">
            </form>
        </section>
    </section>
</body>
</html>