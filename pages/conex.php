<?php

    function abrirBanco(){
        $dns = "mysql:localhost;dbname=draco";
        $usuario = "root";
        $senha = "";


        $opcoes = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET character_set_connection=utf8',
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET character_set_client=utf8',
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET character_set_results=utf8'    
        );

        try{
            $pdo = new PDO($dns,$usuario,$senha, $opcoes);
        }catch(PDOException $e){
           echo $e->getMessage();  
        }
        return $pdo;

    }

?>