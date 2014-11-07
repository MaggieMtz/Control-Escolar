<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 01/10/2014
 * Time: 01:54 PM
 */


require_once('DB.php');
require('Grupo.php');
require('header.php');
require('menu.php');

if(isset($_REQUEST['idAlumno'])){
    $idAlumno = $_REQUEST['idAlumno'];
}else{
    $id = 0;
}

$eliminarAlumno = new Grupo();
$eliminarAlumno->deleteAsignacioAlumno($idAlumno);

echo "Registro eliminado <a href='TestGrupo.php'>Continuar</a>";