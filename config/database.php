<?php

class Banco{
    const host = 'localhost';
    const banco_de_dados = 'biblioteca141';
    const usuario = 'root';
    const senha = '';
    public $conexao;

    public function conectar(){
        $this->conexao = new mysqli(self::host, self::banco_de_dados, self::usuario, self::senha);
        if(!$this->conexao){
            echo "erro na conexao";
        } else{
            return $this->conexao;
        }
    } 

}
