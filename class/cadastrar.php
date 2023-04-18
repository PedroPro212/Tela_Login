<?php

    class Cadastrar{
        function cadastrar($email, $senha){
            $query = "INSERT INTO login VALUES(NULL, '$email', '$senha')";
            return $query;
        }
    }

?>