<?php

session_start();
require_once("../controller/Controlador.php");
require_once("../model/Cliente.php");
require_once("../model/BancoDeDados.php");

$controlador = new Controlador();

if (isset($_POST['inputEmailLog']) && isset($_POST['inputSenhaLog'])) {
    $email = $_POST['inputEmailLog'];
    $senha = $_POST['inputSenhaLog'];

    $bancoDeDados = new BancoDeDados("localhost", "root", "", "bicicleta");
    $conexao = $bancoDeDados->conectarBD();

    $consulta = "SELECT * FROM cliente WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $consulta);

    if ($resultado && mysqli_num_rows($resultado) == 1) {
        $cliente = mysqli_fetch_assoc($resultado);
        $senhaArmazenada = $cliente['senha'];

        if ($senha === $senhaArmazenada) {
            $_SESSION['estaLogado'] = true;
            header('Location:../view/inicio.php');
            exit();
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}

//Cadastro de Cliente
if(isset($_POST['inputNome']) && 
   isset($_POST['inputEmail'])  && isset($_POST['inputCPF']) &&
   isset($_POST['inputSenha'])){

    $nome = $_POST['inputNome'];
    $email = $_POST['inputEmail'];
    $cpf = $_POST['inputCPF'];  
    $senha = $_POST['inputSenha'];
    
    $controlador->cadastrarCliente($nome, $email, $cpf, $senha);

    header('Location:../view/login.php');
    die();
}




?>