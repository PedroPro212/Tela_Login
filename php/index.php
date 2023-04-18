<?php

    require_once('../class/server.php');            // Conectar a class de conexão
    require_once('../class/logar.php');             // Conectar a class de logar

    $conn = new Conn();                             // Atribuiu a class Conn a uma variável
    $consulta = new Logar();                        // // Atribiu a class de Logar a uma variável

    $email = $_POST['email'];
    $senha = $_POST['password'];

    if(isset($_POST['logar'])){                     // Confere se todos os campos foram preenchidos
        $query = $consulta->Login($email, $senha);          // Envia os parâmetros de Login para a function
        $verifica = mysqli_query($conn->conn(), $query) or die ("erro ao entrar");          // Faz a conexão e executa a query

        if(mysqli_num_rows($verifica)<=0){
            echo "<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='../index.html';</script>";
            die();
        }else{
            echo "<script>alert('Você entrou');</script>";
        }
    }else{
        echo "Erro ao enviar formulário, o envio não foi feito via Post";
    }

?>