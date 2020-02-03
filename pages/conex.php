<?php

define('HOST', 'drattoolog.deoxus.com.br');
define('USUARIO', 'deoxus52_rodrigo');
define('SENHA', 'rodrigo');
define('DB', 'deoxus52_db_draco');


$conectar = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

    /*function abrirBanco(){
        $dns = "mysql:localhost;dbname=draco";
        $usuario = "root";
        $senha = "r3d3g3nirvana";


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

    }*/

?>