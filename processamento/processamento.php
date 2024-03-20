<?php

session_start();
require_once("../controller/Controlador.php");
require_once("../model/Cliente.php");

$controlador = new Controlador();

//Login
if(isset($_POST['inputEmailLog']) && isset($_POST['inputSenhaLog'])){

    $_SESSION['estaLogado'] = TRUE;
    $email = $_POST['inputEmailLog'];
    $senha = $_POST['inputSenhaLog'];

    //echo "Email: " . $email . "Senha: " . $senha;
    header('Location:../view/inicio.php');
    die();
}

//Cadastro de Cliente
if(isset($_POST['inputNome']) && 
   isset($_POST['inputCPF'])  && isset($_POST['inputEmail']) &&
   isset($_POST['inputSenha'])){

    $nome = $_POST['inputNome'];
    $email = $_POST['inputEmail'];
    $cpf = $_POST['inputCPF'];  
    $senha = $_POST['inputSenha'];
    
    $controlador->cadastrarCliente($nome, $cpf, $email, $senha);

    header('Location:../view/login.php');
    die();
}




?>