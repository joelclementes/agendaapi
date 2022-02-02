<?php 
// Especificamos estas cabeceras
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Incluimos el archivo que hará todas las operaciones del CRUD
// CRUD = Create, Read, Update, Delete
include_once("agenda.php");

//Creamos el objeto 
$oAgenda = new agenda();

//Recibimos las variables por método GET
//@ es para evitar error si no se encuentra una variable GET
@$proceso = $_GET["proceso"];
@$id = $_GET["id"];
@$nombre = $_GET["nombre"];
@$correo = $_GET["correo"];

/**
 * Según lo que recibimos de parte del frontend, eso ejecutamos
 * 
 * Debemos nombrar los métodos y variables de forma intuitiva
 * para facilitar el entendimiento del código a quien haga algún cambio, 
 * aunque no haya sido el autor del código
 */

switch ($proceso){
    case "AGENDA_SELECT_ALL":
        print $oAgenda->agenda_select_all();
        break;
    case "AGENDA_SELECT":
        print $oAgenda->agenda_select($id);
        break;
    case "AGENDA_INSERT":
        print $oAgenda->agenda_insert($nombre,$correo);
        break;
    case "AGENDA_UPDATE":
        print $oAgenda->agenda_update($id,$nombre,$correo);
        break;
    case "AGENDA_DELETE":
        print $oAgenda->agenda_delete($id);
        break;
}
?>
