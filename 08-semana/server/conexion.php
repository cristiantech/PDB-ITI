<?php
class Conexion {
    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "academico";

    public function connect(){
        $response = mysqli_connect($this->server, $this->user, $this->pass, $this->db);
        return $response;
    }
}
