<?php

    try{
        $conexao = new \PDO("mysql:host=localhost;dbname=ecmbrascabos","root","root");
    }catch(\PDOException $e){
        die("Erro código: " . $e->getCode() . " : " . $e->getMessage());
    }

    $sql = "Select * from colaborador";

    $stmt = $conexao->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($result);

?>