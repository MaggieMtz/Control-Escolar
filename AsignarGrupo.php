<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 25/09/2014
 * Time: 06:53 PM
 */

require_once('DB.php');
require('Grupo.php');
require('header.php');
require('menu.php');


if(isset($_REQUEST['idGrupo'])){
    $idGrupo = $_REQUEST['idGrupo'];
}else{
    $id = 0;
}
if($_POST['alumno'] != "")
{
 $alumno = new Grupo();
    $alumno->AsignarAlumnoAGrupo($idGrupo);
}

$alumno->selectGrupo($idGrupo);
