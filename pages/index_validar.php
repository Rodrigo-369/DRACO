<?php

    if (!isset($_SESSION)):
        session_start();
        $_SESSION["logado"] = 0;
    endif;

    require("conex.php");

    $pdo = abrirBanco();

    $pegarUsuario = trim($_POST["txtUsuario"]);
    $pegarSenha   = trim($_POST["txtSenha"]);

    //Valida Login
    $validarLogin = $pdo->prepare ("SELECT usu_usuario, usu_senha
                            FROM sys_usuario
                            WHERE usu_usuario = ? AND usu_senha = ?");


    $validarLogin->bindValue(1, $pegarUsuario);
    $validarLogin->bindValue(2, $pegarSenha);
    $validarLogin->execute();

    $validacao = $validarLogin->fetchObject();


    if($validacao):
        $_SESSION["logado"] = 1;
        $id_user = $validacao->usu_usuario;
        $_SESSION["usu_usuario"] = $id_user;
        $_SESSION["nome_usuario"] = $pegarUsuario;
        echo "AGORA FUNCIONOU";

    else:
        /*
        echo "<script type='text/javascript'> alert ('SENHA INCORRETA!')</script>";
        echo "<script type='text/javascript'> location.href='../index.php?erro=login'</script>";
        */
        echo 'NÃO DEU CERTO';
    endif;

?>