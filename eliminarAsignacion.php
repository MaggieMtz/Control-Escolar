<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 24/09/2014
 * Time: 07:11 PM
 */
require('AsignarMaterias.php');
require('DB.php');
require('header.php');
require('menu.php');

$maestro =$_REQUEST ['idMaestro'];
echo $maestro;
$materia =$_REQUEST ['idMateria'];
echo $materia;

$sqlUpdateSpecific = "DELETE FROM materia_asignada where idMateria=$materia and idMaestro=$maestro ";
echo $sqlUpdateSpecific;
$resultUpdateUser = mysql_query($sqlUpdateSpecific) or die ("Error delete");

echo "<center><b>Se elimino la asignación</b></center>";
echo "<center><b><a href='TestMateria.php'>Continuar</a></b></center>";