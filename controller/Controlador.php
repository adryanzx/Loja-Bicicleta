<?php
require_once("../model/BancoDeDados.php");
require_once("../model/Cliente.php");



class Controlador{

    //Atributo
    private $bancoDeDados;

    function __construct(){
        $this->bancoDeDados = new BancoDeDados("localhost","root","","bicicleta");
    }

    public function cadastrarCliente($nome, $email, $cpf, $senha){
        $cliente = new Cliente($nome,$email,$cpf,$senha);
        $this->bancoDeDados->inserirCliente($cliente);
    }

}

?>