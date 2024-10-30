<?php
require_once "./config/database.php";

class Livro{
    private $conexao;
    private $tabela = 'livro';

    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $genero;

    public function __construct($db){
        $this->conexao = $db;
    }

    public function getIdLivro($id){
        $query = "SELECT * FROM {$this->tabela} WHERE id = {$this->id}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function cadastrarLivro(){
        $query = "INSERT INTO {$this->tabela} (titulo, autor, genero) VALUES ('{$this->titulo}', '{$this->autor}', '{$this->genero}');";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
}



