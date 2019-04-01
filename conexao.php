<?php

class Conexao {
    private $host = 'localhost';
    private $dbname = 'biblioteca_projeto';
    private $user = 'root';
    private $pass = '';

    public function conectar() {
        try {
            $conexao = new PDO(
                "mysq:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            return conexao;
        } catch (PDOExpection $e){
            echo '<p>'.$e->getMessage().'</p>';
        }
    }
}