<?php

    class Logar{
        function Login($email, $senha){
            $query = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
            return $query;
        }
    }

?>