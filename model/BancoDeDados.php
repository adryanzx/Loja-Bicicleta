<?php

class BancoDeDados{
    private $host;
    private $login;
    private $senha;
    private $dataBase;

    public function __construct($Host, $Login, $Senha, $DataBase){
        $this->host = $Host;
        $this->login = $Login;
        $this->senha = $Senha;
        $this->dataBase = $DataBase;
    }

    //Métodos
    public function conectarBD(){

        $conexao = mysqli_connect($this->host,$this->login,$this->senha,$this->dataBase);
        return($conexao);
    }

    public function inserirCliente($cliente){
        
        $conexao = $this->conectarBD();
        $consulclien= "INSERT INTO cliente (nome, email, cpf, senha) 
                     VALUES ('{$cliente->get_Nome()}','{$cliente->get_Email()}','{$cliente->get_Cpf()}','{$cliente->get_Senha()}')";
        mysqli_query($conexao,$consulclien);
    }
    

    
    public function retornarClientes(){
    
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM cliente";
        $listaClientes = mysqli_query($conexao,$consulta);
        return $listaClientes;
    }


}

?>