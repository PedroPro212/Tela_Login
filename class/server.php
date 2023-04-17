<?php

    class Conn{
        var $server = '';
        var $user = '';
        var $password = '';
        var $bd = '';

        function conn(){
            $conn = mysqli_connect($this->server, $this->user, $this->password, $this->bd);
            return $conn;
        }
    }

?>