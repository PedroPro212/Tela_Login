<?php

    require_once('../class/server.php');       // Conectar a class de conexão
    require_once('../class/cadastrar.php');     // Conectar a class de cadastrar usuário

    $conn = new Conn;           // Atribuiu a class Conn a uma variável
    $cadastrar = new Cadastrar;         // Atribiu a class de Cadastrar a uma variável
    

    $email = $_POST['email'];
    $senha1 = $_POST['password1'];
    $senha2 = $_POST['password2'];

    if($senha1 == $senha2){             // Faz um check se as duas senhas estão corretas
        if(isset($_POST['logar'])){     // Confere se todos os campos foram preenchidos
            $query = $cadastrar->cadastrar($email, $senha2);        // Envia os parâmetros de INSERT para a function
            $insert = mysqli_query($conn->conn(), $query) or die("Erro ao entrar");     // Faz a conexão e executa a query

            echo "<script language='javascript' type='text/javascript'>
            alert('Cadastrado com sucesso');window.location
            .href='../index.html';</script>";
        }else{
            echo "<script language='javascript' type='text/javascript'>
            alert('Preenha o formulário para se cadastrar!');window.location
            .href='../view/cadastrar.html;</script>";
        }
}else{                                                                          // As senhas não foram iguais
        echo "<script language='javascript' type='text/javascript'>
        alert('As senhas devem ser iguais!');window.location
        .href='../view/cadastrar.html';</script>";
    }

?>