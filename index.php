<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


include_once("agenda.php");

$oAgenda = new agenda();

@$proceso = $_GET["proceso"];
@$id = $_GET["id"];
@$nombre = $_GET["nombre"];
@$correo = $_GET["correo"];

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
