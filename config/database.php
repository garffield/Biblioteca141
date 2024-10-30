<?php

class Banco{
    const host = 'localhost';
    const banco_de_dados = 'biblioteca';
    const usuario = 'root';
    const senha = '';
    public $conexao;

    public function conectar(){
        $this->conexao = new mysqli_connect(self::host, self::banco_de_dados, self::usuario, self::senha);
    } 

}
