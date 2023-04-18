<?php

    class Conn{
        var $server = '';    // Coloque as informações do seu banco de dados (ex:000.0.0.0)
        var $user = '';           // Nome de usuário do banco (ex: root)           
        var $password = '';       // Senha de login no banco (12345) 
        var $bd = '';       // Qual o nome do banco que vai utilizar (ex: tela_login)  

        function conn(){
            $conn = mysqli_connect($this->server, $this->user, $this->password, $this->bd);
            return $conn;
        }
    }

?>