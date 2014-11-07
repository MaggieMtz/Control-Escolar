<?php
/**
 * Created by PhpStorm.
 * User: MaggieMtz
 * Date: 24/09/2014
 * Time: 12:59 AM
 */

class Maestro {

}


$sqlMaestro = "SELECT * from materia_asignada where idMaestro= $id";
echo $sqlMaestro;
$consultaMaestro = mysql_query($sqlMaestro);
$cuantosMaestro =mysql_num_rows($consultaMaestro);
for ($y = 0; $y < $cuantosMaestro; $y++) {

    $idM = mysql_result($consultaMaestro, $y, 'idMateria');
    echo $idM;

    $sqlMaestro = "SELECT * from materia where idMateria <> $idM";
    echo $sqlMaestro;
    $consultaMaestro = mysql_query($sqlMaestro);
    $cuantosMaestro = mysql_num_rows($consultaMaestro);
    for ($y = 0; $y < $cuantosMaestro; $y++) {
        if ($consultaMaestro != 0) {
            echo "<tr><td>Maestro: <select name ='idMaestro' id='idMaestro'>";
            $nombre = mysql_result($consultaMaestro, $y, 'NombreMateria');
            echo "<option value = '$id'>$nombre</option> ";
        } else {
            echo "<tr><td>Maestro: <select name ='idMaestro' id='idMaestro'>";
            echo "<option value >No disponible</option> ";
        }
    }
}