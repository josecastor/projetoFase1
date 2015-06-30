<?php

    try{
        $conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","root");
    }catch(\PDOException $e){
        die("Erro código: " . $e->getCode() . $e->getMessage());
    }

?>