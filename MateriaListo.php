<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 24/09/2014
 * Time: 06:58 PM
 */

require('AsignarMaterias.php');
require('DB.php');
require('header.php');
require('menu.php');


if(isset($_REQUEST['maestro'])){
    $id = $_REQUEST['maestro'];
}else{
    $id = 0;
}
if(isset($_REQUEST['materia'])){
    $id_materia = $_REQUEST['materia'];
}else{
    $id_materia = 0;
}

$materia = new Materia();
$materia->AsignarMateriaAMaestro($id_materia,$id);
    echo "<a href='TestMateria.php'>Listo</a>";