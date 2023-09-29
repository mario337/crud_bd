<?php

class Database{
    private $host = 'localhost:3399';
    private $usuario = 'root';
    private $senha = '';
    private $banco = 'crud';
    private $conexao;

    public function conectar() {
        //mysqli é uma funçao especifica do php para 
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
        if($this->conexao->connect_error){
            die("Erro na conexão:" . $this->conexao->connect_error);
        }
        //retorno variado de conexao 
        return $this->conexao;
    }


}
?>