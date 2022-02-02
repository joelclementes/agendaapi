<?php
include_once 'procesosBD.php';

class agenda{

    // Especificamos los datos para la conexión
    const SERVER = "localhost";
    const USER = "root";
    const PWD = "";
    const DB = "agenda";
    

    // Nótese que debemos nombrar los métodos lo más intuitivo posible
    public function agenda_select_all(){
        $ProcesosBD = new ProcesosBD(self::SERVER,self::USER,self::PWD,self::DB);
        $consulta = "SELECT * FROM agenda ORDER BY nombre";
        return $ProcesosBD->tabla($consulta);
    }
    
    public function agenda_select($id){
        $ProcesosBD = new ProcesosBD(self::SERVER,self::USER,self::PWD,self::DB);
        $consulta = "SELECT * FROM agenda WHERE id=$id";
        return $ProcesosBD->tabla($consulta);
    }

    public function agenda_insert($nombre,$correo){
        $ProcesosBD = new ProcesosBD(self::SERVER,self::USER,self::PWD,self::DB);
        $insert = "INSERT INTO agenda (nombre,correo) values ('$nombre','$correo')";
        return $ProcesosBD->ejecutaSentencia($insert);
    }

    public function agenda_update($id,$nombre,$correo){
        $ProcesosBD = new ProcesosBD(self::SERVER,self::USER,self::PWD,self::DB);
        $update = "UPDATE agenda set nombre = '$nombre', correo = '$correo' where id=$id";
        return $ProcesosBD->ejecutaSentencia($update);
    }

    public function agenda_delete($id){
        $ProcesosBD = new ProcesosBD(self::SERVER,self::USER,self::PWD,self::DB);
        $delete = "DELETE FROM agenda WHERE id = $id";
        return $ProcesosBD->ejecutaSentencia($delete);
    }

}
