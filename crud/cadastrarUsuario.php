<?php

    //Insere dados na tabela

    $servername = "localhost";
    $username = "root";
    $password = "";

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {

        require_once('conexao.php');

        $sql = "INSERT INTO usuario (id_user, nome_user, sobrenome_user, email_user, senha_user)
        VALUES (null, '".$nome."', '".$sobrenome."', '".$email."','".$senha."')";

        $con->exec($sql);

        header('Location: ../entrar.php');
        
        
    } catch (PDOException $e) {

         echo $sql . "<br>" . $e->getMessage();
        
    }

    $con = null;

?>