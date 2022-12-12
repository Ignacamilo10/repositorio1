<?php
Class conexion {

    protected $db;

    protected function conectar(){
        try {
            $Conexion = $this->db = new PDD("mysql:local=localhost;dbname=constructora","root","");

            return $Conexion;

        }catch(Exception $e) {
            echo $e-->get_Message();
            die();
        

        }
    }

public function set_names(){
    return $this->db->query("SET NAMES 'utf8'");
}
public function route(){
    return "http://localhost/ProyectoFinal/index.php";
}

}