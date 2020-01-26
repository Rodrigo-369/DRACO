<?php

    if (!isset($_SESSION)):
        session_start();
        $_SESSION["logado"] = 0;
    endif;

    require("conex.php");

    $pdo = abrirBanco();

    $txtUsuario = trim($_POST["txtUsuario"]);
    $txtSenha = trim($_POST["txtSenha"]);

    $compararDados = $pdo->prepare ("SELECT usu_usuario , usu_senha 
        FROM  sys_usuario
        WHERE usu_usuario = ? AND  usu_senha = ?");

    $compararDados->bindValue(1, $txtUsuario);
    $compararDados->bindValue(2, $txtSenha);
    $compararDados->execute();

    $validacao = $compararDados->fetchObject();

    if($validacao) {
        $_SESSION["logado"] = 1;
        $id_user = $validacao->usu_usuario;
        $_SESSION["usu_usuario"] = $id_user;
        $_SESSION["nome_usuario"] = $pegarUsuario;
        echo "<script type='text/javascript'> location.href='dashbord.php'</script>";
    } else {
        echo "AINDA NÃO DEU CERTO";
    }
?>